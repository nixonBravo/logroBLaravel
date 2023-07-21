<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tipo_productos';
    protected $fillable = [
        'tipo',
    ];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
