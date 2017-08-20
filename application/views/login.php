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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Medika</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.html">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Create Account</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-5">
          <form class="space-mid" action="<? echo base_url("dashboard"); ?>" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="" value="" placeholder="Enter Email or RM Number">
            </div>
            <div class="form-group">
              <label>Pin</label>
              <input type="password" class="form-control" name="" value="" placeholder="Enter Pin">
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Remember Me
              </label>
            </div>
            <input type="submit" class="btn btn-success form-control" name="" value="Login">
          </form>
            <a href="" data-toggle="modal" data-target="#modal-pin">Forgot your pin?</a><br>
              <div id="modal-pin" class="modal">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Forgot your Pin?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="" method="post">
                      <div class="modal-body">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="" value="" placeholder="Enter your email address">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success">Send Reset Pin</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            <a href="" data-toggle="modal" data-target="#modal-confirmation-instruction">Didn't receive confirmation instructions?</a><br>
            <div id="modal-confirmation-instruction" class="modal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Resend confirmation instructions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="" value="" placeholder="Enter your email address">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Resend confirmation instructions</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <a href="" data-toggle="modal" data-target="#modal-unlock-instruction">Didn't receive unlock instructions?</a><br>
            <div id="modal-unlock-instruction" class="modal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Resend unlock instructions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="" value="" placeholder="Enter your email address">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Resend unlock instructions</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
