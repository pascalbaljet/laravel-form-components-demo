<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Settings extends Component
{
    public $user;

    protected $rules = [
        'user.name'                    => ['required'],
        'user.biography'               => ['nullable', 'string'],
        'user.subscribe_to_newsletter' => ['nullable', 'boolean'],
        'user.theme'                   => ['required', 'in:light,dark'],
        'user.language'                => ['required', 'in:en,nl'],
    ];

    public function mount()
    {
        $this->user = request()->user();
    }

    public function submit()
    {
        $this->validate();

        $this->user->save();

        session()->flash('settings', 'Your settings are updated!');
    }

    public function render()
    {
        return view('livewire.settings', [
            'languages' => [
                'en' => 'English',
                'nl' => 'Dutch',
            ],
        ]);
    }
}
