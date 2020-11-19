<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit(Request $request)
    {
        return view('settings', [
            // this has been moved to the livewire component
            'languages' => [
                'en' => 'English',
                'nl' => 'Dutch',
            ],
        ]);
    }

    public function update(Request $request)
    {
        // this has been moved to the livewire component

        $data = $request->validate([
            'name'                    => ['required'],
            'biography'               => ['nullable', 'string'],
            'subscribe_to_newsletter' => ['nullable', 'boolean'],
            'theme'                   => ['required', 'in:light,dark'],
            'language'                => ['required', 'in:en,nl'],
        ]);

        $data['subscribe_to_newsletter'] = $request->boolean('subscribe_to_newsletter');

        $request->user()->update($data);

        session()->flash('settings', 'Your settings are updated!');

        return redirect()->back();
    }
}
