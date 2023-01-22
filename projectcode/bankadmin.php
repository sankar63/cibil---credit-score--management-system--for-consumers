<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Document</title>
  <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="LoanHome.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" />
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <style>
    a {
      text-decoration: none !important;
      color: black !important;
    }

    .scroll {
      width: 1100px !important;
      height: 500px !important;
      overflow-y: scroll !important;

    }

    .scroll::-webkit-scrollbar {
      display: none;
    }

    .login {
      border: 2px solid cornflowerblue;
      font-weight: 500;
      border-radius: 7px;
      text-align: center;
      padding: 5px 10px !important;
      width: 100%;
    }

    .login:hover {
      color: cornflowerblue;
    }

    .navbar {
      height: 100px !important;
      border-bottom: 4px solid rgb(255, 221, 0);
    }
  </style>
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 me-1 w-25 d-flex " href="./index.html"><img src="cibil-logo.png" alt="logo.svg"
          width="20%" />
        <span class=" h3 ps-2 pt-3 " style='font-weight:bold;'>CIBIL</span>
        <span class=" ps-1 pt-4 h5 text-muted" style='font-weight:bold;'>SCORE</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ul">
          <a class="nav-link login" href="../logins/logout.php"><i class="bi bi-person"></i>Logout</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- login page -->

  <div id="wrapper" class="dashboard ">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion  " id="accordionSidebar">
      <hr class="sidebar-divider" />
      <div class="im text-center">
        <!-- Nav Item - Dashboard --><img class="rounded-circle mt-5" width="80px" class="img-fluid"
          src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" />
      </div>
      <li class="nav-item active mt-4 ms-3">
        <a class="nav-link" href="adminprofile.html">
          <i class="fas fa-fw fa-tachometer-alt" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">Admin Profile</span></a>
      </li>

      <!-- Divider -->

      <!-- Nav Item - Charts -->
      <li class="nav-item ms-3">
        <a class="nav-link " href="./databaseview.php">
          <i class="fas fa-fw fa-chart-area" style="color:rgb(255, 255, 255);font-size:16px;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">User Details view</span></a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="./userview.php">
          <i class="fas fa-fw fa-chart-area" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">view login</span></a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="./bankadmin.php">
          <i class="fas fa-fw fa-chart-area" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">Bank details</span></a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">BANK LOGIN</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bank login Components:</h6>
            <a class="collapse-item" href="bankpro.php">BANK 1</a>
            <a class="collapse-item" href="bankpro2.php">BANK 2</a>
            <a class="collapse-item" href="bankpro3.php">BANK 3</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item ms-3">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-table" style="color:rgb(255, 255, 255);font-size:16px; font-weight:bold;"></i>
          <span style="color:rgb(222, 220, 220);font-size:16px; font-weight:bold;">Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 me-2" id="sidebarToggle"></button>
      </div>

      <!-- Sidebar Message -->
    </ul>

    <div class="container-fluid">
      <div class="row">
        <div class="col scroll">
          <?php


          include 'database.php';
          $select = mysqli_query($connect, "select * from loanbk");
          echo '<table border="1" cellpadding="0" class="table table-striped"><tr>
<th>id</th>
<th>pan_no</th>
<th>loan_id</th>
<th>loan_type</th>
<th>amount</th>
<th>interest</th>
<th>duemonth</th>
<th>date_time</th>
<th>Remove</th>


';

          while ($row = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
            echo "<tr>
     <td>" . $row['id'] . "</td>
   
    <td>" . $row['pan_no'] . "</td>
    <td>" . $row['loan_id'] . "</td>    
    <td>" . $row['loan_type'] . "</td>
    <td>" . $row['amount'] . "</td>
    <td>" . $row['interest'] . "</td>
    <td>" . $row['duemonth'] . "</td>
    <td>" . $row['date_time'] . "</td>

   
 <td 
><button class='btn btn-danger ' onclick='fun()'><a href='bankadmin.php? id=" . $row['id'] . "' >Delete</a></button>
    
</td>
";
          }
          echo '</tr>';
          echo '</table>';
          ?>
          <?php
          if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $delete = mysqli_query($connect, "DELETE FROM `loanbk` WHERE `id` = '$id'");
            echo '<script>window.location.href="bankadmin.php";</script>;'; 
          }



          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script>
    function fun() {
      // alert("You Want to Delete an Data");
      var result = confirm('you want to Delete');
      if (result == false) {
        event.preventDefault();
      }

    }
  </script>
</body>

</html>