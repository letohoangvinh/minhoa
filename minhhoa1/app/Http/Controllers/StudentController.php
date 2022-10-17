<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class StudentController extends Controller
{
    //

    public function index(){   


        $data = Student::all();

        return view('index', ['data' => $data]);
    }

    public function create(){

        $student = new Student();

        $student->fullname = "HoangVinh";
        $student->birthday = "2002/9/12";
        $student->address = "Hanoi";
        $student->save();


        return view('add');
    }

    public function get_student_by_id($id){

        $student = Student::find($id);
        return view('student_edit', ['student' => $student]);
        
    }

    public function edit( Request $request ,Student $id){


        $id->update([
            'fullname' => $request->fullname,
            'address' => $request->address ,
        ]);

        $student = Student::all();
        return redirect('/student');
    }
}
