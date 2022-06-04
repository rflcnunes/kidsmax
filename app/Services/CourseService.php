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
}
