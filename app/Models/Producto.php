<?php

namespace App\Models;

use Database\Factories\ProductoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function clientes(){
        return 
        $this->belongsToMany("App\Models\Cliente");     
    }
    public function crearProductos(){
        Producto::factory()->count(0)->create();
    }
}

