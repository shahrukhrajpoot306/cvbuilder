<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Resume2Controller extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('resume2',compact('user'));

    }
}
