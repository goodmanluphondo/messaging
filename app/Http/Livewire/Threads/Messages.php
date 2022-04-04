<?php

namespace App\Http\Livewire\Threads;

use App\Models\Messages\Message;
use App\Models\Threads\Thread;
use Livewire\Component;

class Messages extends Component
{
    public $thread;
    public $messages;

    public function getListeners()
    {
        return [
            "updateThread",
            "echo-private:thread.{$this->thread},Threads\\NewMessageEvent" => "updateThreadFromBroadcast",
        ];
    }

    public function updateThread($id){
        $this->messages->prepend(Message::find($id));
        // $this->messages = Thread::where('id', $this->thread)->first()->messages()->latest()->get();
    }

    public function updateThreadFromBroadcast($payload){
        $this->updateThread($payload['message']['id']);
    }

    public function mount($thread, $messages)
    {
        $this->thread = $thread->id;
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.threads.messages');
    }
}
