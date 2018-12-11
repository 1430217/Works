@extends('layouts.template')

@section('content')
<div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Editar proyecto</h3>
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

                    <form action="/proyecto/{{$proyecto->id}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre del proyecto</label>
        
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" placeholder="{{$proyecto->nombre}}">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Presupuesto</label>
        
                            <div class="col-sm-10">
                                <input type="text" name="presupuesto" class="form-control" placeholder="{{$proyecto->presupuesto}}">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tipo</label>
        
                            <div class="col-sm-10">
                                <input type="text" name="tipoProyecto" class="form-control" placeholder="{{$proyecto->tipoProyecto}}">
                            </div>
    
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 control-label">Estado</label>
            
                                <div class="col-sm-10">
                                    <input type="text" name="estado" class="form-control" placeholder="{{$proyecto->estado}}">
                                </div>
        
                            </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Descripción</label>
        
                            <div class="col-sm-10">
                                <textarea class="form-control" name="descripcion">{{$proyecto->descripcion}}</textarea>
                            </div>
    
                        </div>

                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
@endsection