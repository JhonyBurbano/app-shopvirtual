<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
    	$categorias = Categoria::pluck('nombre', 'id');

    	if (!empty($request->all())) {

            $busqueda = array();

            if ($request->isMethod('get')) {

                if (isset($request->categoria_id) && $request->categoria_id != "") {
                    $busqueda[] = ['categoria_id', '=', $request->categoria_id];
                }

                if (isset($request->name) && $request->name != "") {
                    $busqueda[] = ['nombre', 'LIKE', "%$request->name%"];
                }

                $productos = Producto::where($busqueda)
                ->paginate(10)
                ->appends([
                    'categoria_id' => $request->categoria_id,
                    'name' => $request->name
                ]);
            }

        } else {
            $productos = Producto::paginate(10);
        }

       	return view('welcome', compact('productos', 'categorias'));
    }
}
