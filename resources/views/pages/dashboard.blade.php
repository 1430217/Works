@extends('layouts.template')

@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <h1>Dashboard de works</h1>

        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Agendar cita</button>
    </div>
    





    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">

            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Agendar una cita</h3>
                </div>
             
                <form method="POST" action="/citas" class="form-horizontal">
                    @csrf

                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Asunto</label>
        
                            <div class="col-sm-10">
                                <input type="text" name="asunto" class="form-control" placeholder="Asunto de la visita">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Precio de la consulta</label>
        
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" name="precio" value="500">
                                <input type="text" class="form-control" disabled placeholder="$ 500.00 Mxn">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha</label>
        
                            <div class="col-sm-10">
                                <input type="date" name="fecha" class="form-control" placeholder="Fecha de la cita">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Decripción</label>
        
                            <div class="col-sm-10">
                                <textarea cols="30" rows="10" name="descripcion">Describa brevemente su condición</textarea>
                            </div>
                        </div>


                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Agendar</button>
                    </div>
                </form>
            </div>
        

        </div>
    </div>
@endsection