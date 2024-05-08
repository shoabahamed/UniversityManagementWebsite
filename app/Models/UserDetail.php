<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'image_path',
        'father_name',
        'mother_name',
        'mobile_no',
        'address',
        'hall_name',
        'blood_group',
        'gender',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
