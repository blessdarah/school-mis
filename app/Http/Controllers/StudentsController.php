<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view("admin/student_management")->with("students", $students);
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
        $data = $request->validate([
            'firstname'  => 'required',
            'lastname'   => 'required',
            'dob'        => 'required',
            'pob'        => 'required'
        ]);

        $student = new Student;
        $student->firstname     = request("firstname");
        $student->lastname      = request("lastname");
        $student->pob           = request("pob");
        $student->dob           = request("dob");
        $student->gender        = request("gender");
        $student->save();

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
        $student = Student::find($id);
        return view("admin/view-student")->with("student", $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view("admin/edit-student")->with("student", $student);
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
        $data = $request->validate([
            'firstname'  => 'required',
            'lastname'   => 'required',
            'dob'        => 'required',
            'pob'        => 'required'
        ]);

        $student = Student::find($id);
        $student->firstname     = request("firstname");
        $student->lastname      = request("lastname");
        $student->pob           = request("pob");
        $student->dob           = request("dob");
        $student->gender        = request("gender");
        $student->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return back();
    }
}
