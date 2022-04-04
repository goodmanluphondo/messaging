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
            "reloadMessages",
            "echo-private:thread.{$this->thread},Threads\\NewMessageEvent" => "updateThreadFromBroadcast",
        ];
    }

    public function reloadMessages()
    {
        $this->messages = Thread::find($this->thread)->messages()->get();
    }

    public function updateThread($id){
        $this->messages->prepend(Message::find($id));
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
