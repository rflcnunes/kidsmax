<?php

namespace App\Repositories\Contracts;

interface CourseRepositoryInterface
{
    public function getModel();
    public function getAllCourses();
}
