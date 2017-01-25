<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desarrollo Social</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-home"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INICIO</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Usuario</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
                <p><center>Usuario</center>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header"><B>DEPARTAMENTOS</B></li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="#"><i class="fa fa-link"></i> <span>Salud</span></a></li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Social</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Economia Informal</span>
        <li><a href="#"><i class="fa fa-link"></i> <span>Cementerio</span>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Desarrollo Social
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Social</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="well">
            <table class="table">
              <thead><p id="parreg"><b>Búsqueda</b></p></thead>
              <tbody>
                <tr>
                  <td>
                    <div id="custom-search-input">
                              <div class="input-group">
                                  <input type="text" class="form-control input-lg" placeholder="Buscar" />
                                  <span class="input-group-btn">
                                      <button class="btn btn-info btn-lg" type="button">
                                          <i class="glyphicon glyphicon-search"></i>
                                      </button>
                                  </span>
                              </div>
                          </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="table table hover">
              <tr>
                <td><?php
                
                $datos = $personas -> index();
                echo '----------------';
                echo $datos;
                echo '----------------';
                 while($row = mysqli_fetch_array($datos)){ echo 'palomota';?></td>
              </tr>
              <?php } ?>
              <tr><td></td></tr>
                 
            </table>
          </div>
      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Departamento de Desarrollo Social
    </div>
    <!-- Default to the left -->
    <strong>ALCALDIA DEL MUNICPIO SUCRE</strong>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
