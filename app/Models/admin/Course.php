<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    public function teachers(){

        return  $this->belongsTo(Teacher::class, 'teacher_id');
        
    }
}
