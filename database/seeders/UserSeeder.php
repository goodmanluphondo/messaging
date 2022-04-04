<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->defaultUsers() as $user) {
            User::factory()->create($user);
        }
    }

    private function defaultUsers()
    {
        return [
            [
                'name' => 'Goodman',
                'email' => 'hello@goodmanluphondo.com',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
            ],
        ];
    }
}
