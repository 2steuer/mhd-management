<?php

namespace App\Http\Controllers\Tactics\Reports;

use App\User;
use App\Model\Tactics\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function overview(Request $request)
    {
        $users = User::orderBy('last_name')->get();
        $vehicles = Vehicle::orderBy('rank')->get();

        return view('pages.tactics.reports.web.users_overview', ['users' => $users, 'vehicles' => $vehicles]);
    }

    public function full_overview()
    {
        $users = User::orderBy('last_name')->get();
        $vehicles = Vehicle::orderBy('rank')->get();

        return view('pages.tactics.reports.web.users_onlytable', ['users' => $users, 'vehicles' => $vehicles]);
    }

    public function cards(Request $request)
    {
        $users = User::whereIn('id', $request->get('users'))->orderBy('last_name')->get();
        $vehicles = Vehicle::orderBy('rank')->get();

        return view('pages.tactics.reports.cards.cards', ['users' => $users, 'vehicles' => $vehicles]);
    }

    public function allcards(Request $request)
    {
        $users = User::orderBy('last_name')->get();
        $vehicles = Vehicle::orderBy('rank')->get();

        return view('pages.tactics.reports.cards.cards', ['users' => $users, 'vehicles' => $vehicles]);
    }
}
