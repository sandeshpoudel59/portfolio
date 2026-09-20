<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PersonDataService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(PersonDataService $personDataService): View
    {
        return view('admin.dashboard.index', [
            'personData' => $personDataService->getData(),
        ]);
    }
}