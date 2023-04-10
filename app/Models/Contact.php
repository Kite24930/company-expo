<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'student_number',
        'student_grade',
        'student_department',
        'student_name',
        'student_email',
        'title',
        'detail',
        'status',
    ];
}
