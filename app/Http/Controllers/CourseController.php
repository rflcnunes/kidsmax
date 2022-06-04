<?php

namespace App\Http\Controllers;

use App\Http\Responses\ApiResponse;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        try {
            $data = $this->courseService->getCourseRepository()->getAllCourses();

            return new ApiResponse(true, 'All courses', $data, 200);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }
}
