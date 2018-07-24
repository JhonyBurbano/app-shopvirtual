<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class WelcomeController extends Controller
{
    public function welcome()
    {
    	$productos = Producto::paginate(12);

    	return view('welcome', compact('productos'));
    }
}
