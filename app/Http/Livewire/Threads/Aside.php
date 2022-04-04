<?php

namespace App\Http\Livewire\Threads;

use App\Models\Threads\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Aside extends Component
{
    public $current;
    public $threads;

    public function getListeners()
    {
        return [
            'echo-private:user.'.Auth::id().',Threads\\NewThreadEvent' => 'updateThreads',
        ];
    }

    public function updateThreads($payload)
    {
        $this->threads->prepend(Thread::find($payload['thread']['id']));
    }

    public function mount($threads, $current = null)
    {
        $this->threads = $threads;
        $this->current = $current;
    }

    public function render()
    {
        return view('livewire.threads.aside');
    }
}
