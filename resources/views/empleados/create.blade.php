@extends('layouts.plantillabase');

@section('contenido')
<!doctype html>
<html lang="en">
  <head>
    <title>Crear</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <h2>Ingrese sus datos</h2>
      <form action="/empleados" method="POST">
      @csrf
      <div class="col">
            <div class="mb-3">
              <label for="lbl_codigo" class="form-label"><b>Codigo</b></label>
              <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="codigo: E001" required>
            </div>
            <div class="mb-3">
              <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
              <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombres: Nombre1 Nombre2" required>
            </div>
            <div class="mb-3">
              <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
              <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellidos: Apellido1 Apellido2" required>
            </div>
            <div class="mb-3">
              <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
              <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Direccion: #casa calle avenida lugar" required>
            </div>
            <div class="mb-3">
              <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
              <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="Telefono: 55552222" required>
            </div>
            <div class="mb-3">
              <label for="lbl_telefono" class="form-label"><b>Puesto</b></label>
              <input type="text" name="txt_puesto" id="txt_puesto" class="form-control" placeholder="ejemplo: Gerente" required>
            </div>
            </div>
            <div class="mb-3">
              <label for="lbl_fn" class="form-label"><b>Fecha nacimento</b></label>
              <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="aaaa-mm-dd" required>
            </div>
            <a href="/empleados" class="btn btn-danger" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
      </form> 
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

@endsection()