<?php

namespace App\Http\Livewire\Threads\Messages;

use Livewire\Component;

class Message extends Component
{
    public $message;

    public function delete()
    {
        $this->message->delete();

        $this->emit('reloadMessages');
    }

    public function mount($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.threads.messages.message');
    }
}
