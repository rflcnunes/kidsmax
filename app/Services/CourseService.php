<?php

namespace App\Services;

use App\Repositories\Contracts\CourseRepositoryInterface;

class CourseService
{
    private $courseService;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseService = $courseRepository;
    }

    /**
     * @return CourseRepositoryInterface
     */
    public function getCourseRepository(): CourseRepositoryInterface
    {
        return $this->courseService;
    }

    public function createCourse($data)
    {
        return $this->courseService->getModel()->create($data);
    }

    public function updateCourse($id, $data)
    {
        return $this->courseService->getModel()->find($id)->update($data);
    }

    public function deleteCourse($id)
    {
        return $this->courseService->getModel()->find($id)->delete();
    }
}
