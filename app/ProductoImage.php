<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImage extends Model
{
    public function producto()
    {
    	return $this->belongsTo(Producto::class, 'producto_id');
    }
}
