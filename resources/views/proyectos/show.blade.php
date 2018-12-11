@extends('layouts.template') 
@section('content')
<div class="col-md-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Collapsible Accordion</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="box-group" id="accordion">
        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <div class="panel box box-primary">
          <div class="box-header with-border">
            <h4 class="box-title">
              <a data-toggle="" data-parent="#accordion" href="">
                        {{$proyecto->nombre}}
                      </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="box-body">
              <h4> <strong>Descripción:</strong></h4>
              <p>{{$proyecto->descripcion}}</p>

              <h4> <strong>Presupuesto:</strong> </h4>
              $ {{$proyecto->presupuesto}}.00 MXN

              <h4> <strong>Tipo:</strong> </h4>
              {{$proyecto->tipoProyecto}}

              <h4> <strong>Estado:</strong> </h4>
              {{$proyecto->estado}}

              <h4> <strong>Fecha de creación:</strong> </h4>
              {{$proyecto->created_at}}

            </div>
            <a type="button" href="/proyecto/{{$proyecto->id}}/edit" class="btn btn-warning">Editar proyecto</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection