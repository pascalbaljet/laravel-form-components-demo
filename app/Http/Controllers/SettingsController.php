<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit(Request $request)
    {
        return view('settings');
    }

    public function update(Request $request)
    {
    }
}
