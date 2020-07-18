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
            <h3 class="text-center text-success">Update Student Information</h3>
            <hr>

        {!! Form::model($student, ['route' => ['student.update', $student->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    	<div class="jumbotron">
        <div class="col-md-8">
           

        <div class="row">
        <div class="col-sm-6">
        
        <h4>Last Created:</h4> <p class="lead"> {{ date('M j, Y h:ia', strtotime($student->created_at)) }}</p>
             
            </div>
            
            <div class="col-sm-6">
           <h4> Last Updated:</h4> <p class="lead"> {{ date('M j, Y h:ia', strtotime($student->updated_at)) }}</p>
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
                                        
            {{ Form::label('gender', 'Gender:') }}
             <div class="col-md-8">
            <select name="gender" class="form-control">
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
            </select>
            </div>
                               
            <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
            {{ Form::label('DOB', 'Date of Birth:') }}
            {{ Form::text('DOB', null, array('class'=>'form-control')) }}

            @if ($errors->has('DOB'))
                <span class="help-block">
                    <strong>{{ $errors->first('DOB') }}</strong>
                </span>
            @endif
        </div>
                                
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    		{{ Form::label('phone', 'Phone Number:') }}
    		{{ Form::text('phone', null, array('class'=>'form-control')) }}

    		@if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
     	</div>
                                
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, array('class'=>'form-control')) }}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
                                
         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    		{{ Form::label('address', 'Resident Address:') }}
    		{{ Form::text('address', null, array('class'=>'form-control')) }}

    		@if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
     	</div>
                                
         <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
    		{{ Form::label('country', 'Country:') }}
    		{{ Form::text('country', null, array('class'=>'form-control')) }}

    		@if ($errors->has('country'))
                <span class="help-block">
                    <strong>{{ $errors->first('country') }}</strong>
                </span>
            @endif
     	</div>
                                
        </div>
        <br>
        <div class="row">
        <div class="col-sm-3">
        
            {!! Html::linkRoute('student.index', 'Cancel', array($student->id), array('class'=>'btn btn-primary btn-block')) !!}
        
            </div>
            
            <div class="col-sm-3">
                {{ Form::submit('Update Changes', ['class'=>'btn btn-success btn-block']) }}
        
            </div>
            
        </div> 
        </div> 
        
        
        {!! Form::close() !!}
    </div>


    @endsection