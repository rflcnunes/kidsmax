<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateCourseRequest;
use App\Http\Responses\ApiResponse;
use App\Services\CourseService;

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

    public function store(CreateOrUpdateCourseRequest $request)
    {
        try {
            $data = $request->all();

            $courses = $this->courseService->createCourse($data);

            return new ApiResponse(true, 'Course created successfully', $courses, 201);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }

    public function update(CreateOrUpdateCourseRequest $request, $id)
    {
        try {
            $data = $request->all();

            $courses = $this->courseService->updateCourse($id, $data);

            return new ApiResponse(true, 'Course updated successfully', $courses, 201);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }

    public function getCourseById($id)
    {
        try {
            $data = $this->courseService->getCourseRepository()->getCourseById($id);

            return new ApiResponse(true, 'Course found', $data, 200);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }

    public function delete($id)
    {
        try {
            $data = $this->courseService->deleteCourse($id);

            return new ApiResponse(true, 'Course deleted successfully', $data, 200);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }

    public function getTrashedCourses()
    {
        try {
            $data = $this->courseService->getCourseRepository()->getTrashedCourses();

            return new ApiResponse(true, 'All trashed courses', $data, 200);
        } catch (\Exception $e) {
            return new ApiResponse(false, $e->getMessage(), null, 500);
        }
    }
}
