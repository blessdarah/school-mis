<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Level;
use App\Course;

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
       $levels = Level::all();

    //    dd($staffs);
       return view('admin/staffs/index', [
           'staffs' => $staffs,
           'levels' => $levels
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        $courses = Course::all();
        return view("admin/staffs/create", compact('levels', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $staffInfo = request()->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'username'  => 'required',
            'email'     => 'required',
            'gender'    => '',
            'phonenumber' => 'required',
            'address'   => 'required',
            'password'  => 'required'
        ]);

       Staff::create($staffInfo);

        return back()->with('message', 'New staff added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('admin/staffs/profile')->with("teacher", $staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $levels = Level::all();
        $courses = Course::all();
        return view('admin/staffs/edit', compact('staff', 'levels', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
       $data = request()->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'username'  => 'required',
            'email'     => 'required',
            'gender'    => '',
            'phonenumber' => 'required',
            'address'   => 'required',
            'password'  => 'required'
       ]);

       $staff->update($data);

       return back()->with([
        'message', "Staff updated",
        'teacher', $staff
       ]);
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
