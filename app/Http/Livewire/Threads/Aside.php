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
            'echo-private:user.'.Auth::id().',Threads\\NewThreadEvent' => 'prependThread',
            'echo-private:user.'.Auth::id().',Threads\\ThreadUpdatedEvent' => 'updateThreads',
        ];
    }

    public function prependThread($payload)
    {
        $this->threads->prepend(Thread::find($payload['thread']['id']));
    }

    public function updateThreads($payload)
    {
        $thread_id = $payload['thread']['id'];

        $this->threads = $this->threads->map(function ($thread) use ($thread_id) {
            if ($thread->id == $thread_id) {
                $thread = Auth::user()->threads()->find($thread_id);
            }

            return $thread;
        });
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
