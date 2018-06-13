<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instituciones;

class InstitucionesController extends Controller
{


    // mostrar trabla
    public function listar()
      {
          //
          $instituciones=Instituciones::orderBy('id','ASC')->get();
          return view('instituciones',array('institucionVista'=>$instituciones));
      }

// crear
public function store(Request $request)
{
  $nombre = $request ['nombre'];
  $sede = $request ['sede'];

  $instituciones = new Instituciones();
  $instituciones-> nombre = $nombre;
  $instituciones-> sede = $sede;

  $instituciones-> save();

return redirect()->back();


}
// pasar datos a modal

public function edit($id)
{
$instituciones = Instituciones::find($id);
return view('instituciones', compact('instituciones'));
}



// editar los datos del modal
public function update(Request $request, $id)
{

$instituciones= Instituciones::find($id);

$instituciones->fill($request->all());
$instituciones->save();

}


public function destroy($id)
{
    //
    $instituciones = Instituciones::find($id);
   $instituciones->delete();

return redirect()->back();



}






}
