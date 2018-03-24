<?php

namespace App\Http\Controllers\Auth;
use Auth;
use route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GovtLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:govtAuthorities');
    }

    public function showLoginForm()
    {
        return view('auth.govt-login');
    }
    public function login(Request $request)
    {
        //$this->validateLogin($request);
        
        if(Auth::guard('govtAuthorities')->attempt(['G_Email' => $request->G_Email,'password' => $request->password],$request->remember));
        {
            return redirect()->intended();
        }

        return redirect()->back()->withInput($request->only('G_Email','remember'));
        // if ($this->attemptLogin($request)) {
        //     return $this->sendLoginResponse($request);
        // }
    }
}
