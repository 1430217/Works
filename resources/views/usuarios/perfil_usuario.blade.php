@extends('layouts.template') @section('content')
<div class="col-md-12">
  <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-aqua-active">
      <h3 class="widget-user-username">{{$usuario->name}}</h3>
      <h5 class="widget-user-desc">{{$usuario->tipoUsuario}}</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="{{asset('/admin/dist/img/user1-128x128.jpg')}}" alt="User Avatar">
    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">jjf</h5>
            <span class="description-text">Comentarios</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">{{Auth::User()->id}}</h5>
            <span class="description-text">id_usuario</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="description-block">
            <h5 class="description-header">35</h5>
            <span class="description-text">PRODUCTS</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.widget-user -->
</div>


<div class="col-md-12">
  <!-- Box Comment -->
  <div class="box box-widget">
    <div class="box-header with-border">
      <div class="user-block">
        <img class="img-circle" src="{{asset('/admin/dist/img/user1-128x128.jpg')}}" alt="User Image">
        <span class="username"><a href="">{{$usuario->name}}</a></span>
        <span class="description">Fecha de registro - {{$usuario->created_at}}</span>
      </div>
      <!-- /.user-block -->
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <!-- post text -->
      <p>{{$usuario->biblio}}</p>
      <!-- Social sharing buttons -->
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
      <span class="pull-right text-muted"> 2 comments</span>
    </div>
    <!-- /.box-body -->
    
      @foreach($comentarios_usuario as $comentario)
          @if($usuario->id == $comentario->id_usuario_comentario)
                
              <div class="box-footer box-comments">
                <div class="box-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="{{asset('/admin/dist/img/user3-128x128.jpg')}}" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                                  {{$comentario->nombre}}
                                  <span class="text-muted pull-right">Fecha comentario: {{$comentario->created_at}}</span>
                    </span>
                    <!-- /.username -->
                    {{$comentario->comentario}}
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.box-comment -->
                <div class="box-comment">
                  <!-- User image -->
                  <!-- /.comment-text -->
                </div>
                <!-- /.box-comment -->
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
            @endif
        @endforeach

      
      <form action="/userios/{{$usuario->id}}/info-coment" method="post">
        @csrf
        <img class="img-responsive img-circle img-sm" src="{{asset('/admin/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
        <!-- .img-push is used to add margin to elements next to floating images -->
        <div class="img-push">
          <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
        </div>
      </form>
      
    </div>
    <!-- /.box-footer -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col --
@endsection