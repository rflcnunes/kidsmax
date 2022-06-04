<?php

namespace App\Repositories\Contracts;

interface CourseRepositoryInterface
{
    public function getModel();
    public function getAllCourses();
    public function getCourseById($id);
}
