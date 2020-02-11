<?php

namespace App\Http\Controllers;

use App\Guardians;
use Illuminate\Http\Request;

class GuardiansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guardians = Guardians::all();
        return view('admin/guardians/index')->with('guardians', $guardians);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/guardians/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
           'fathers_name' => 'required',
           'fathers_address' => 'required',
           'fathers_contact' => 'required',
           'fathers_profession' => 'required',
           'mothers_name' => 'required',
           'mothers_address' => 'required',
           'mothers_contact' => 'required',
           'mothers_profession' => 'required'
        ]);

        Guardians::create($data);

        return back()->with('message', 'New guardian added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardians $guardian)
    {
        return view('admin/guardians/view', compact('guardian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardians $guardian)
    {
        return view('admin/guardians/edit', compact('guardian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardians $guardian)
    {
        $data = request()->validate([
           'fathers_name' => 'required',
           'fathers_address' => 'required',
           'fathers_contact' => 'required',
           'fathers_profession' => 'required',
           'mothers_name' => 'required',
           'mothers_address' => 'required',
           'mothers_contact' => 'required',
           'mothers_profession' => 'required'
        ]);

        $guardian->update($data);

        return back()->with('message', 'guardian info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardians $guardian)
    {
        $guardian->delete();
        return back()->with('message', 'Deleted successfully');
    }
}
