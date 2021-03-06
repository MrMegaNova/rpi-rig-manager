<?php
 if (isset($_POST['Rig']))
{	
	$rig = $_POST['Rig'];
	$args = explode(" ", $rig);
	shell_exec("sudo ./gpio-bash-control.sh '".$args[0]."' '".$args[1]."'");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap/favicon.ico">

    <title>RPI rigs manager</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Rig manager</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Support</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Rig manager</h1>
      <p class="lead">Manage your rigs with this easy interface.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Rig00</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rig00 <small class="text-success">Status</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Status:<div class="text-success">UP</div></li>
              <li>Uptime</li>
              <li>Last boot</li>
            </ul>
            <form method="post">
            <button type="submit" name="Rig" value="rig00 start-stop" class="btn btn-sm btn-block btn-outline-primary">Start/Stop</button>
            <button type="submit" name="Rig" value="rig00 force" class="btn btn-sm btn-block btn-outline-primary">Force stop</button>
          </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Rig01</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rig01 <small class="text-danger">Status</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Status:<div class="text-danger">DOWN</div></li>
              <li>Uptime</li>
              <li>Last boot</li>
            </ul>
             <form method="post">
            <button type="submit" name="Rig" value="rig01 start-stop" class="btn btn-sm btn-block btn-outline-primary">Start/Stop</button>
            <button type="submit" name="Rig" value="rig01 force" class="btn btn-sm btn-block btn-outline-primary">Force stop</button>
          </form>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Rig02</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rig02 <small class="text-success">Status</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Status:<div class="text-success">UP</div></li>
              <li>Uptime</li>
              <li>Last boot</li>
            </ul>
             <form method="post">
            <button type="submit" name="Rig" value="rig02 start-stop" class="btn btn-sm btn-block btn-outline-primary">Start/Stop</button>
            <button type="submit" name="Rig" value="rig02 force" class="btn btn-sm btn-block btn-outline-primary">Force stop</button>
          </form>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
