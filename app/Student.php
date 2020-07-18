<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'firstName', 'lastNames', 'studentId', 'department', 'phone', 'gender', 'DOB', 'email', 'address', 'country'
    ];

}
