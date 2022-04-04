<?php

namespace App\Http\Livewire\Threads;

use App\Events\Threads\NewMessageEvent;
use App\Events\Threads\ThreadUpdatedEvent;
use Livewire\Component;

class Compose extends Component
{
    public $body = '';
    public $thread;

    protected $rules = [
        'body' => ['required'],
    ];

    public function send()
    {
        $this->validate();

        $message = $this->thread->messages()->create([
            'body' => $this->body,
            'user_id' => auth()->id(),
        ]);

        $this->thread->update([
            'last_message_at' => now(),
        ]);

        foreach($this->thread->others as $user) {
            $user->threads()->updateExistingPivot($this->thread, [
                'seen_at' => null,
            ]);
        }

        broadcast(new NewMessageEvent($message))->toOthers();
        broadcast(new ThreadUpdatedEvent($this->thread))->toOthers();

        $this->emit('updateThread', $message->id);

        $this->body = '';
    }

    public function mount($thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        return view('livewire.threads.compose');
    }
}
