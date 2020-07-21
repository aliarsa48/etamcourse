<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['teacher_id','course_id','total','bank','nama','norek','buktipencairan'];
}
