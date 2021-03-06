<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'birth_date'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student', 'student_id');
    }
}
