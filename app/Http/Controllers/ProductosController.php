<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function show($id_producto){

    	$producto = Producto::find($id_producto);
    	$images = $producto->images;

    	$imagesLeft = Collect();
    	$imagesRight = Collect();

    	foreach ($images as $key => $image) {
    		if ($key%2==0) {
    			$imagesLeft->push($image);
    		} else {
    			$imagesRight->push($image);	
    		}
    	}
    	
    	return view('productos.show', compact('producto', 'imagesLeft', 'imagesRight'));
    }
}
