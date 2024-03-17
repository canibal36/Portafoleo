<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Muestra la página de bienvenida.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('welcome');
    }
}
