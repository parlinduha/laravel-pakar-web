<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return view('admin.home.index');
    }
    function save(Request $request)
    {
        $student_name = $request->name;
        $student_id = Helper::IDGenerator(new Student,'student_id',3,'GJL');

        $q = new Student;
        $q->student_id = $student_id;
        $q->name = $student_name;
        $q->save();
    }
}
