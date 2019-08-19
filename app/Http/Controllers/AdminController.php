<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // index function to show home page
    public function index() {
    	return view('admin/dashboard');
    }

    public function staff_management() {
        return view('admin/staff_management');
    }

    public function add_staff() {
        return view('admin/add-staff');
    }

    public function staff_profile() {
        return view('admin/staff_profile');
    }

    public function student_management() {
    	return view('admin/student_management');
    }

    public function add_student() {
        return view('admin/add-student');
    }

    public function course_management() {
    	return view('admin/course_management');
    }

    public function finances() {
    	return view('admin/finances');
    }
}
