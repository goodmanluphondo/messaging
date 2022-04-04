<?php

namespace App\Http\Livewire\Threads;

use Livewire\Component;

class Participants extends Component
{
    public $users;

    public function mount($users)
    {
        $this->users = $users;
    }

    public function render()
    {
        return view('livewire.threads.participants');
    }
}
