<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'cantidad',
        'imagen',
        'user_id'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function Compra(){
        return $this->hasMany(Compra::class);
    }
}
