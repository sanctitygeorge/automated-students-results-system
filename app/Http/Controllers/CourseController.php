<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;

class CourseController extends Controller
{
    //
    public function index()
    {
      $data ['courses'] = Course::orderBy('id','asc')->paginate(10);
        return view('courses.index',$data);
    }


    public function create()
    {
        //
        return view('courses.registerCourse');

    }

    public function store(Request $request)
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

                return redirect()->route('course.index')
                ->with('success_message', 'Course Registered Successfully!!');     
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->withCourse($course);
    }

    public function edit($id)
    {
         $course = Course::find($id);
        return view('courses.edit')->withCourse($course);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, array(
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'studentId' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'courseCode' => 'required|string|',
                'courseTitle' => 'required|string|',
                 ));

         $course = Course::find($id);
        $course->firstName = $request->input('firstName');
        $course->lastName  = $request->input('lastName');
        $course->studentId    = $request->input('studentId');
        $course->department = $request->input('department');
        $course->courseCode  = $request->input('courseCode');
        $course->courseTitle = $request->input('courseTitle');
        
        $course->save();

        
        return redirect()->route('course.index', $course->id)
        ->with('success_message', 'Course Updated Successfully!!');  
    }


    public function destroy($id)
    {
        $course = Course::find($id);

        $course->delete();
        return redirect()->route('course.index')->with('success_message', 'Course Deleted');
    }


}
