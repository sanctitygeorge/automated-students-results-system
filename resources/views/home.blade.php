@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br><div class="card">
                <div class="card-header" align="center"><h3>School Management Dashboard</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
 <a href="{{ route('student.create') }}"><button class="btn btn-lg btn-primary">Register Student</button></a>
        
<a href="{{ route('student.index') }}"><button class="btn btn-lg btn-success"> Manage Students</button></a>

<a href="{{ route('course.create') }}"><button class="btn btn-lg btn-primary">Register Course</button></a>

<a href="{{ route('course.index') }}"> <button class="btn btn-lg btn-success">Manage Courses</button></a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
