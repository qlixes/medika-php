<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css">
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
            <a class="nav-link" href="">RSUD Jakarta</a>
          </li>

          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rawat Jalan
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="pendaftaran.php">Pendaftaran</a>
              <a class="dropdown-item active" href="visit.php">Rawat Jalan</a>
              <a class="dropdown-item" href="#">Rawat Inap</a>
              <a class="dropdown-item" href="#">Emergency</a>
              <a class="dropdown-item" href="#">Lab</a>

              <a class="dropdown-item" href="#">Radiology</a>
              <a class="dropdown-item" href="#">Pharmacy</a>
              <a class="dropdown-item" href="#">Billing</a>
              <a class="dropdown-item" href="#">Accounting</a>
              <a class="dropdown-item" href="#">Human Resource</a>
              <a class="dropdown-item" href="#">ICU</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a class="nav-link" href="register.php">New User</a>
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
      <li class="active"><a href="visit.php">Dashboard</a></li>
      <li><a href="billing.php">Billing</a></li>
      <li><a href="archived.php">Archived</a></li>
      <li><a href="all_patients.php">All Patients</a></li>
      <li><a href="statistic.php">Statistic</a></li>
    </ul>
    <h4 class="sub-title"><div class="container-fluid">
      Patient Visit - Rawat Jalan
    </div></h4>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <table id="table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <td>#</td>
                <td>ID</td>
                <td>Patient RMN</td>
                <td>Patient</td>
                <td>Poly</td>
                <td>Doctor RMN</td>
                <td>Doctor</td>
                <td>Checked In</td>
                <td>Checked Out</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2013</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/08/2017 07:42</td>
                <td>-</td>
              </tr>
              <tr>
                <td>
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Visit Note</a>
                    <a class="dropdown-item" href="">Open Visit PDF</a>
                    <a class="dropdown-item" href="">Download Visit PDF</a>
                    <a class="dropdown-item" href="#">Print Visit PDF</a>
                    <a class="dropdown-item" href="#">Change Employee</a>
                  </div>
                </td>
                <td>2012</td>
                <td>1002162</td>
                <td>Abdul Nurhalim</td>
                <td>Rawat Inap / Inpatient</td>
                <td>1000142</td>
                <td>Marlina Aulia Ramadhan</td>
                <td>18/07/2017 07:42</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable();
    } );
    </script>
  </body>
</html>
