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
       return view('admin/staff_management')->with("staffs", $staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Staff::find($id);
        return view('admin/staff_profile')->with("teacher", $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::find($id)->delete();
        return back();
    }
}
