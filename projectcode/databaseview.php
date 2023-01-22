<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <link
      rel="stylesheet"
      href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="LoanHome.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    />
    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <style>
        a{
    text-decoration: none !important;
    color: black !important;
}
    </style>
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 me-2 w-25" href="#"
          ><img src="./img/Chase_Bank-Logo.wine.png" alt="logo.svg" width="55%"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ul">
            <li class="nav-item p-0">
              <a class="nav-link" aria-current="page" href="index.html">HOME</a>
            </li>
            <li class="nav-item p-0">
              <a class="nav-link" aria-current="page" href="#">HOUSE LOAN </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MEDICAL LOAN</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">EDUCATION LOAN</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                CREATE ACCOUT
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item text-center" href="./login.php"
                    >LOGIN</a
                  >
                </li>
                <li>
                  <a class="dropdown-item text-center" href="./register.php"
                    >SIGNUP</a
                  >
                </li>
                <li>
                  <a class="dropdown-item text-center" href="./admin.php"
                    >ADMIN LOGIN</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- login page -->

    <div id="wrapper" class="dashboard">
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <hr class="sidebar-divider my-0" />
        <div class="im text-center">
          <!-- Nav Item - Dashboard --><img class="rounded-circle mt-5" width="80px" class="img-fluid"
            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" />
        </div>
        <li class="nav-item active">
          <a class="nav-link" href="adminprofile.html">
            <i class="fas fa-fw fa-tachometer-alt" style="color: black"></i>
            <span style="color: black">Admin Profile</span></a>
        </li>
      
        <!-- Divider -->
      
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="./databaseview.php">
            <i class="fas fa-fw fa-chart-area" style="color: black"></i>
            <span style="color: black">User Details view</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./userview.php">
            <i class="fas fa-fw fa-chart-area" style="color: black"></i>
            <span style="color: black">view login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./bankadmin.php">
            <i class="fas fa-fw fa-chart-area" style="color: black"></i>
            <span style="color: black">Bank details</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog" style="color: black"></i>
            <span style="color: black">BANK LOGIN</span>
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
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-table" style="color: black"></i>
            <span style="color: black">Logout</span></a>
        </li>
      
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />
      
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      
        <!-- Sidebar Message -->
      </ul>


      <div class="container">
        <div class="row">
            <div class="col">
                <?php


include 'database.php';
$select=mysqli_query($connect,"select * from creditlg");
echo'<table border="1" cellpadding="0" class="table table-striped"><tr>
<th>id</th>
<th>email</th>
<th>password</th>
<th>fname</th>
<th>lname</th>
<th>idnum</th>
<th>mobilenum</th>
<th>Remove</th>';

while($row=mysqli_fetch_array($select,MYSQLI_ASSOC))
{
    echo "<tr>
     <td>".$row['id']."</td>
    <td>".$row['email']."</td>
    <td>".$row['password']."</td>    
    <td>".$row['fname']."</td>
    <td>".$row['lname']."</td>
     <td>".$row['idnum']."</td>
    <td>".$row['mobilenum']."</td>
   
 <td 
><button class='btn btn-danger' onclick='fun()'><a href='databaseview.php? id=".$row['id']."' >Delete</a></button>
    </td>";
}
echo '</tr>';
echo '</table>';
?>
<?php
if(isset($_GET['id']))
{

    $id= $_GET['id'];
    $delete=mysqli_query($connect,"DELETE FROM `creditlg` WHERE `id` = '$id'");
    echo '<script>window.location.href="databaseview.php";</script>;';
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
        function fun()
        {
            alert("You Want to Delete an Data");
        }
    </script>
  </body>
</html>