<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registerStudent', 'RegController@createStudent')->name('studentRegister');
Route::post('/registerStudent', 'RegController@store')->name('registerStudent.store');

Route::get('/registerCourse', 'RegController@createCourse')->name('courseRegister');
Route::post('/registerCourse', 'RegController@save')->name('registerCourse.save');



//Student CRUD

        Route::get('/student/create', 'StudController@create')->name('student.create');
        Route::post('/student/create', 'StudController@store')->name('student.store');

         Route::get('/student/index', 'StudController@index')->name('student.index')->middleware('auth');

         Route::get('/student/show/{id}', 'StudController@show')->name('student.show')->middleware('auth');
         Route::get('/student/edit/{id}', 'StudController@edit')->name('student.edit')->middleware('auth');
         Route::post('/student/update/{id}', 'StudController@update')->name('student.update')->middleware('auth');
         Route::get('/student/delete/{id}', 'StudController@destroy')->name('student.delete')->middleware('auth');
        
     //Courses CRUD

       Route::get('/course/create', 'CourseController@create')->name('course.create');
       Route::post('/course/create', 'CourseController@store')->name('course.store'); 

       Route::get('/course/index', 'CourseController@index')->name('course.index')->middleware('auth');

         Route::get('/course/show/{id}', 'CourseController@show')->name('course.show')->middleware('auth');
         Route::get('/course/edit/{id}', 'CourseController@edit')->name('course.edit')->middleware('auth');
         Route::post('/course/update/{id}', 'CourseController@update')->name('course.update')->middleware('auth');
         Route::get('/course/delete/{id}', 'CourseController@destroy')->name('course.delete')->middleware('auth');    

      // Route::resource('students', 'StudentController');