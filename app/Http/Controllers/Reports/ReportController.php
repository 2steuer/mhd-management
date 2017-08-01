<?php

namespace App\Http\Controllers\Reports;

use App\User;
use App\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function overview(Request $request)
    {
        $users = User::orderBy('last_name')->get();
        $vehicles = Vehicle::orderBy('rank')->get();

        return view('pages.reports.table', ['users' => $users, 'vehicles' => $vehicles]);
    }
}
