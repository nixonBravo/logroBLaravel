<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'productos';
    protected $fillable = [
        'producto',
        'precio',
        'cantidad',
        'fechaEntrega',
        'tipo_id',
    ];

    public function tipo(){
        return $this->belongsTo(TipoProducto::class);
    }
}
