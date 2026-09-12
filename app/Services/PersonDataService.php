<?php

namespace App\Services;

class PersonDataService
{
    public function getData(): array
    {
        $dataPath = storage_path('app/public/personData.json');
        $defaultPath = storage_path('app/public/defaults/personData.json');

        $data = $this->readJson($dataPath);
        $defaults = $this->readJson($defaultPath);

        return $this->mergeData($defaults, $data);
    }

    private function readJson(string $path): array
    {
        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        if ($content === false || trim($content) === '') {
            return [];
        }

        $data = json_decode($content, true);

        return is_array($data) ? $data : [];
    }

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