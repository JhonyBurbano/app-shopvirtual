<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $fillable = [
        'nombre', 'descripcion'
    ];
	// Una categoria puede tener muchos productos
   	public function productos()
   	{
   		return $this->hasMany(Producto::class);
   	}
}
