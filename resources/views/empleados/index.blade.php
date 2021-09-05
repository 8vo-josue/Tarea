@extends('layouts.plantillabase');

@section('contenido')
<a href="empleados/create" class="btn btn-primary">CREAR EMPLEADO</a>

<table class="table table-striped table-inverse table-responsive" >
          <thead class="thead-inverse">
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Direccion</th>
              <th scope="col">Telefono</th>
              <th scope="col">Puesto</th>
              <th scope="col">Nacimiento</th>
              <th scope="col">Acciones</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($empleados as $empleado)    
            <tr>
              <th>{{$empleado->codigo}}</th>
              <th>{{$empleado->nombres}}</th>
              <th>{{$empleado->apellidos}}</th>
              <th>{{$empleado->direccion}}</th>
              <th>{{$empleado->telefono}}</th>
              <th>{{$empleado->puesto}}</th>
              <th>{{$empleado->nacimiento}}</th>
              <th>
                <form action="{{route('empleados.destroy', $empleado->id)}}" method="POST">
                  <a href="/empleados/{{$empleado->id}}/edit"class="btn btn-info">Editar</a>
                 @csrf
                 @method ('delete')
                  <button type="submit"  class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar?')">Borrar</button>
                </form>
              </th>
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection()