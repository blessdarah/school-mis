<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index function to show home page
    public function index() {
    	return view('home');
    }

    public function register() {
    	return view('pages/register');
    }

    public function dashboard() {
    	return view('staff/home');
    }

    public function sanctions() {
        return view('staff/sanctions');
    }

    public function settings() {
        return view('staff/account_settings');
    }

    public function contact() {
    	return view('pages/contact');
    }

    public function reports() {
        return view('staff/reports');
    }
}
