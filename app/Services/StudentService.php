<?php

namespace App\Services;

use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentService
{
    private $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getStudentRepository(): StudentRepositoryInterface
    {
        return $this->studentRepository;
    }
}
