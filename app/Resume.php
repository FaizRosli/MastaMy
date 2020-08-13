<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //
    protected $table = 'Resume';
    protected $fillable = [
        'course', 'year', 'detail_education', 'job_title', 'date_start', 'date_end', 'job_description',
        'type_skill', 'name_skill', 'percentage', //Advance, Intermediate, Beginner
        'user_id'
    ];
}
