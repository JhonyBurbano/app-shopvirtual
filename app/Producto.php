<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	// El producto o varios pueden pertenecer a una categoria
    public function categoria()
    {
    	return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    // un producto puede tener varias imaganes asociadas
    public function images()
    {
    	return $this->hasMany(ProductoImage::class);
    }

    public function getImagenUrlAttribute()
    {
        $destacadaImagen = $this->images()->where('destacada', true)->first();
        if (!$destacadaImagen) {
            $destacadaImagen = $this->images()->first();
        }

        if ($destacadaImagen) {
            return $destacadaImagen->image;
        }

        return '/images/productos/default.png';
    }
}
