<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HCE Bank Loan Apply</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/LoanHome.css" />
  <link rel="stylesheet" href="../css/bank.css" />

  <link rel="stylesheet" href="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous" />
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
    #news-slider {
      margin-top: 80px;
    }

    .post-slide {
      background: #fff;
      margin: 20px 15px 20px;
      border-radius: 15px;
      padding-top: 1px;
      box-shadow: 0px 14px 22px -9px #bbcbd8;
    }

    .post-slide .post-img {
      position: relative;
      overflow: hidden;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .post-slide .post-img img {
      width: 100%;
      height: auto;
      transform: scale(1, 1);
      transition: transform 0.2s linear;
    }

    .post-slide:hover .post-img img {
      transform: scale(1.1, 1.1);
    }

    .post-slide .over-layer {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      background: linear-gradient(-45deg,
          rgba(188, 230, 243, 0.75) 0%,
          rgba(45, 112, 253, 0.6) 100%);
      transition: all 0.5s linear;
    }

    .post-slide:hover .over-layer {
      opacity: 1;
      text-decoration: none;
    }

    .post-slide .over-layer i {
      position: relative;
      top: 45%;
      text-align: center;
      display: block;
      color: #fff;
      font-size: 25px;
    }

    .post-slide .post-content {
      background: #fff;
      padding: 2px 20px 40px;
      border-radius: 15px;
    }

    .post-slide .post-title a {
      font-size: 15px;
      font-weight: bold;
      color: #333;
      display: inline-block;
      text-transform: uppercase;
      transition: all 0.3s ease 0s;
    }

    .post-slide .post-title a:hover {
      text-decoration: none;
      color: #3498db;
    }

    .post-slide .post-description {
      line-height: 24px;
      color: #808080;
      margin-bottom: 25px;
    }

    .post-slide .post-date {
      color: #a9a9a9;
      font-size: 14px;
    }

    .post-slide .post-date i {
      font-size: 20px;
      margin-right: 8px;
      color: #cfdace;
    }

    .post-slide .read-more {
      padding: 7px 20px;
      float: right;
      font-size: 12px;
      background: #2196f3;
      color: #ffffff;
      box-shadow: 0px 10px 20px -10px #1376c5;
      border-radius: 25px;
      text-transform: uppercase;
    }

    .post-slide .read-more:hover {
      background: #3498db;
      text-decoration: none;
      color: #fff;
    }

    .owl-controls .owl-buttons {
      text-align: center;
      margin-top: 20px;
    }

    .owl-controls .owl-buttons .owl-prev {
      background: #fff;
      position: absolute;
      top: -13%;
      left: 15px;
      padding: 0 18px 0 15px;
      border-radius: 50px;
      box-shadow: 3px 14px 25px -10px #92b4d0;
      transition: background 0.5s ease 0s;
    }

    .owl-controls .owl-buttons .owl-next {
      background: #fff;
      position: absolute;
      top: -13%;
      right: 15px;
      padding: 0 15px 0 18px;
      border-radius: 50px;
      box-shadow: -3px 14px 25px -10px #92b4d0;
      transition: background 0.5s ease 0s;
    }

    .owl-controls .owl-buttons .owl-prev:after,
    .owl-controls .owl-buttons .owl-next:after {
      content: "\f104";
      font-family: FontAwesome;
      color: #333;
      font-size: 30px;
    }

    .owl-controls .owl-buttons .owl-next:after {
      content: "\f105";
    }

    @media only screen and (max-width: 1280px) {
      .post-slide .post-content {
        padding: 0px 15px 25px 15px;
      }
    }
  </style>
</head>

<body style="background-color:#92b4d0 ;">
  <nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 me-1 w-25 d-flex " href="./index.html"><img src="../assets1/cibil-logo.png"
          alt="logo.svg" width="24%" />
        <span class=" h2 ps-2 pt-2 ">HCE</span>

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ul">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./Loan-details.php">
              <i class="bi bi-chevron-left"></i>BACK
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./cibilScore.php">
              CIBIL SCORE
            </a>
          </li>
          <a class="nav-link login" href="../logins/logout.php"><i class="bi bi-person"></i>Logout</a>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid bank-loan-bg-2 mb-5">
    <div class="container">
      <div class="row">
        <div id="news-slider" class="owl-carousel">
          <div data-aos="fade-up" data-aos-duration="1000">
            <div class="post-slide">
              <div class="post-img">
                <img src="../assets1/hce-home-ronded.jpg" alt="" style="height:270px ;" />
                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
              </div>
              <div class="post-content">
                <h5 class="post-title text-center pt-4 m-0 text-dark">House Loan</h5>
              </div>
            </div>
          </div>

          <div data-aos="fade-up" data-aos-duration="1500">
            <div class="post-slide">
              <div class="post-img">
                <img src="../assets1/hce-medical-page.png" alt="" style="height:270px ;" />
                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
              </div>
              <div class="post-content">
                <h5 class="post-title text-center pt-4 m-0 text-dark">Medical LOAN</h5>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="2000">
            <div class="post-slide">
              <div class="post-img">
                <img src="../assets1/education corousel home-paqge.jpg" alt="" style="height:270px ;" />
                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
              </div>
              <div class="post-content">
                <h5 class="post-title text-center pt-4 m-0 text-dark">EDUCATION LOAN</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row g-3">
        <div class="col-lg-12">
          <div data-aos="flip-left">
            <div class="home-loan-content-tittle">
              <h2>Get a quick loan </h2>
              <a href="#down" class="py-2 px-3 text-white apply-btn">Apply now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <div class="row justify-content-baseline">
      <div class="col-lg-3">
        <div data-aos="fade-up" data-aos-duration="1000">
          <div class="loan-container">
            <h5 class="loan-details">Features</h5>
            <ul class="loan-details-text">
              <li>Loan amount of ₹1 lakh - ₹1 crore</li>
              <li>Flexible repayment tenure - up to 84 months</li>
              <li>On-road funding up to 90% LTV</li>
              <li>Simplified documentation</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div data-aos="fade-up" data-aos-duration="1500">
          <div class="loan-container">
            <h5 class="loan-details">Rates & Charges</h5>
            <ul class="loan-details-text">
              <li>Floating interest rates starting from 9.40% p.a.*</li>
              <li>View the complete and updated list of charges</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div data-aos="fade-up" data-aos-duration="2000">
          <div class="loan-container">
            <h5 class="loan-details">Eligibility Criteria</h5>
            <ul class="loan-details-text">
              <li>
                Salaried / Self-employed professionals / Self-employed
                non-professionals and non-individual entities
              </li>
              <li>Minimum age at the time of application :</li>
              <ul class="loan-details-text">
                <li>View the complete and updated list of charges</li>
                <li>View the complete and updated list of charges</li>
              </ul>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div data-aos="fade-up" data-aos-duration="2500">
          <div class="loan-container">
            <h5 class="loan-details">Documents Required</h5>
            <ul class="loan-details-text">
              <li>Identity proof</li>
              <li>Address proof</li>
              <li>Pro forma invoice of the vehicle to be funded</li>
              <li>Income documents</li>
              <li>Statement of operative bank account</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div data-aos="zoom-in-up" data-aos-duration="2000" id="down">
    <div class="container  ">
      <div class="row">
        <div class="form-bg1 mt-5 ">
          <div class="col-12">
            <h2 class="text-dark display-6 mt-4 mb-0 ms-3">
              Take one step closer to your dream
            </h2>
            <p class="text-muted h6 mt-1 ms-4">
              Apply for a loan from Bandhan Bank today
            </p>
          </div>
          <div class="col-md-12">
            <form action="" method="post" class="form-text">
              <label for="Name" class="ms-3 mt-5 mb-1">Name</label>
              <label for="MobileNo" class="text px-3">Mobile No</label>
              <br />
              <input type="text" name="name" id="Name" class="ms-2 my-1 w-25" required />
              <input type="number" name="m" id="MobileNo" class="ps-2 ms-5 my-3 w-25" required />
          </div>
          <div class="col-md-12">
            <label for="PanNo" class="mt-3 ms-3">PAN No</label>
            <label for="LoanCategory" class=" text">Loan Category</label>

            <br />

            <input type="number" name="p" id="PanNo" class="ps-2 ms-2 my-2 w-25" class="email-input" required />
            <select class="ms-5 w-25" id="LoanCategory" name="opt">
              <optgroup required>
                <option value="Selected">---SELECTED---</option>
                <option value="Home loan">HOME LOAN</option>
                <option value="Medical loan">MEDiCAL LOAN</option>
                <option value="Education loan">EDUCATION LOAN</option>
              </optgroup>
            </select>

          </div>
          <div class="col-md-12">
            <label for="Dueamout" class="ms-3">Due Month</label>
            <label for="Dueamout" style="margin-left:70px ;">Due Interest</label>
            <label for="Amount" class="mt-4" style="margin-left:60px ;">Amount</label>
            <br />

            <select class="ms-2" style="width:13%;" id="Dueamout" name="month">
              <optgroup>
                <option value="Selected">---SELECTED---</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="12">12</option>
              </optgroup>
            </select>
            <select class=" ms-3 " style="width:13%;" id="Dueamout" name="due">
              <optgroup>
                <option value="Selected">---SELECTED---</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
              </optgroup>
            </select>
            <input type="number" name="amount" id="Amount" class="ps-2 ms-3 my-2" required />

            <input type="submit" value="Submit" class="form-btn" required name="btn" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#news-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        navigation: true,
        navigationText: ["", ""],
        pagination: true,
        autoPlay: true,
      });
    });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
<?php


if(isset($_POST['btn'])) {
  click1($_POST['name'], $_POST['p'], $_POST['m'], $_POST['amount'], $_POST['due'], $_POST['month']);
  $_SESSION['pan1'] = $_POST['p'];
  $_SESSION['names1'] = $_POST['name'];
}
function click1($n, $p1, $mn1, $a, $d, $m)
{
  include 'database.php';
  $loan_id = rand();
  $date = date("Y/m/d") . date("h:i:sa");
  $lt = $_POST['opt'];
  $mon = ($a * ($d / 100) * $m + $a);
  $mon1 = ($a * ($d / 100) * $m);
  $insert = mysqli_query($connect, "INSERT INTO loanbk2(username,pan_no,mobile_no,loan_id,loan_type,amount,penalty,interest,due_month,monthly,date_time) VALUES ('$n','$p1','$mn1','$loan_id','$lt','$a','$d','$mon','$mon1','$m','$date') ");
  if ($insert) {
    echo '<script> window.location.href="profilebank2.php";
      alert("successfully register");
      </script>';
  } else {
    echo 'not login';
  }
}
?>