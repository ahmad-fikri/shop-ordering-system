<!DOCTYPE html>
<html>
    <head>
        <title>KopiBean</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="css/roboto.min.css" rel="stylesheet">
        <link href="css/material.min.css" rel="stylesheet">
        <link href="css/ripples.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet" type="text/css">

    </head>
    <body>


    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
        	
        	<form class="form-horizontal" method="post">
			  
			  @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
              @endforeach

			  {!! csrf_field() !!}


			  <fieldset>
			    <legend>Login</legend>

			    

			 	<div class="form-group">
			      <label for="inputPassword" class="col-md-2 control-label">E-mail</label>

			      <div class="col-md-10">
			        <input type="email" class="form-control" id="inputPassword" placeholder="Email" name="email" value="{{ old('email') }}">			        
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="inputPassword" class="col-md-2 control-label">Password</label>

			      <div class="col-md-10">
			        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">			        
			      </div>
			    </div>
			    <div class="form-group" style="margin-top: 0;"> <!-- inline style is just to demo custom css to put checkbox below input above -->
			      <div class="col-md-offset-2 col-md-10">
			        <div class="checkbox">
			          <label>
			            <input type="checkbox"> Remember
			          </label>
			        </div>
			      </div>
			    </div>
			    
			    <div class="form-group">
			      <div class="col-md-10 col-md-offset-2">
			        <button type="button" class="btn btn-default"><a href="staff/add">Register</a></button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>

        </div>
    </div>


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>

    </body>
</html>