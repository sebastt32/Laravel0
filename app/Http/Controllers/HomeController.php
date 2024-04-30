<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // El metodo invoke solo se usa cuando el controlador administra una sola ruta
    public function __invoke(){
        // return view('welcome');
    return view('home');
    }
}
