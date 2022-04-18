<?php

namespace App\Http\Controllers;

use App\Models\Paquetes;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function index()
    {
        $paquetes = Paquetes::all();
        return response()->json($paquetes);
    }

    public function store(Request $request)
    {
        $paquete = new Paquetes();
        $paquete->id_cliente = $request->id_cliente;
        $paquete->origen = $request->origen;
        $paquete->destino = $request->destino;
        $paquete->detalle = $request->detalle;
        $paquete->precio = $request->precio;
        $paquete->peso = $request->peso;
        $paquete->save();
        return response()->json([
            "message" => "Paquete Agregado."
        ], 201);
    }

    public function show($id)
    {
        $paquete = Paquetes::find($id);
        if (!empty($paquete)) {
            return response()->json($paquete);
        } else {
            return response()->json([
                "message" => "Ṕaquete no encontrado"
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if (Paquetes::where('id', $id)->exists()) {
            $paquete = Paquetes::find($id);
            $paquete->id_cliente = is_null($request->id_cliente) ? $paquete->id_cliente : $request->id_cliente;
            $paquete->origen = is_null($request->origen) ? $paquete->origen : $request->origen;
            $paquete->destino = is_null($request->destino) ? $paquete->destino : $request->destino;
            $paquete->detalle = is_null($request->detalle) ? $paquete->detalle : $request->detalle;
            $paquete->precio = is_null($request->precio) ? $paquete->precio : $request->precio;
            $paquete->peso = is_null($request->peso) ? $paquete->peso : $request->peso;
            $paquete->save();
            return response()->json([
                "message" => "Paquete Actualizado."
            ], 404);
        } else {
            return response()->json([
                "message" => "Paquete no encontrado."
            ], 404);
        }

        /*   $paquete = new Paquetes();
        $paquete->id_cliente = $request->id_cliente;
        $paquete->origen = $request->origen;
        $paquete->destino = $request->destino;
        $paquete->detalle = $request->detalle;
        $paquete->precio = $request->precio;
        $paquete->peso = $request->peso; */
    }

    public function destroy($id)
    {
        if (Paquetes::where('id', $id)->exists()) {
            $paquete = Paquetes::find($id);
            $paquete->delete();

            return response()->json([
                "message" => "Paquete Eliminado."
            ], 202);
        } else {
            return response()->json([
                "message" => "Paquete no encontrado."
            ], 404);
        }
    }

    public function findByCliente($id)
    {
        $paquetes = Paquetes::where('id_cliente', '=', $id)->get();

        if (!empty($paquetes)) {
            return response()->json($paquetes);
        } else {
            return response()->json([
                "message" => "Ṕaquete no encontrado"
            ], 404);
        }
    }
}
