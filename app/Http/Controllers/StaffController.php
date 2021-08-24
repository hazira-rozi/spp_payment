<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaffController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('staff.home', compact('user'));
    }
}
