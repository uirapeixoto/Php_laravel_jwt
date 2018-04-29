<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index()
    {
        $list = Estado::all();
        return response()->json($list);
    }
    
    public function show($id)
    {
        $estado = Estado::find($id);

        if(!$estado) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($estado);
    }
}
