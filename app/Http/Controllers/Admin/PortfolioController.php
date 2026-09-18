<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePortfolioRequest;
use App\Services\PersonDataService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function edit(PersonDataService $personDataService): View
    {
        return view('admin.portfolio.edit', [
            'personData' => $personDataService->getData(),
        ]);
    }

    public function update(
        UpdatePortfolioRequest $request,
        PersonDataService $personDataService
    ): RedirectResponse {
        $personDataService->update($request->validated());

        return back()->with('success', 'Portfolio information updated successfully.');
    }
}
