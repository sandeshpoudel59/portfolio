<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateThemeRequest;
use App\Services\PersonDataService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ThemeController extends Controller
{
    public function index(PersonDataService $personDataService): View
    {
        return view('admin.theme.index', [
            'theme' => $personDataService->getData()['theme'] ?? [],
        ]);
    }

    public function colors(PersonDataService $personDataService): View
    {
        return view('admin.theme.colors', [
            'theme' => $personDataService->getData()['theme'] ?? [],
        ]);
    }

    public function updateColors(UpdateThemeRequest $request, PersonDataService $personDataService): RedirectResponse
    {
        $theme = $personDataService->getData()['theme'] ?? [];

        $theme['primary_color'] = $request->input('primary_color', $theme['primary_color'] ?? '#111827');
        $theme['secondary_color'] = $request->input('secondary_color', $theme['secondary_color'] ?? '#6b7280');
        $theme['accent_color'] = $request->input('accent_color', $theme['accent_color'] ?? '#f59e0b');
        $theme['highlight_color'] = $request->input('highlight_color', $theme['highlight_color'] ?? '#6366f1');

        $personDataService->update(['theme' => $theme]);

        return redirect()->route('admin.theme.colors')->with('success', 'Theme colors updated successfully.');
    }

    public function typography(PersonDataService $personDataService): View
    {
        return view('admin.theme.typography', [
            'theme' => $personDataService->getData()['theme'] ?? [],
        ]);
    }

    public function updateTypography(UpdateThemeRequest $request, PersonDataService $personDataService): RedirectResponse
    {
        $theme = $personDataService->getData()['theme'] ?? [];

        $theme['font_family'] = $request->input('font_family', $theme['font_family'] ?? 'Instrument Sans');
        $theme['heading_scale'] = $request->input('heading_scale', $theme['heading_scale'] ?? 'default');
        $theme['body_size'] = $request->input('body_size', $theme['body_size'] ?? '16');

        $personDataService->update(['theme' => $theme]);

        return redirect()->route('admin.theme.typography')->with('success', 'Typography settings updated successfully.');
    }

    public function layout(PersonDataService $personDataService): View
    {
        return view('admin.theme.layout', [
            'theme' => $personDataService->getData()['theme'] ?? [],
        ]);
    }

    public function updateLayout(UpdateThemeRequest $request, PersonDataService $personDataService): RedirectResponse
    {
        $theme = $personDataService->getData()['theme'] ?? [];

        $theme['background_color'] = $request->input('background_color', $theme['background_color'] ?? '#ffffff');
        $theme['text_color'] = $request->input('text_color', $theme['text_color'] ?? '#111827');
        $theme['container_width'] = $request->input('container_width', $theme['container_width'] ?? '1200');
        $theme['section_spacing'] = $request->input('section_spacing', $theme['section_spacing'] ?? '64');

        $personDataService->update(['theme' => $theme]);

        return redirect()->route('admin.theme.layout')->with('success', 'Layout settings updated successfully.');
    }

    public function customCss(PersonDataService $personDataService): View
    {
        return view('admin.theme.custom-css', [
            'theme' => $personDataService->getData()['theme'] ?? [],
        ]);
    }

    public function updateCustomCss(UpdateThemeRequest $request, PersonDataService $personDataService): RedirectResponse
    {
        $theme = $personDataService->getData()['theme'] ?? [];

        $theme['custom_css'] = $request->input('custom_css', $theme['custom_css'] ?? '');

        $personDataService->update(['theme' => $theme]);

        return redirect()->route('admin.theme.custom-css')->with('success', 'Custom CSS updated successfully.');
    }
}
