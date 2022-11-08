<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


class LoginController extends Controller
{
    public function index()
    {
        $register = Register::all();
        return view('login', compact('register'));
    }
    
    
}
