<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Instituciones</title>
  </head>
  <body>
    <h1>Instituciones</h1>






    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="nav-item nav-link active" href="inicio"> Inicio <span class="sr-only">(current)</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-item nav-link active" href="estudiantes"> Estudiantes <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-item nav-link active" href="institucion"> Instituciones <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link active" href="obras"> Obras <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-item nav-link active" href="autor"> Autores <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link active" href="nacionalidad"> Nacionalidades <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>



<div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sede</th>
  <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
      <td>    @foreach($institucionVista as $institucion)
    <tr>



  <td>  {{$institucion->id}}</td>
  <td> {{$institucion->nombre}}</td>
  <td>{{$institucion->sede}}</td>


      </td>

      <td>
<td><a href="{{url('/institucion/edit',$institucion->id)}}" ><span class="btn btn-warning "data-toggle="modal" data-target="#exampleModaleditar"> editar</span></a>

    <a href="{{ url('/institucion/destroy',$institucion->id)}}"><span class="btn btn-danger">Eliminar</span></a>
  </td>

    </tr>

  @endforeach
  </tbody>

</table>


</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Nueva Institucion
</button>

<!-- Modal nuevo -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="panel panel-success">
<div class="panel-heading">

<h4>nueva institucion</h4>
</div>

<div class="panel-body">
  <form action="{{route('ingresar')}}" method="POST">
{!! csrf_field() !!}
<p>
  <input type="text" name="nombre" placeholder="Nombre" class="form-control" required >
</p>
<p>
  <input type="text" name="sede" placeholder="Sede" class="form-control" required>
</p>
<p>
  <input type="submit" value="Guardar" class="btn btn-success">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</p>
          </form>
    </div>
  </div>
</div>
</div>
</div>
</div>


<!-- Modal editar -->
<div class="modal fade" id="exampleModaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="panel panel-success">
<div class="panel-heading">

<h4>editar institucion</h4>
</div>

<div class="panel-body">
  <td>    @foreach($instituciones as $institucion)

  <form action="" method="PUT">

{!! csrf_field() !!}
<p>
  <input value="{{$institucion->id}}" type="text" name="nombre" placeholder="Nombre" class="form-control" required >
</p>
<p>
  <input value="{{$institucion->nombre}}" type="text" name="nombre" placeholder="Nombre" class="form-control" required >
</p>
<p>
  <input value="{{$institucion->sede}}" type="text" name="sede" placeholder="Sede" class="form-control" required>
</p>
<p>
  <input type="submit" value="Guardar" class="btn btn-success">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</p>
  @endforeach
          </form>
    </div>
  </div>
</div>
</div>
</div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
