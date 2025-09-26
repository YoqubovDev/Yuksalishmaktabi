<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'subjects',
        'icon',
        'duration',
        'student_count',
        'color',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}