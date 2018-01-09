<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
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

    </head>
  
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/">Kopi<b>BEAN</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Register first guys</p>
        <form method="post">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Name" name="name">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype Password" name="password_confirmation">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="IC" name="ic">
            <span class="fa fa-check form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Phone" name="tel">
            <span class="fa fa-phone form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <textarea class="form-control" rows="3" placeholder="Address1" name="address1"></textarea>
          </div>
          <div class="form-group has-feedback">
            <textarea class="form-control" rows="3" placeholder="Address2" name="address2"></textarea>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Postcode" name="postcode">
            <span class="fa fa-map-signs form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="City" name="city">
            <span class="fa fa-map-pin form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="State" name="state">
            <span class="fa fa-map-marker form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Country" name="country">
            <span class="fa fa-map form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Salary" name="salary">
            <span class="fa fa-money form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>
        <a href="/" class="text-center">Have registered? Login Heres</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>