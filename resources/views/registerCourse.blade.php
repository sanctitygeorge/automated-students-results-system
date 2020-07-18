@extends('layouts.app')

@section('content')

<div class="container">

 @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5 align="center">Course Registration</h5></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registerCourse.save') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="studentId" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                            <div class="col-md-6">
                                <input id="studentId" type="text" class="form-control{{ $errors->has('studentId') ? ' is-invalid' : '' }}" name="studentId" value="{{ old('studentId') }}" required autofocus>

                                @if ($errors->has('studentId'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('studentId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">

                            <select name="department" class="form-control">
                                    <!-- <option value="" selected>-Select Option-</option> -->
                                    <option value='Accounting'>Accounting</option>
                                    <option value='Banking and Finance'>Banking and Finance</option>
                                    <option value='Computer Science'>Computer Science</option>
                                    <option value='Economics'>Economics</option>
                                    <option value='Electrical Enginering'>Electrical Enginering</option>
                                    <option value='Geology'>Geology</option>
                            </select>

                            </div>
                        </div>
                       
            

                         <div class="form-group row">
                            <label for="courseCode" class="col-md-4 col-form-label text-md-right">{{ __('CourseCode') }}</label>

                            <div class="col-md-6">
                                <input id="courseCode" type="text" class="form-control{{ $errors->has('courseCode') ? ' is-invalid' : '' }}" name="courseCode" value="{{ old('courseCode') }}" required autofocus>

                                @if ($errors->has('courseCode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="courseTitle" class="col-md-4 col-form-label text-md-right">{{ __('Course Title') }}</label>

                            <div class="col-md-6">
                                <input id="courseTitle" type="text" class="form-control{{ $errors->has('courseTitle') ? ' is-invalid' : '' }}" name="courseTitle" value="{{ old('courseTitle') }}" required autofocus>

                                @if ($errors->has('courseTitle'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('courseTitle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
