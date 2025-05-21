<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
abstract class Controller
{
    public function show()
    {
        $originalUrl = 'https://originalsite.com'; // URL do site original
        return view('example', compact('originalUrl'));
    }


    public function suaFuncao()
    {
     return view('YourController'); // 'sua_view' é o nome da view que você criará
    }
}
