<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class squizController extends Controller
{
    public function index()
    {
        return view('squiz');
    }
}
