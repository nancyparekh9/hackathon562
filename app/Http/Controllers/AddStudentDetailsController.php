<?php

namespace App\Http\Controllers;
use App\students;
use Illuminate\Http\Request;
use DB;

class AddStudentDetailsController extends Controller
{
    public function showStudents(Request $request)
    {       
        $students = students::all();
        return view('scl_data.addStudentDetails')->with('students', $students);
    }

    public function addStudents($p)
    {
        $p;
        $r = DB::select( DB::raw("SELECT * FROM students WHERE Gr_No = '$p'") );   
        // $stud = students::where('Gr_No',$students->Gr_No);
         return view('scl_data.addDetail')->with('students', $r);
    }
    public function submit(Request $request) {
        
        if($request->Parent=='Other')
        {
            $r = DB::insert('INSERT INTO students (Index_No,Gr_No,Aadhar_No,Student_Name,Father_Name,Mother_Name,Contact_No,Email_Id,DOB,Gender,Standard,Earning_Member,Income,PAN_No)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)',['GJ00JKOG',$request->Gr_No,$request->Aadhar_No,$request->Student_Name,
            $request->Father_Name,$request->Mother_Name,$request->Contact_No,$request->Email_Id,
            $request->DOB,$request->Gender,$request->Standard,$request->Guardian,$request->Income,$request->PAN_No]);
        }
        return redirect()->back()->withSuccess('Student added successfully!');
    }
}