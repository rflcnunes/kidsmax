<?php

namespace App\Repositories\Contracts;

interface StudentRepositoryInterface
{
    public function getAllStudents();
    public function getCoursesByStudentId($id);
}
