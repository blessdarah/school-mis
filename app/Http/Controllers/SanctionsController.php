<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sanction;

class SanctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanctions = Sanction::all();

        return view('staff.sanctions', [
            'sanctions' => $sanctions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staff.sanctions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateData($request);

        Sanction::create($data);

        return back()->with("message", "Addes successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanction = Sanction::find($id);

        return view('staff.sanctions.show', [
            'sanction' => $sanction
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanction = Sanction::find($id);

        return view('staff.sanctions.edit', [
            'sanction' => $sanction
        ]);
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
        $data = $this->validateData($request);

        $sanction = Sanction::find($id);
        $sanction->update($data);

        return back()->with("message", "Updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sanction::find($id)->delete();

        return back()->with("message", "Sanction recorde deleted");
    }


    public function validateData($request) {
       return $request->validate([
            'crime'     => 'required',
            'details'   => 'required',
            'data'      => ''
        ]);
    }
}
