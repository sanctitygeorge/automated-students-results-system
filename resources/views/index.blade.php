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

       
<br>
<div class="container">
 <div class="card"  style="color:grey;">
     <div class="card-header">
      <h1 align="center">Welcome to School Management Application</h1>
    </div>
    <div class="card-body">
   
      <h4 align="center" style="color:#fff;">
        <a href="{{ route('studentRegister') }}">
        <button class="btn btn-lg btn-primary">Students Registration</button>
      </a>
      </h4>
      <h4 align="center" style="color:#fff;"> 
        <a href="{{ route('courseRegister') }}">
         <button class="btn btn-lg btn-info">Course Registration</button>
       </a>
      </h4>
    </div>   
      
		</div>

	</div>

@endsection
