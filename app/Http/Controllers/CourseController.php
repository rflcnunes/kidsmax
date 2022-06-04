<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
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

    public function store(CreateCourseRequest $request)
    {
        try {
            $data = $request->all();

            $courses = $this->courseService->createCourse($data);

            return new ApiResponse(true, 'Course created successfully', $courses, 201);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }
}
