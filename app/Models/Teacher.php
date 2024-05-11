<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path',
        'dept',
        'role',
        'is_dean',
        'is_head',
        'head_department',
        'dean_faculty',
        'email',
        'phone',
    ];
}
