<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_producto',
        'cantidad',
        'foto',
        'total',
        'user_id',
        'producto_id'
    ];
    
    public function user(){
        return $this->belongsTo(user::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
