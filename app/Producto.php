<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'categoria_id','descripcion', 'descripcion_larga', 'precio',
    ];

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

    public function getCategoriaFirstAttribute()
    {
        return $this->categoria()->first();
    }

    public function getCategoriaNombreAttribute()
    {
        if($this->categoria)
            return $this->categoria->nombre;

        return 'General';
    }

    /* ++++++ scopes ++++++ */

    // Scope para realizar busqueda

    public function scopeBusqueda($query, $categoria, $producto)
    {
        if (is_null($categoria)) {
            return $query->where('nombre', 'LIKE', "%$producto%");
        } else {
            return $query->where('categoria_id', $categoria);
        }
    }


}
