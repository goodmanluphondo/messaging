<?php

namespace App\Providers;

use App\Models\Threads\Thread;
use App\Observers\Threads\ThreadObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Thread::observe(ThreadObserver::class);
    }
}
