<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = StudentResource::Collection(Student::all());

        return inertia('Students/Index', [
            'students' => $students
        ]);

    }
}
