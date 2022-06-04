<?php

namespace App\Http\Controllers;

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

}
