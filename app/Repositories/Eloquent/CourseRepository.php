<?php

namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Repositories\Contracts\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    private $model;

    public function __construct()
    {
        $this->model = app(Course::class);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getAllCourses()
    {
        return $this->model->all();
    }

    public function getCourseById($id)
    {
        return $this->model->find($id);
    }

}
