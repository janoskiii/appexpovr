<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiantes;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes=Estudiantes::orderBy('id','ASC')->get();
        return view('estudiantes',array('estudianteVista'=>$estudiantes));
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
      $name = $request ['name'];
      $last= $request ['last'];
        $number=$request ['number'];
      $age= $request ['age'];
      $email= $request ['mail'];
      $place= $request ['place'];

      $estudiantes = new Estudiantes();
      $estudiantes-> nombre = $name;
      $estudiantes-> apellido = $last;
      $estudiantes-> rut = $number;
      $estudiantes-> nacimiento = $age;
      $estudiantes-> correo = $email;
      $estudiantes-> institucion=$place;

      $estudiantes-> save();

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
        $estudiantes = Estudiantes::find($id);
       $estudiantes->delete();

    return redirect()->back();



    }

}
