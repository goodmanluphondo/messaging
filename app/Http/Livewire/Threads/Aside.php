<?php

namespace App\Http\Livewire\Threads;

use Livewire\Component;

class Aside extends Component
{
    public $threads;

    public function mount($threads)
    {
        $this->threads = $threads;
    }

    public function render()
    {
        return view('livewire.threads.aside');
    }
}
