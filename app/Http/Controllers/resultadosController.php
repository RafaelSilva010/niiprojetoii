<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultadosController extends Controller
{
    public function index()
    {
        return view('resultados');
    }
}
