<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obras;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obras=Obras::orderBy('id','ASC')->get();
        return view('obras',array('obraVista'=>$obras));
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
      $titulo = $request ['titulo'];
      $creacion= $request ['creacion'];
      $descrip=$request ['descrip'];
      $auto= $request ['auto'];

      $obras = new Obras();
      $obras-> titulo = $titulo;
      $obras-> creada = $creacion;
      $obras-> descripcion =$descrip;
      $obras-> autor = $auto;

      $obras-> save();

    return redirect()->back();


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obras = Obras::find($id);
       $obras->delete();

return redirect()->back();

}
}
