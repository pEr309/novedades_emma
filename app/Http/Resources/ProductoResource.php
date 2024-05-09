<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'imagen' => $this->imagen,
            'descripcion' =>$this->descripcion,
            'cantidad' => $this->cantidad,
            'imagen' => $this->imagen,
            'user_id' => $this->user_id,
            'user'=> $this->user,
            'create_at'=> $this->created_at,
            'update_at'=> $this->update_at



        ];
        
    }
}
