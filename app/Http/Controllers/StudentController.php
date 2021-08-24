<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('student.home', compact('user'));
    }
}

