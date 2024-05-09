<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoCollection;
use App\Http\Responses\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\FlareClient\Api;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $productos = new ProductoCollection(Producto::all());
            return ApiResponse::success('Listado de usuarios',200, $productos);

        } catch (Exception $e){
            return ApiResponse::error('Error en la consulta, 404 ',$e,404);

        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $producto = new ProductoCollection(Producto::query()->where('id',$id)->get);
            if($producto->isEmpty())throw new ModelNotFoundException("Producto no encontrado");
            return ApiResponse::success("Información del producto", 200, $producto);
        } catch (ModelNotFoundException $e){
            return ApiResponse::error('No se encuentra el producto', 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
