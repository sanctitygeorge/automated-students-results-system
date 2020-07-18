@extends('layouts.app')
@section('title', '| View Post')
@section('content')



<div class="container">
<div class="row">
	
	<div class="col-md-12">
	<h3 class="text-center text-success">Course</h3>
        <hr/>
	<div class="well">
			<h5><i> Created At: {{ date('M j, Y h:ia', strtotime($course->created_at)) }}</i></h5>
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
                        <th>course Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td scope="row">{{$course->id}}</td>
                        <td>{{$course->studentId}}</td>
                        <td>{{$course->firstName}}</td>
                        <td>{{$course->lastName}}</td>
                        <td>{{$course->department}}</td>
                        <td>{{$course->courseCode}}</td>
                        <td>{{$course->courseTitle}}</td>
                       
                    </tr>
                    
                </tbody>
            </table>
        </div>
	</div>
	</div>

	<div class="container">
    <div class="row">
    <div class="col-md-2">

    {!! Html::linkRoute('course.edit', 'Edit', array($course->id), array('class'=>'btn btn-secondary btn-block')) !!}

    </div>
    
    <!-- <div class="col-md-2">

        {!! Form::open(['route' => ['course.delete', $course->id], 'method' => 'GET']) !!}
    
        {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) }}
    
            {!! Form::close() !!}

    </div> -->
    <div class="col-md-2">

    <a  class="btn btn-primary btn-block" href="{{ route ('course.index') }}">Cancel</a>

    </div>
    </div>
</div>  



@endsection