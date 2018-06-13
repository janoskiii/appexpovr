<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nacionalidades;

class NacionalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nacionalidad = Nacionalidades::orderBy('id','ASC')->get();
        return view('nacionalidad')->with('nacionalidad',$nacionalidad);
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
      $nombre = $request ['nombre'];
      $nacion = $request ['nacion'];

      $nacionalidad = new Nacionalidades();
      $nacionalidad-> pais = $nombre;
      $nacionalidad-> nacionalidad = $nacion;

      $nacionalidad-> save();

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
     //encontrar id
    public function edit($id)
    {

        $nacionalidad= Nacionalidades::find($id);
        dd($nacionalidad);
  //return view('edit.nacion')->with('nacionalidad',$nacionalidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      {
        $nombre = $request ['nombre'];
        $nacion = $request ['nacion'];

        $nacionalidad= Nacionalidades::find($id);

        $nacionalidad-> pais = $nombre;
        $nacionalidad-> nacionalidad = $nacion;

        $nacionalidad-> save();

      return redirect()->back();


      }
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
        $nacionalidad = Nacionalidades::find($id);
       $nacionalidad->delete();

return redirect()->back();



}
}
