<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_name',
        'image_path',
        'provost_roll',
        'assistant_provost_roll',
        'assistant_provost_roll_2',
    ];

    
    public function provost()
    {
        return $this->belongsTo(Teacher::class, 'provost_roll', 'teacher_roll');
    }

    public function assistantProvost1()
    {
        return $this->belongsTo(Teacher::class, 'assistant_provost_roll', 'teacher_roll');
    }

    public function assistantProvost2()
    {
        return $this->belongsTo(Teacher::class, 'assistant_provost_roll_2', 'teacher_roll');
    }
}
