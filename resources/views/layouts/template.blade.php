<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'U-Med')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b>MED</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Woerks</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('admin/dist/img/avatar1.png')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('admin/dist/img/avatar1.png')}}" class="img-circle" alt="User Image">

                <p>
                    {{Auth::user()->name}}
                  <small>Miembro desde: </small>
                </p>
              </li>
          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/perfil" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                    <a href="/logout" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/avatar1.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <div class="pull-left">
              <a href="/logout">
                <i class="fa fa-sign-in"></i> 
                Cerrar sesión
              </a><br>
          </div>
          <a href="#">
            <i class="fa fa-circle text-{{Auth::check() ? 'success' : 'danger'}}"></i> 
            {{Auth::check() ? ' Online' : ' Offline' }}
          </a>
        </div>
      </div>

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
          </span>
        </div>
      </form>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación</li>

        <!-- Navegación / paginas -->
        <li><a href="/dashboard"><i class="fa fa-tachometer"></i> <span>dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Proyectos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a data-toggle="modal" data-target="#modal-p"><i class="fa fa-circle-o"></i>Agregar Proyectos</a></li>
            <li><a href="{{route('proyecto.index')}}"><i class="fa fa-circle-o"></i> Ver Proyectos</a></li>
          </ul>
        </li>
        

        <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->  
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content container-fluid">

      @yield('content')

    </section>
  </div>
 
  <footer class="main-footer">
    <!-- To the right
    <div class="pull-right hidden-xs">
      Profe, pónganos 70 por favor.
    </div> -->
    <!-- Default to the left -->
    <strong>Integración de Tecnologías de la Información. 2018. <a href="#">Universidad Politécnica de Victoria</a>.</strong>
  </footer>

   <!-- Modals para agregar un proyecto -->
   <div class="modal fade" id="modal-p">
    <div class="modal-dialog">

        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar un proyecto</h3>
            </div>
         
            <form method="POST" action="/proyecto" class="form-horizontal">
                @csrf

                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
    
                        <div class="col-sm-10">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del proyecto">
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Estado</label>
  
                      <div class="col-sm-10">
                          <input type="text" name="estado" class="form-control" placeholder="Estado">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tipo de proyecto</label>
  
                      <div class="col-sm-10">
                          <input type="text" name="tipoProyecto" class="form-control" placeholder="Tipo">
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Presupuesto</label>
    
                        <div class="col-sm-10">
                            <input type="text" name="presupuesto"class="form-control" placeholder="$">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Decripción</label>
    
                        <div class="col-sm-10">
                            <textarea class="form-control" name="descripcion" placeholder="Ingrese una descripcion"></textarea>
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

<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

</body>
</html>