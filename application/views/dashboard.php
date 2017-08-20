<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Medika</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="register.html">New User</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {Username}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Edit Profile</a>
              <span class="dropdown-item">{Email}</span>
              <span class="dropdown-item">{Name}</span>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Units
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">My Units</a>
              <a class="dropdown-item" href="#">New Unit</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Settings
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Logout</a>
              <a class="dropdown-item" href="#">Medika Pro</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <ul class="other-menu">
      <li class="active"><a href="#">My Unit</a></li>
      <li><a href="#">Diagnose</a></li>
      <li><a href="#">Procedures</a></li>
      <li><a href="#">Treatments</a></li>
      <li><a href="#">Meds</a></li>
      <li><a href="#">MS</a></li>
      <li><a href="#">LS</a></li>
      <li><a href="#">OS</a></li>
      <li><a href="#">Allergies</a></li>
    </ul>
    <h4 class="sub-title"><div class="container-fluid">
      My Unit <a href="#" class="btn btn-primary btn-sm float-right">Add Unit</a>
    </div></h4>
    <br>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <ul class="list-group group-instance">
          <a href="detail_instansi.html" class="list-group-item">RSUD Tangerang <span>hospital</span></a>
          <a href="detail_instansi.html" class="list-group-item">RSUD Sentul <span>hospital</span></a>
          <a href="detail_instansi.html" class="list-group-item">RSUD Cibubur <span>hospital</span></a>

        </ul>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
