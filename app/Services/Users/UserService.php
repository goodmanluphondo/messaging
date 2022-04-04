<?php

namespace App\Services\Users;

use App\Models\User;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function find($id)
    {
        return $this->user->where('id', $id)->first();
    }

    public function search($field, $queryString)
    {
        return $this->user->search($field, $queryString)->get();
    }
}
