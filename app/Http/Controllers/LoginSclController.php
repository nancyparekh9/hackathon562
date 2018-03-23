<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginSclController extends Controller
{
    public function submit(Request $request) {
        
        $this->validate($request,[
            'emailid' => 'required',
            'password' => 'required'
        ]);
        
        if(count($request->emailid)>0);
            {
              $checklogin = DB::select( DB::raw("SELECT * FROM `school_representatives` WHERE R_Email = '$request->emailid' AND R_Password='$request->password'") );
            }
        if(count($checklogin)>0)
        {
            return redirect('/scl/index');
        }
        else
        {
            return redirect()->back()->withSuccess('Incorrect emailid or password');
        }
        
    }
}
