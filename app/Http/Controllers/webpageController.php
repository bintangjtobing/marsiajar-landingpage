<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webpageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
