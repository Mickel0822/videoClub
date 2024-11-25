<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['genNombre'];

    protected $primaryKey = 'genId';  // Nombre de la columna primaria
    
    // Relación con Pelicula
    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'genId', 'genId');
    }
}
