<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/style.css">
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
              Pendaftaran
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item active" href="pendaftaran.html">Pendaftaran</a>
              <a class="dropdown-item" href="visit.html">Rawat Jalan</a>
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
      <li><a href="pendaftaran.html">Dashboard</a></li>
      <li><a href="rujukan_pendaftaran.html">Rujukan</a></li>
      <li><a href="antrian.html">Antrian</a></li>
      <li class="active"><a href="statistic_pendaftaran.html">Statistic</a></li>
    </ul>
    <h4 class="sub-title"><div class="container-fluid">
      Statistic - Pendaftaran
    </div></h4><br>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="card card-default card-dashboard">
            <div align="center" class="card-block">
              <h3 class="card-title">6</h3>
              <p class="card-text">Patients Today</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card card-default card-dashboard">
            <div align="center" class="card-block">
              <h3 class="card-title">6</h3>
              <p class="card-text">Visit Today</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card card-default card-dashboard">
            <div align="center" class="card-block">
              <h3 class="card-title">36</h3>
              <p class="card-text">Patients Total</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card card-default card-dashboard">
            <div align="center" class="card-block">
              <h3 class="card-title">36</h3>
              <p class="card-text">Visit Total</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div id="container" style="width:100%; height:400px;"></div>
    </div>
    <br>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="list-group">
            <li class="list-group-item">Total Invoice <span class="float-right">Rp.500.000.000</span></li>
            <li class="list-group-item">Total Income <span class="float-right">Rp.500.000.000</span></li>
            <li class="list-group-item">Total Balance Due <span class="float-right">Rp.500.000.000</span></li>
            <li class="list-group-item">Doctor's Fee <span class="float-right">Rp.500.000.000</span></li>
          </ul>
        </div>
      </div>
    </div>
    <br>

    <div class="container">
      <div id="container2" style="width:100%; height:400px;"></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable();
    } );

    $(function () {
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Fruit Consumption'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
});

var chart1; // globally available
$(function() {
       chart1 = Highcharts.stockChart('container', {
         rangeSelector: {
            selected: 1
         },
         series: [{
            name: 'USD to EUR',
            data: usdtoeur // predefined JavaScript array
         }]
      });
   });

   var colors = Highcharts.getOptions().colors,
    categories = ['MSIE', 'Firefox', 'Chrome', 'Safari', 'Opera'],
    data = [{
        y: 56.33,
        color: colors[0],
        drilldown: {
            name: 'MSIE versions',
            categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0',
                'MSIE 10.0', 'MSIE 11.0'],
            data: [1.06, 0.5, 17.2, 8.11, 5.33, 24.13],
            color: colors[0]
        }
    }, {
        y: 10.38,
        color: colors[1],
        drilldown: {
            name: 'Firefox versions',
            categories: ['Firefox v31', 'Firefox v32', 'Firefox v33',
                'Firefox v35', 'Firefox v36', 'Firefox v37', 'Firefox v38'],
            data: [0.33, 0.15, 0.22, 1.27, 2.76, 2.32, 2.31, 1.02],
            color: colors[1]
        }
    }, {
        y: 24.03,
        color: colors[2],
        drilldown: {
            name: 'Chrome versions',
            categories: ['Chrome v30.0', 'Chrome v31.0', 'Chrome v32.0',
                'Chrome v33.0', 'Chrome v34.0',
                'Chrome v35.0', 'Chrome v36.0', 'Chrome v37.0', 'Chrome v38.0',
                'Chrome v39.0', 'Chrome v40.0', 'Chrome v41.0', 'Chrome v42.0',
                'Chrome v43.0'],
            data: [0.14, 1.24, 0.55, 0.19, 0.14, 0.85, 2.53, 0.38, 0.6, 2.96,
                5, 4.32, 3.68, 1.45],
            color: colors[2]
        }
    }, {
        y: 4.77,
        color: colors[3],
        drilldown: {
            name: 'Safari versions',
            categories: ['Safari v5.0', 'Safari v5.1', 'Safari v6.1',
                'Safari v6.2', 'Safari v7.0', 'Safari v7.1', 'Safari v8.0'],
            data: [0.3, 0.42, 0.29, 0.17, 0.26, 0.77, 2.56],
            color: colors[3]
        }
    }, {
        y: 0.91,
        color: colors[4],
        drilldown: {
            name: 'Opera versions',
            categories: ['Opera v12.x', 'Opera v27', 'Opera v28', 'Opera v29'],
            data: [0.34, 0.17, 0.24, 0.16],
            color: colors[4]
        }
    }, {
        y: 0.2,
        color: colors[5],
        drilldown: {
            name: 'Proprietary or Undetectable',
            categories: [],
            data: [],
            color: colors[5]
        }
    }],
    browserData = [],
    versionsData = [],
    i,
    j,
    dataLen = data.length,
    drillDataLen,
    brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

    // add browser data
    browserData.push({
        name: categories[i],
        y: data[i].y,
        color: data[i].color
    });

    // add version data
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: Highcharts.Color(data[i].color).brighten(brightness).get()
        });
    }
}

// Create the chart
Highcharts.chart('container2', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Browser market share, January, 2015 to May, 2015'
    },
    subtitle: {
        text: 'Source: <a href="http://netmarketshare.com/">netmarketshare.com</a>'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }
    },
    plotOptions: {
        pie: {
            shadow: false,
            center: ['50%', '50%']
        }
    },
    tooltip: {
        valueSuffix: '%'
    },
    series: [{
        name: 'Browsers',
        data: browserData,
        size: '60%',
        dataLabels: {
            formatter: function () {
                return this.y > 5 ? this.point.name : null;
            },
            color: '#ffffff',
            distance: -30
        }
    }, {
        name: 'Versions',
        data: versionsData,
        size: '80%',
        innerSize: '60%',
        dataLabels: {
            formatter: function () {
                // display only if larger than 1
                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
                    this.y + '%' : null;
            }
        },
        id: 'versions'
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 400
            },
            chartOptions: {
                series: [{
                    id: 'versions',
                    dataLabels: {
                        enabled: false
                    }
                }]
            }
        }]
    }
});
    </script>
  </body>
</html>
