<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Municipio;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
   private $estadoModel;

    public function __construct(Estado $estado)
    {
        $this->estadoModel = $estado;
    }

    public function getMunicipios($id)
    {
        $estado = $this->estadoModel->findOrFail($id);
        $cidades = $estado->municipios()->getQuery()->get(['id', 'municipio']);
        return response()->json($cidades);
    }

    public function estado()
    {
        return $this->belongsTo('Estado', 'estado_id');
    }

    public function index()
    {
        $list = Municipio::all();
        return response()->json($list);
    }

    public function show($id)
    {
        $municipio = Municipio::find($id);

        if(!$municipio) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($municipio);
    }
}
