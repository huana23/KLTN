<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function index()
    {
        
        $users = Auth::user();
        return view('layouts.admin.dashboard', compact('users'));
    }
}

