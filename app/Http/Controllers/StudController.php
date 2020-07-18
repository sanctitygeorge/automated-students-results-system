<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudController extends Controller
{
    //

     public function index()
    {
      $data ['students'] = Student::orderBy('id','asc')->paginate(10);
        return view('stud.index',$data);
    }

    public function create()
    {
        //
        return view('stud.registerStudent');
    }


     public function store(Request $request)
    {
        //

        $this->validate($request, array(
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'studentId' => 'required|string|max:255|unique:students',
                'department' => 'required|string|max:255',
                'gender' => 'required|string|',
                'DOB' => 'required|string|',
                'phone' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:students',
                'address' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                 ));
        
                $student = new Student;
                $student->firstName = $request->firstName;
                $student->lastName  = $request->lastName;
                $student->studentId    = $request->studentId;
                $student->department   = $request->department;
                $student->gender    = $request->gender;
                $student->DOB    = $request->DOB;
                $student->phone   = $request->phone;
                $student->email     = $request->email;
                $student->address     = $request->address;
                $student->country     = $request->country;
                
                $student->save();

                return redirect()->route('student.index')
                ->with('success_message', 'Student registered successfully!!');     
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('stud.show')->withStudent($student);
    }

    public function edit($id)
    {
         $student = Student::find($id);
        return view('stud.edit')->withStudent($student);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'studentId' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'gender' => 'required|string|',
                'DOB' => 'required|string|',
                'phone' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'address' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                 ));

         $student = Student::find($id);
        $student->firstName = $request->input('firstName');
        $student->lastName  = $request->input('lastName');
        $student->studentId    = $request->input('studentId');
        $student->department = $request->input('department');
        $student->gender  = $request->input('gender');
        $student->DOB = $request->input('DOB');
        $student->phone   = $request->input('phone');
        $student->email     = $request->input('email');
        $student->address    = $request->input('address');
        $student->country     = $request->input('country');
       
        $student->save();

        
        return redirect()->route('student.index', $student->id)
        ->with('success_message', 'Student Record Updated Successfully!!');  
    }


    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();
        return redirect()->route('student.index')->with('success_message', 'Student Deleted');
    }

}
