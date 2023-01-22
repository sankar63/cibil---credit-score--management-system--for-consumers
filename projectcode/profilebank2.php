<?php
session_start();
?>
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
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">2+</span>
                        </a>

                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center


                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-black-500">status</div>
                                    <span class="font-weight-bold">Your Loan is On Progress</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-black"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-black-500">Current Status</div>
                                    <span class="font-weight-bold">
                                        <?php
                                        include 'database.php';
                                        if (isset($_POST['bttn'])) {
                                            $result = mysqli_query($connect, "select * from loanbk2");
                                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                if (($row['status'] == 'Approved') and ($row['username'] == $_SESSION['names1']) and ($row['username'] == $_SESSION['names1'])) {
                                                    echo 'Your Loan is Approved';

                                                } else if (($row['status'] == 'rejected') and ($row['username'] == $_SESSION['names1']) and ($row['username'] == $_SESSION['names1'])) {
                                                    echo 'Your Loan is rejected';
                                                } else if (($row['status'] == '') and ($row['username'] == $_SESSION['names1']) and ($row['username'] == $_SESSION['names1'])) {
                                                    echo 'Waiting for Approvel ';
                                                }

                                            }
                                        }
                                        ?>
                                    </span>


                                    <form action="" method="POST">
                                        <input type="submit" value="Check" name="bttn" class="btn btn-success ">
                                    </form>
                                </div>
                            </a>

                    </li>
                    <a class="nav-link login" href="../logins/logout.php"><i class="bi bi-person"></i>Logout</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- login page -->



    <div class="container mt-2 " style="color: black !important;">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-7 bg-primary">
                <div class="card p-3 py-4 bg-danger">
                    <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <div class="text-center">
                            <img src="./IMG_20221115_223523-modified.png" width="150" class="rounded-circle" />
                        </div>

                        <div class="text-center mt-2">
                            <span class="bg-secondary p-1 px-4 rounded text-white">LOAN DETAILS</span><br />
                            <?php

                            include 'database.php';
                            $result = mysqli_query($connect, "select * from loanbk2");
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                $_SESSION['idname'] = $row['id'];

                                // echo $_SESSION['idname'];
                                if (($_SESSION['pan1'] == $row['pan_no']) and ($_SESSION['names1'] == $row['username'])) { ?>

                            <h2 class="card-title mt1 text-capitalize">

                                <?php echo $row['username'];
                                    $_SESSION['id'] = $row['id']; ?>
                            </h2>


                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'pan_no: ' ?>
                                <?php echo $row['pan_no']; ?>
                            </h5>

                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'mobile_no: ' ?>
                                <?php echo $row['mobile_no']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'loan_id: ' ?>
                                <?php echo $row['loan_id']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'loan_type: ' ?>
                                <?php echo $row['loan_type']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'amount: ' ?>
                                <?php echo $row['amount']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'percent: ' ?>
                                <?php echo $row['penalty'], ' ', '%'; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'interest: ' ?>
                                <?php echo $row['interest']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'duemonth: ' ?>
                                <?php echo $row['due_month']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'monthly due: ' ?>
                                <?php echo $row['monthly']; ?>
                            </h5>
                            <h5 class="card-title mt1 text-capitalize">
                                <?php echo 'date_time : ' ?>
                                <?php echo $row['date_time']; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                                }
                            }
                            ?>
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