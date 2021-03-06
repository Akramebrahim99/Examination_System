<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $fillable = ['id','name','email','password','ssn','university_name',
    'collage_name','phone','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = true;

    ###################################### Relations ##########################################
    public function courses(){
        return $this -> belongsToMany('App\Models\Course','student_course','student_id','course_id')
        ->withPivot(['course_degree','course_status','no_of_std_submit']);
    }


    public function questions(){
        return $this -> belongsToMany('App\Models\Question','student_question','student_id','question_id')
        ->withPivot(['question_degree','student_answer']);
    }

}
