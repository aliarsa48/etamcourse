<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = ['thumbnail','id','teacher_id','title','description','category','thumbnail','start_date','end_date','kuota','kuotaterisi','jumlahpertemuan','start_time','end_time','price','status','link','pertemuanke','statuspencairan'];
}
