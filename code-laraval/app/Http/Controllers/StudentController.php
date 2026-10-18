<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
{
    // $students = DB::table('students')->get();
//  $students = DB::table('students')->select('first_name', 'last_name')->where('age', '>', 25)->get();
    // $students = DB::table('students')->select('first_name','last_name')->where('department', '=', 'science')->get();
    // $students = DB::table('students')->select('first_name' , 'last_name')->where('age' , '<' , 20)->get();
    $students = DB::table('students')->select('first_name', 'last_name')->where('first_name', 'like', 'A%')->where('last_name', 'like', '%S')->get();
       
    return $students;
}
}

