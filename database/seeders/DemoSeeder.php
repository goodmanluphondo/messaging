<?php

namespace Database\Seeders;

use App\Models\Threads\Thread;
use App\Models\User;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all()->pluck('id')->toArray();


        $threads = Thread::factory(5)->create();
        $threads->first()->users()->attach($users);
    }
}
