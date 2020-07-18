<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;

class RegController extends Controller
{
    public function createStudent()
    {
        return view('registerStudent');
    }

    public function createCourse()
    {
        return view('registerCourse');
    }



    public function store(Request $request)
    {
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

                return redirect()->route('studentRegister')
                ->with('success_message', 'You have been registered successfully!!');   
        
                
    }


    public function save(Request $request)
    {
        //

        $this->validate($request, array(
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'studentId' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'courseCode' => 'required|string|',
                'courseTitle' => 'required|string|',
                 ));
        
                $course = new Course;
                $course->firstName = $request->firstName;
                $course->lastName  = $request->lastName;
                $course->studentId    = $request->studentId;
                $course->department   = $request->department;
                $course->courseCode    = $request->courseCode;
                $course->courseTitle    = $request->courseTitle;
                
                $course->save();

                return redirect()->route('courseRegister')
                ->with('success_message', 'Your course has been registered successfully!!');     
    }


}
