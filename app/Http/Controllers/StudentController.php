<?php

namespace App\Http\Controllers;

use App\Services\StudentService;

class StudentController extends Controller
{
    private $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

}
