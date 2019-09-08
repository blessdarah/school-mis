<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('staff/home');
    }

    public function class() {
        return view('staff/class');
    }

    public function reports() {
        return view('staff/reports');
    }

    public function sanctions() {
        return view('staff/sanctions');
    }

    public function reminders() {
        return view('staff/reminders');
    }

    public function account_settings() {
        return view('staff/account_settings');
    }
    
}
