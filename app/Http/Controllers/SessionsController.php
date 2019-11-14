<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class SessionsController extends Controller
{

    public function __construct() {
        $this->middleware('guest');
    }

    public function login() {

        if(!auth()->attempt(
            request(['name', 'password']))
        ) {
            return back();
        }

        redirect("tdashboard");
    }

}
