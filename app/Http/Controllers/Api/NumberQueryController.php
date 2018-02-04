<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Propaganistas\LaravelPhone\PhoneNumber;

class NumberQueryController extends Controller
{

    public function getUserName(Request $request)
    {
        $number = $request->get('number');
        $norm_number = PhoneNumber::make($number, env('PHONE_DEFAULT_COUNTRY', 'DE'))
            ->formatE164();

        $numberEntry = \App\PhoneNumber::where('normalized_number', $norm_number)->first();

        if($numberEntry == null)
        {
            return response()->json(['found' => false]);
        }
        else
        {
            $data = [
                'found' => true,
                'name' => $numberEntry->user()->first()->get_name()
            ];

            return response()->json($data);
        }
    }
}
