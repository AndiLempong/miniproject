<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <center>
    <div class="card" style="width: 10rem;"></div>
<div class="container h-100">
  <div class="row">
      <div class="col-12 col-md-offset-4">
          <div class="panel panel-default">
            <h1 style="text-align: center; color: gray">PAGE LOGIN</h1> 
            <hr>
 
              </div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                              <input class="form-control" id="inputEmail3" placeholder="Masukan Email" required="" type="email">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-9">
                              <input class="form-control" id="inputPassword3" placeholder="Masukan Password" required="" type="password">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-9">
                              <div class="checkbox">
                                  <label class="">
                                      <input class="" type="checkbox">Remember me</label>
                              </div>
                          </div>
                      </div>
                      <div class="form-group last">
                          <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="panel-footer">Not Registered? <a href="#" class="">Register here</a>
              </div>
          </div>
      </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </center>
  </body>
</html>