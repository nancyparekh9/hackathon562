<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SclloginController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        return 'Success';
    }
}
