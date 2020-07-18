@extends('layouts.app')
@section('title', '| View Post')
@section('content')



<div class="container">
<div class="row">
	
	<div class="col-md-12">
	<h3 class="text-center text-success">Student List</h3>
        <hr/>
	<div class="well">
			<h5><i> Created At: {{ date('M j, Y h:ia', strtotime($student->created_at)) }}</i></h5>
	</div>

</div>

</div>
</div>



<div class="container">
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
                        <th>Country</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td scope="row">{{$student->id}}</td>
                        <td>{{$student->studentId}}</td>
                        <td>{{$student->firstName}}</td>
                        <td>{{$student->lastName}}</td>
                        <td>{{$student->department}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->DOB}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->country}}</td>
                        <!-- <td>
                            <a href="#" class="btn btn-info">
                                <span class="glyphicon glyphicon-info-sign"></span>
                            </a>
                            <a href="#" class="btn btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure to delete This');">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                            
                        </td> -->
                    </tr>
                    
                </tbody>
            </table>
        </div>
	</div>
	</div>

	<div class="container">
    <div class="row">
    <div class="col-md-2">

    {!! Html::linkRoute('student.edit', 'Edit', array($student->id), array('class'=>'btn btn-secondary btn-block')) !!}

    </div>
    
    <!-- <div class="col-md-2">

        {!! Form::open(['route' => ['student.delete', $student->id], 'method' => 'GET']) !!}
    
        {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) }}
    
            {!! Form::close() !!}

    </div> -->
    <div class="col-md-2">

    <a  class="btn btn-primary btn-block" href="{{ route ('student.index') }}">Cancel</a>

    </div>
    </div>
</div>  



@endsection