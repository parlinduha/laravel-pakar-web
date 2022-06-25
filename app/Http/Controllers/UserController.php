<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.users.index', compact('users') );
    }
}
