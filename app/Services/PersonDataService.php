<?php

namespace App\Services;

use RuntimeException;

class PersonDataService
{
    private string $dataPath;
    private string $defaultPath;

    public function __construct()
    {
        $this->dataPath = storage_path('app/public/personData.json');
        $this->defaultPath = storage_path('app/public/defaults/personData.json');
    }

    /**
     * Get the complete portfolio data.
     */
    public function getData(): array
    {
        $data = $this->readJson($this->dataPath);
        $defaults = $this->readJson($this->defaultPath);

        return $this->mergeData($defaults, $data);
    }

    /**
     * Update portfolio data.
     */
    public function update(array $data): void
    {
        $directory = dirname($this->dataPath);

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $existingData = $this->readJson($this->dataPath);

        $updatedData = $this->mergeData($existingData, $data);

        $this->persist($updatedData);
    }

    public function collection(string $key): array
    {
        $value = $this->getData()[$key] ?? [];

        return is_array($value) ? $value : [];
    }

    public function replaceCollection(string $key, array $items): void
    {
        $data = $this->readJson($this->dataPath);
        $data[$key] = array_values($items);
        $this->persist($data);
    }

    private function persist(array $data): void
    {
        $directory = dirname($this->dataPath);

        if (! is_dir($directory) && ! mkdir($directory, 0755, true) && ! is_dir($directory)) {
            throw new RuntimeException('Unable to create the portfolio data directory.');
        }

        $json = json_encode(
            $data,
            JSON_PRETTY_PRINT |
            JSON_UNESCAPED_SLASHES |
            JSON_UNESCAPED_UNICODE |
            JSON_THROW_ON_ERROR
        );

        if (file_put_contents($this->dataPath, $json . PHP_EOL, LOCK_EX) === false) {
            throw new RuntimeException('Unable to write portfolio data.');
        }
    }

    /**
     * Read a JSON file.
     */
    private function readJson(string $path): array
    {
        if (! file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        if ($content === false || trim($content) === '') {
            return [];
        }

        $data = json_decode($content, true);

        return is_array($data) ? $data : [];
    }

    /**
     * Recursively merge data while preserving defaults.
     */
    private function mergeData(array $defaults, array $data): array
    {
        foreach ($data as $key => $value) {

            if (
                is_array($value) &&
                isset($defaults[$key]) &&
                is_array($defaults[$key])
            ) {
                $defaults[$key] = $this->mergeData(
                    $defaults[$key],
                    $value
                );
            } elseif ($value !== null && $value !== '') {
                $defaults[$key] = $value;
            }
        }

        return $defaults;
    }
}