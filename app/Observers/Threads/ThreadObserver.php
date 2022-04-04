<?php

namespace App\Observers\Threads;

use App\Events\Threads\ThreadUpdatedEvent;
use App\Models\Threads\Thread;

class ThreadObserver
{
    public function updated(Thread $thread)
    {
        broadcast(new ThreadUpdatedEvent($thread))->toOthers();
    }
}
