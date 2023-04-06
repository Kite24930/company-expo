<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'company_name',
        'company_ruby',
        'company_address',
        'company_HP',
        'recruit_department',
        'recruit_name',
        'recruit_ruby',
        'recruit_tel',
        'recruit_email',
        'establishment',
        'capital',
        'sales',
        'employees',
        'schoolmate',
        'recruit_type',
        'recruit_planned_number',
        'location',
        'target',
        'description',
        'company_PR',
        'category',
    ];
}
