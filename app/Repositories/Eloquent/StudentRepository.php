<?php

namespace App\Repositories\Eloquent;

use App\Models\Student;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    private $student;

    public function __construct()
    {
        $this->student = app(Student::class);
    }

    public function getModel()
    {
        return $this->student;
    }

    public function getAllStudents()
    {
        return $this->student->all();
    }

    public function getCoursesByStudentId($id)
    {
        return $this->student->find($id)->courses;
    }
}
