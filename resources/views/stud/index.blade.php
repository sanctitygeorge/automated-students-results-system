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
    <a href="{{ route('student.create') }}" class="btn btn-primary">Register Student &nbsp;</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-11">
        <h3 class="text-center text-success">Student List</h3>
        <hr/>

        @if(count($students) > 0)
        <div class="well">
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Phone No</th>
                        <th>Email</th>
                         <!-- <th>Address</th> -->
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->studentId}}</td>
                        <td>{{$student->firstName}}</td>
                        <td>{{$student->lastName}}</td>
                        <td>{{$student->department}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->DOB}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <!-- <td>{{$student->address}}</td> -->
                        <td>{{$student->country}}</td>
                        <td>
                            <!-- <a href="#" class="btn btn-info">
                                <span class="glyphicon glyphicon-info-sign"></span>
                            </a> -->
                            <a href="{{ route('student.show', $student->id)}}" class=" btn btn-info btn-sm"> View </a>
                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm" >Edit
                            <!-- <a href="#" class="btn btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a> -->
                            <a href="{{ route('student.delete', $student->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete This');"> Delete
                                <!-- <span class="glyphicon glyphicon-trash"></span> -->
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <h5> {!! $students->links() !!}</h5>

            @else
         <p>No Record Found</p>
            @endif
        </div>
    </div>
</div>
</div>
    
    

@endsection
