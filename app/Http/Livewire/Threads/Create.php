<?php

namespace App\Http\Livewire\Threads;

use App\Models\Threads\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $body = '';
    public $users = [];

    protected $rules = [
        'body' => ['required', 'min:3'],
        'users' => ['required'],
    ];

    public function attachUser($user)
    {
        $this->users[] = $user;
    }

    public function start()
    {
        $this->validate();

        $users = collect($this->users)
            ->merge([Auth::user()])
            ->pluck('id')
            ->toArray();

        $thread = Thread::create([
            'uuid' => Str::uuid(),
        ]);

        $thread->messages()->create([
            'body' => $this->body,
            'user_id' => Auth::id(),
        ]);

        $thread->users()->sync($users);

        return redirect()->route('threads.show', $thread);
    }

    public function render()
    {
        return view('livewire.threads.create');
    }
}
