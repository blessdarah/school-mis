<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;

class LevelsController extends Controller
{
    public function index() {
        $levels = Level::all();
        return view('admin/class_management')->with('levels', $levels);
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required'
        ]);

        $class = new Level();
        $class->name = request('class-name');
        $class->save();

        return view('admin/home');
    }
}
