<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Services\Users\UserService;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function find(Request $request)
    {
        if(! $queryString = $request->get('q', false)) {
            return response()->json([]);
        }

        return $this->userService->search('name', $queryString);
    }
}
