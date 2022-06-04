<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title' => 'Biology',
            'description' => 'Biology is the study of life and living organisms. It is the study of the structure, function, and evolution of organisms. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'Chemistry',
            'description' => 'Chemistry is the study of matter and its properties. It is the study of the structure, function, and evolution of matter. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'Physics',
            'description' => 'Physics is the study of matter and its properties. It is the study of the structure, function, and evolution of matter. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'Mathematics',
            'description' => 'Mathematics is the study of numbers and their properties. It is the study of the structure, function, and evolution of numbers. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'English',
            'description' => 'English is the study of words and their properties. It is the study of the structure, function, and evolution of words. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::Create([
            'title' => 'History',
            'description' => 'History is the study of events and their properties. It is the study of the structure, function, and evolution of events. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'Geography',
            'description' => 'Geography is the study of places and their properties. It is the study of the structure, function, and evolution of places. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'Economics',
            'description' => 'Economics is the study of the economy and its properties. It is the study of the structure, function, and evolution of the economy. It is the study of the relationship between the physical and the biological systems.',
        ]);

        Course::create([
            'title' => 'Technology',
            'description' => 'Technology is the study of the science and its properties. It is the study of the structure, function, and evolution of the science. It is the study of the relationship between the physical and the biological systems.',
        ]);
    }
}
