<?php //require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </head>
  <body>
    <div class="container">
      <span class="brand-text">
        <span class="text-theme">AUTH</span>Gate
      </span>

      <div class="button-group">
        <div class="button-item">
          <button type="button" class="btn btn-primary">Register Devices</button>
        </div>

        <div class="dropdown button-item">
          Sort By:
          <button id="sort_by" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
            Last seen
          <span class="caret"></span></button>

          <ul class="dropdown-menu sort_by" role="menu">
            <li>Last seen</li>
            <li>Id</li>
            <li>Transactions</li>
          </ul>
        </div>

        <div class="dropdown button-item">
          Group By:
          <button id="group_by" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
            Status
          <span class="caret"></span></button>

          <ul class="dropdown-menu group_by" role="menu">
            <li>Status</li>
            <li>Location</li>
          </ul>
        </div>

        <div class="button-item" style="float:right">
          <a href="login/logout.php" role="button" class="btn btn-default">Logout</a>
        </div>
      </div>

      <div class="legend-group">
        <ul class="legend">
          <li>Status:</li>
          <li><span class="Active"></span> Active</li>
          <li><span class="Unconfigured"></span> Unconfigured</li>
          <li><span class="Notification"></span> Notification</li>
          <li><span class="Error"></span> Error</li>
        </ul>
      </div>

      <div class="table-responsive device-table">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>MAC Address</th>
              <th>Status</th>
              <th>Transactions</th>
              <th>Location</th>
              <th>LatLng</th>
              <th>Last Seen</th>
              <th>Last Report</th>
            </tr>
          </thead>
          <tbody class="tbody">

            <tr class="">
              <td>121</td>
              <td>F0:F5:F0:56:3E</td>
              <td>Active</td>
              <td>5</td>
              <td>Pretoria, Hatfield</td>
              <td>None</td>
              <td>2017/02/04</td>
              <td>Sold R11.00</td>
            </tr>

            <tr class="success">
              <td>186</td>
              <td>F0:F5:F0:42:64</td>
              <td>Not Configured</td>
              <td>N/A</td>
              <td>N/A</td>
              <td>N/A</td>
              <td>N/A</td>
              <td>N/A</td>
            </tr>

            <tr class="warning">
              <td>315</td>
              <td>F0:F5:F0:2A:9D</td>
              <td>Warning</td>
              <td>35</td>
              <td>Kempton, Birchleigh</td>
              <td>None</td>
              <td>2017/01/19</td>
              <td>Out of stock, item 2.</td>
            </tr>

            <tr class="danger">
              <td>259</td>
              <td>F0:F5:F0:1F:E5</td>
              <td>Non-responsive</td>
              <td>16</td>
              <td>Pretoria, Olymups</td>
              <td>None</td>
              <td>2016/12/26</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- /container -->
  </body>
</html>
