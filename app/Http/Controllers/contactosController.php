<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactosController extends Controller
{
    public function index()
    {
        return view('contactos');
    }
}
