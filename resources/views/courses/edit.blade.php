    @extends('layouts.app')
    @section('content')


    <div class="container">

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

<div class="container">
            <div class="col-md-2">
    <a href="{{ route('home') }}" class="btn btn-info"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        </div>
    </div>

    	<div class="container">
            <h3 class="text-center text-success">Update Course</h3>
            <hr>

        {!! Form::model($course, ['route' => ['course.update', $course->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    	<div class="jumbotron">
        <div class="col-md-8">
           

        <div class="row">
        <div class="col-sm-6">
        
        <h4>Last Created:</h4> <p class="lead"> {{ date('M j, Y h:ia', strtotime($course->created_at)) }}</p>
             
            </div>
            
            <div class="col-sm-6">
           <h4> Last Updated:</h4> <p class="lead"> {{ date('M j, Y h:ia', strtotime($course->updated_at)) }}</p>
            </div>   
        </div> 
        <br>
        {{ Form::open() }}

        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
            {{ Form::label('firstName', 'First Name:') }}
            {{ Form::text('firstName', null, array('class'=>'form-control')) }}

            @if ($errors->has('firstName'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstName') }}</strong>
                </span>
            @endif
         </div>
                                
        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
        	 {!! Form::open() !!}
    		{{ Form::label('lastName', 'Last Name:') }}
    		{{ Form::text('lastName', null, array('class'=>'form-control')) }}

    			@if ($errors->has('lastName'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
     	 </div>
    			
        <div class="form-group{{ $errors->has('studentId') ? ' has-error' : '' }}">
    		{{ Form::label('studentId', 'Student ID') }}
    		{{ Form::text('studentId', null, array('class'=>'form-control')) }}

    		@if ($errors->has('studentId'))
                <span class="help-block">
                    <strong>{{ $errors->first('studentId') }}</strong>
                </span>
            @endif
     	</div>
             
             {{ Form::label('department', 'Department:') }}                   
            <div class="col-md-8">
            <select name="department" class="form-control">
                    <option value='Accounting'>Accounting</option>
                    <option value='Banking and Finance'>Banking and Finance</option>
                    <option value='Computer Science'>Computer Science</option>
                    <option value='Economics'>Economics</option>
                    <option value='Electrical Enginering'>Electrical Enginering</option>
                    <option value='Geology'>Geology</option>
            </select>
            </div>
                                        
                               
            <div class="form-group{{ $errors->has('courseCode') ? ' has-error' : '' }}">
            {{ Form::label('courseCode', 'Course Code') }}
            {{ Form::text('courseCode', null, array('class'=>'form-control')) }}

            @if ($errors->has('courseCode'))
                <span class="help-block">
                    <strong>{{ $errors->first('courseCode') }}</strong>
                </span>
            @endif
        </div>
                                
            <div class="form-group{{ $errors->has('courseTitle') ? ' has-error' : '' }}">
    		{{ Form::label('courseTitle', 'Course Title') }}
    		{{ Form::text('courseTitle', null, array('class'=>'form-control')) }}

    		@if ($errors->has('courseTitle'))
                <span class="help-block">
                    <strong>{{ $errors->first('courseTitle') }}</strong>
                </span>
            @endif
     	</div>
                                
         
        <br>
        <div class="row">
        <div class="col-sm-3">
        
            {!! Html::linkRoute('course.index', 'Cancel', array($course->id), array('class'=>'btn btn-primary btn-block')) !!}
        
            </div>
            
            <div class="col-sm-3">
                {{ Form::submit('Update Changes', ['class'=>'btn btn-success btn-block']) }}
        
            </div>
            
        </div> 
        </div> 
        
        
        {!! Form::close() !!}
    </div>


    @endsection