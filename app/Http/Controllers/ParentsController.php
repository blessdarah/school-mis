<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parents;
class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Parents::all();
        return view('admin/parent_management')->with('parents', $parents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent = new Parents();

        $data = $request->validate([
            'fathers_address'       => 'required',
            'mothers_name'          => 'required',
            'fathers_profession'    => 'required',
            'mothers_profession'    => 'required',
            'fathers_contact'       => 'required',
            'mothers_contact'       => 'required'
        ]);


        $parent->fathers_name = request('fathers_name');
        $parent->mothers_name = request('mothers_name');
        $parent->fathers_address = request('fathers_address');
        $parent->mothers_address = request('mothers_address');
        $parent->fathers_contact = request('fathers_contact');
        $parent->mothers_contact = request('mothers_contact');
        $parent->fathers_profession = request('fathers_profession');
        $parent->mothers_profession = request('mothers_profession');
        $parent->save();

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
        //
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
        //
    }
}
