<?php

namespace App\Http\Controllers\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CssController extends Controller
{
    public function stylesheet()
    {
        return response(View::make('pages.reports.css.stylesheet'))
            ->withHeaders(['Content-Type' => 'text/css']);


    }
}
