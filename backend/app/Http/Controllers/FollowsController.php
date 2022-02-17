<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        $user_id = Auth::user()->getAttribute('id');
        return $user->following()->toggle($user_id);
    }
}
