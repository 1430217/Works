@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabla de los proyectos creados</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de proyecto</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Presupuesto</th>
                        <th>Fecha de creacion</th>
                        <th>Nombre de la empresa/usuario</th>
                        <th>ver proyecto</th>
                        <th>Editar proyecto</th>
                    </tr>
              </thead>
              @foreach ($proyectos as $proyecto)
                  <tbody>
                        <td>{{$proyecto->id}}</td>
                        <td>{{$proyecto->nombre}}</td>
                        <td>{{$proyecto->descripcion}}</td>
                        <td>{{$proyecto->tipoProyecto}}</td>
                        <td>{{$proyecto->estado}}</td>
                        <td>$ {{$proyecto->presupuesto}}.00</td>
                        <td>{{$proyecto->created_at}}</td>
                        <td>{{$proyecto->id_empresa}}</td>
                        <td><a class="btn btn-success" href="/proyectos/{{$proyecto->id}}">Ver proyecto</a></td>
                        <td><a class="btn btn-warning" href="/proyectos/{{$proyecto->id}}/edit">Editar proyecto</a></td>
                  </tbody>
              @endforeach
            </table>
        </div>
      </div>
    </div>
    </div>

@endsection