<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Creación de 5 categorias
        $categorias = factory(App\Categoria::class, 5)->create();

        $categorias->each(function ($categoria) {
        	// Creación de Productos asociados a una categoria
        	$productos = factory(App\Producto::class, 20)->make();
        	$categoria->productos()->saveMany($productos);
        	// asociar imagenes a productos
        	$productos->each(function ($producto) {
    			$images = factory(App\ProductoImage::class, 5)->make();
    			$producto->images()->saveMany($images);
    		});
        });
        	
    }
}
