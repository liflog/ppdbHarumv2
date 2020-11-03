<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function showStudents()
    {
        $students=Student::latest()->paginate(15);
        // dd($students);
        return view('op.students',compact('students'));
    }
}