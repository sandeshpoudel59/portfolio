<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PersonDataService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ContentController extends Controller
{
    private const SECTIONS = [
        'projects' => [
            'label' => 'Projects',
            'fields' => [
                'name' => ['label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => ['required', 'string', 'max:5000']],
                'role' => ['label' => 'Role', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
                'image' => ['label' => 'Image URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:1000']],
                'liveUrl' => ['label' => 'Live URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:1000']],
                'sourceCodeUrl' => ['label' => 'Source code URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:1000']],
            ],
        ],
        'experience' => [
            'label' => 'Experience',
            'fields' => [
                'jobTitle' => ['label' => 'Job title', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'company' => ['label' => 'Company', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'location' => ['label' => 'Location', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
                'employmentType' => ['label' => 'Employment type', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:80']],
                'startDate' => ['label' => 'Start date', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:40']],
                'endDate' => ['label' => 'End date', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:40']],
                'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string', 'max:5000']],
            ],
        ],
        'education' => [
            'label' => 'Education',
            'fields' => [
                'degree' => ['label' => 'Degree', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'fieldOfStudy' => ['label' => 'Field of study', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
                'institution' => ['label' => 'Institution', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'location' => ['label' => 'Location', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
                'startDate' => ['label' => 'Start date', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:40']],
                'endDate' => ['label' => 'End date', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:40']],
                'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string', 'max:5000']],
            ],
        ],
        'achievements' => [
            'label' => 'Achievements',
            'fields' => [
                'title' => ['label' => 'Title', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => ['nullable', 'string', 'max:5000']],
                'date' => ['label' => 'Date', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:40']],
                'organization' => ['label' => 'Organization', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
            ],
        ],
        'certifications' => [
            'label' => 'Certifications',
            'fields' => [
                'name' => ['label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'issuingOrganization' => ['label' => 'Issuing organization', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
                'issueDate' => ['label' => 'Issue date', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:40']],
                'credentialId' => ['label' => 'Credential ID', 'type' => 'text', 'rules' => ['nullable', 'string', 'max:160']],
                'credentialUrl' => ['label' => 'Credential URL', 'type' => 'url', 'rules' => ['nullable', 'url', 'max:1000']],
            ],
        ],
        'services' => [
            'label' => 'Services',
            'fields' => [
                'name' => ['label' => 'Name', 'type' => 'text', 'rules' => ['required', 'string', 'max:160']],
                'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => ['required', 'string', 'max:5000']],
            ],
        ],
    ];

    public function index(string $section, PersonDataService $service): View
    {
        $config = $this->config($section);

        return view('admin.content.index', [
            'section' => $section,
            'config' => $config,
            'items' => $service->collection($section),
        ]);
    }

    public function create(string $section): View
    {
        $config = $this->config($section);

        return view('admin.content.form', compact('section', 'config'));
    }

    public function store(string $section, Request $request, PersonDataService $service): RedirectResponse
    {
        $config = $this->config($section);
        $items = $service->collection($section);
        $items[] = $request->validate($this->rules($config));
        $service->replaceCollection($section, $items);

        return redirect()->route('admin.content.index', $section)->with('success', "{$config['label']} item created.");
    }

    public function edit(string $section, int $item, PersonDataService $service): View
    {
        $config = $this->config($section);
        $items = $service->collection($section);

        abort_unless(array_key_exists($item, $items), 404);

        return view('admin.content.form', [
            'section' => $section,
            'config' => $config,
            'item' => $items[$item],
            'itemIndex' => $item,
        ]);
    }

    public function update(string $section, int $item, Request $request, PersonDataService $service): RedirectResponse
    {
        $config = $this->config($section);
        $items = $service->collection($section);
        abort_unless(array_key_exists($item, $items), 404);
        $items[$item] = $request->validate($this->rules($config));
        $service->replaceCollection($section, $items);

        return redirect()->route('admin.content.index', $section)->with('success', "{$config['label']} item updated.");
    }

    public function destroy(string $section, int $item, PersonDataService $service): RedirectResponse
    {
        $config = $this->config($section);
        $items = $service->collection($section);
        abort_unless(array_key_exists($item, $items), 404);
        array_splice($items, $item, 1);
        $service->replaceCollection($section, $items);

        return redirect()->route('admin.content.index', $section)->with('success', "{$config['label']} item deleted.");
    }

    private function config(string $section): array
    {
        if (! isset(self::SECTIONS[$section])) {
            throw new NotFoundHttpException;
        }

        return self::SECTIONS[$section];
    }

    private function rules(array $config): array
    {
        return collect($config['fields'])
            ->mapWithKeys(fn (array $field, string $name) => [$name => $field['rules']])
            ->all();
    }
}
