<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\RegisterEnrollmentRequest;
use App\Http\Responses\ApiResponse;
use App\Services\StudentService;

class StudentController extends Controller
{
    private $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        try {
            $data = $this->studentService->getStudentRepository()->getAllStudents();

            return new ApiResponse(
                true,
                'All students',
                $data,
                200);
        } catch (\Exception $e) {
            return new ApiResponse(
                false,
                $e->getMessage(),
                null,
                500);
        }
    }

    public function createStudent(CreateStudentRequest $request)
    {
        try {
            $data = $request->all();

            $students = $this->studentService->createStudent($data);

            return new ApiResponse(
                true,
                'Student created successfully',
                $students,
                201);
        } catch (\Exception $e) {
            return new ApiResponse(
                false,
                $e->getMessage(),
                null,
                500);
        }
    }


    public function registerEnrollment(RegisterEnrollmentRequest $request)
    {
        try {
            $id = $request->input('student_id');
            $course_id = $request->input('course_id');

            $data = $this->studentService->registerEnrollment($id, $course_id);

            return new ApiResponse(
                true,
                'Enrollment registered successfully',
                $data,
                201);
        } catch (\Exception $e) {
            return new ApiResponse(
                false,
                $e->getMessage(),
                null,
                500);
        }
    }

    public function showCoursesByStudentId($id)
    {
        try {
            $data = $this->studentService->getStudentRepository()->getCoursesByStudentId($id);

            return new ApiResponse(
                true,
                'Courses found by Student',
                $data,
                200);
        } catch (\Exception $e) {
            return new ApiResponse(
                false,
                $e->getMessage(),
                null,
                500);
        }
    }

}
