@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          @if(Auth::User()->tipoUsuario=="Freelancer")
            <h3 class="box-title">Tabla de empresas</h3>
          @endif
          
          @if(Auth::User()->tipoUsuario=="Empresa")
            <h3 class="box-title">Tabla de freelancers</h3>
          @endif
         

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
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Tipo de usuario</th>
                        <th>Biografia</th>
                        <th>Fecha de registro</th>
                        <th>Ver Usuario</th>
                    </tr>
              </thead>
              @foreach ($usuarios as $usuario)
                @if(Auth::User()->tipoUsuario != $usuario->tipoUsuario )
                  <tbody>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->tipoUsuario}}</td>
                        <td>{{$usuario->biblio}}</td>
                        <td>{{$usuario->created_at}}</td>
                        <td><a class="btn btn-success" href="/usuarios/{{$usuario->id}}/info"> Ver perfil</a></td>
                        
                  </tbody>
                @endif
              
              
              @endforeach
            </table>
        </div>
      </div>
    </div>
    </div>

@endsection