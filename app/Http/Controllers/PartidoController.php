<?php

namespace App\Http\Controllers;

use App\Partido;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
use Validator;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Validation\Rule;
use App\Nivel;
use DB;




class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        //
    }

    public function partidos(){
        return response()->json(Partido::get(),200);
    }

    public function partido($id){
        $partido = Partido::find($id);
        if(is_null($partido)){
            return \response()->json(["message"=>"No encontrado!"],404);    
        }
        return \response()->json($partido,200);
    }

    public function partidoSave(Request $request){
        $rules =[
            'nombre' => 'required|min:3',
            'codigo' => 'required|min:2|max:4',
        ];
        $validator = \Validator::make($request->all(), $rules); 
        if($validator->fails()){
            return response()->json($validator->error(), 400);
        }
        $partido = Partido::create($request->all());
        return response()->json($partido, 201);
    }

    public function partidoUpdate(Request $request, $id){
        $partido = Partido::find($id);
        if(\is_null($partido)){
            return \response()->json('No encontrad!',404);    
        }
        $partido->update($request->all());
        return \response()->json($partido, 200);
    }

    public function partidoDelete(Request $request, $id){
        $partido = Partido::find($id);
        if(\is_null($partido)){
            return \response()->json('No encontradoo!',404);    
        }
        $partido->delete();
        return \response()->json(null, 204);
    }

    public function partidoNivel(){
        $partidoNivel = DB::select('select partidos.*, nivels.nombre as nom_niv
            from partidos, nivels, partido_nivels
            where partidos.id = partido_nivels.partido_id and
                nivels.id = partido_nivels.nivel_id');
        return \response()->json($partidoNivel, 200);

    }
}
