<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();

       return view('admin.staff_management')->with("staffs", $staffs);
    }

    // CREAT A NEW STAFF AND STORE IN DATABASE
    public function store(Request $request) {
        $staffInfo = $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'username'  => 'required',
            'email'     => 'required',
            'telephone' => 'required',
            'address'   => 'required',
            'password'  => 'required'
        ]);

        $staff = new Staff;
        $staff->first_name  = request('firstname');
        $staff->last_name   = request('lastname');
        $staff->username    = request('username');
        $staff->password    = request('password');
        $staff->email       = request('email');
        $staff->phone_number   = request('telephone');
        $staff->gender      = request('gender');
        $staff->save();

        return back();
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
