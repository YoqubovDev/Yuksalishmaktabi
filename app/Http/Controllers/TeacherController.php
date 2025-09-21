<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Departments; // <-- Qo'shish shart!
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $departments = Departments::all();
        return view('teachers', compact('teachers', 'departments'));
    }
}