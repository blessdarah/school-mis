<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Level;
use App\Student;

class AdminController extends Controller
{
    // index function to show home page
    public function index()
    {
        $students = Student::all();
        $staffs = Staff::all();
        $classrooms = Level::all();
        return view('admin/dashboard', compact('students', 'staffs', 'classrooms'));
    }

    public function finances()
    {
        return view('admin/finances');
    }

    public function discipline()
    {
        return view('admin/discipline');
    }

    public function account_settings()
    {
        return view('admin/account_settings');
    }
}
