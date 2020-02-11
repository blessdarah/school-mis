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

    public function parent_management() {
        return view('admin/parent_management');
    }

    public function staff_management()
    {
        return view('admin/staff_management');
    }

    public function add_staff()
    {
        return view('admin/add-staff');
    }

    public function staff_profile()
    {
        return view('admin/staff_profile');
    }

    public function student_management()
    {
        return view('admin/student_management');
    }

    public function add_student()
    {
        return view('admin/add-student');
    }

    public function view_student()
    {
        return view('admin/view-student');
    }

    public function course_management()
    {
        return view('admin/course_management');
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
