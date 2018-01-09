<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/css/theme/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="/css/theme/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="/plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link href="/css/custom.css" rel="stylesheet">

        <script src="{{ URL::asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="/plugins/morris/morris.min.js"></script>

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
          <span class="logo-mini"><b>K</b>B</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">KOPIBEAN</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  @if (Auth::check())
                    <span class="hidden-xs">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>
                  @else
                    <span class="hidden-xs">Guest</span>
                  @endif
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                    @if( Auth::check())
                      <small>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</small>
                      <small>Registered since {{{ isset(Auth::user()->created_at) ? Auth::user()->created_at->format('m/d/Y') : Auth::user()->email }}}</small>
                    @else
                      <small>Name - Role</small>
                      <small>Registered since Nov. 2012</small>
                    @endif
                      
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="text-center">
                      @if (Auth::check())
                        <a href="/users/logout" class="btn btn-default btn-flat">Sign out</a>
                      @else
                        <a href="/" class="btn btn-default btn-flat">Login</a>
                        <a href="/users/register" class="btn btn-default btn-flat">Register</a>
                      @endif
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

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            
            @if(Auth::check())
              <p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
            @else
              <p>Guest</p>
            @endif
              <!-- Status -->
              @hasrole('Admin')
              <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
              @else
              <a href="#"><i class="fa fa-circle text-success"></i> Staff</a>
              @endhasrole
            </div>
          </div>

          

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Orders</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/order/new"><i class="fa fa-circle-o"></i> Add New Order</a></li>
                <li><a href="/order/index"><i class="fa fa-circle-o"></i> List All Order</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Customer</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/customer/add"><i class="fa fa-circle-o"></i> Add New Customer</a></li>
                <li><a href="/customers"><i class="fa fa-circle-o"></i> List All Customer</a></li>
              </ul>
            </li>

            @hasrole('Admin')
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>User</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="users/register"><i class="fa fa-circle-o"></i> Add New User</a></li>
                <li><a href="/users"><i class="fa fa-circle-o"></i> List All Users</a></li>
              </ul>
            </li>
            @else
            @endhasrole

            @hasrole('Admin')
            <li class="treeview">
                  <a href="#"><i class="fa fa-tags"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">

                    <li>
                      <a href="#"><i class="fa fa-coffee"></i> Coffee <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="/coffee/add"><i class="fa fa-circle-o"></i>Add Coffee</a></li>
                      </ul>
                    </li>
                    
                    <li>
                      <a href="#"><i class="fa fa-birthday-cake"></i> Pastry <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="/pastry/add"><i class="fa fa-circle-o"></i>Add Pastry</a></li>
                      </ul>
                    </li>

                  </ul>
            </li>
            @else
            @endhasrole


          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                  <h1>
                    @yield('title')
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">@yield('title')</li>
                  </ol>
            </section>

            <!-- Main content -->
            <section class="content">

              <!-- Your Page Content Here -->
              @yield('content')

            </section><!-- /.content -->
        </div>

        <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    
    <!-- Sparkline -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/theme/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/js/theme/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/js/theme/demo.js"></script>

  </body>
</html>


