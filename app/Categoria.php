<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	// Una categoria puede tener muchos productos
   	public function productos()
   	{
   		return $this->hasMany(Producto::class);
   	}
}
