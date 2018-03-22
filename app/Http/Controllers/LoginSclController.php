<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;

class LoginSclController extends Controller
{
    public function submit(Request $request) {
        
        return User::all();
        return view('user.index', ['users' => $users]);
        return 'Success';
    }
}
