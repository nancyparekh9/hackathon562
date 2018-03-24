<?php

namespace App\Http\Controllers;

use App\student_representatives;
use Illuminate\Http\Request;
use DB;

class SclRepRegisterController extends Controller
{
    
    public function submit(Request $request) {
        return 1;
        // $s=DB::raw("SELECT Index_No FROM schools WHERE Index_No = $request->Index_No and Password=$request->password");
        // if(count($s)>0){
        
        // $r = DB::insert('INSERT INTO student_representatives (Index_No,R_Name,R_Email,password,Phone_No)
        // VALUES (?,?,?,?,?)',['GJ00JKOG',$request->R_Name,$request->R_Email,$request->R_Password,
        // $request->Phone_No]);
        
        // return '/scl/login';
        // }
        // else{
        //     return redirect()->back()->withSuccess('Incorrect Index No or password');
        // }
    }
}
