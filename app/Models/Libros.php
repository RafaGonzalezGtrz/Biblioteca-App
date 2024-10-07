<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    // use HasFactory;
    protected $table='library';
    protected $fillable = [
        'nombre', 'descripcion', 'autor', 'categoria', 'editorial', 'ISBN'
    ];
    public $timestamps = false;
}
