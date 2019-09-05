<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index function to show home page
    public function index() {
    	return view('login');
    }

    public function register() {
    	return view('pages/register');
    }

    public function dashboard() {
    	return view('pages/dashboard');
    }

    public function contact() {
    	return view('pages/contact');
    }
}
