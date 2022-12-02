<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultalib= DB::table('tb_libros')->get();
        return view('Libros', compact('consultalib'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorDiario $request)
    {
        DB::table('tb_libros')->insert([
            "txtisbn"=> $request->input('isbn'),
            "txttitulo"=> $request->input('titulo'),
            "txtautor"=> $request->input('autor'),
            "txtpaginas"=> $request->input('pagina'),
            "txteditorial"=> $request->input('editorial'),
            "txtemail"=> $request->input('email'),
           
        ]);

        return redirect('libros/create')->with('confirmacion', 'abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $consultaId= DB::table('tb_recuerdos')->where('idRecuerdo',$id)->first();
        return view('editar', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorDiario $request, $id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo',$id)->update([
            "titulo"=> $request->input('txttitulo'),
            "recuerdo"=> $request->input('txtrecuerdo'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('recuerdo')->with('actualizado','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
   
     public function show($id)
    {
        $consultaId= DB::table('tb_recuerdos')->where('idRecuerdo',$id)->first();

        return view ('eliminar', compact('consultaId'));
    }



    public function destroy($id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo',$id)->delete();
           
      return redirect('recuerdo')->with('eliminado','abc');
    }
}
