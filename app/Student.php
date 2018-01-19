<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['name', 'email'];

    protected $hidden = ['id','created_at', 'updated_at'];
}
