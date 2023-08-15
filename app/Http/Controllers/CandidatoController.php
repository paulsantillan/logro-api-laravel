<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $rules = array(
        'descripcion' => 'required|string',
        'foto' => 'required',
        'idlista' => 'required',
        'idtipocandidato' => 'required',
    );
    public function index()
    {
        $candidatos=Candidato::with('Lista','TipoCandidato')->get();
        return response()->json([
            "candidatos"=>$candidatos
        ],200);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(["messages" => $messages], 500);
        }
        $candidato=Candidato::find($id);
        $candidato->update([$request->all]);
        return response()->json([
            "message"=>"candidato actualizado"
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
