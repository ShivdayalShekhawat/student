<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

      protected $fillable = [
        'name',
        'roll_no',
        'english',
        'eng_marks',
        'hindi',
        'hindi_marks',
        'maths',
        'maths_marks',
        'sanskrit',
        'science',
        'science_marks',
        'totalmarkes',
        'class_id',
        'image'
    ];



}
