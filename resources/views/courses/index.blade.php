@extends('layouts.app')

@section('content')

<div class ="container">

    @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="container" style="background-color: #fff;"><br>
    <div class="row" style="background-color: #fff">
    <div class="col-md-2">
    <a href="{{ route('home') }}" class="btn btn-info"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        </div>
    
    <div class="col-md-2">
    <a href="{{ route('course.create') }}" class="btn btn-primary">Register Course &nbsp;</a>
        </div>
    </div>
</div>
     
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-11">
        <h3 class="text-center text-success">Registered Course</h3>
        <hr/>

        @if(count($courses) > 0)
        <div class="well">
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->studentId}}</td>
                        <td>{{$course->firstName}}</td>
                        <td>{{$course->lastName}}</td>
                        <td>{{$course->department}}</td>
                        <td>{{$course->courseCode}}</td>
                        <td>{{$course->courseTitle}}</td>
                        <td>
                            <!-- <a href="#" class="btn btn-info">
                                <span class="glyphicon glyphicon-info-sign"></span>
                            </a> -->
                            <a href="{{ route('course.show', $course->id)}}" class=" btn btn-info btn-sm"> View </a>
                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-success btn-sm" >Edit
                            <!-- <a href="#" class="btn btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a> -->
                            <a href="{{ route('course.delete', $course->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete This');"> Delete
                                <!-- <span class="glyphicon glyphicon-trash"></span> -->
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <h5> {!! $courses->links() !!}</h5>

            @else
         <p>No Record Found</p>
            @endif
        </div>
    </div>
    
    

@endsection
