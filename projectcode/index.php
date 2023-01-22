<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bank.css" />
    <link rel="stylesheet" href="../css/LoanHome.css" />

    <!--CSS Online CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />

    <!--CSS Offline CDN -->
    <!-- <link
      rel="stylesheet"
      href="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css"
    /> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>Online Bank Loan Apply</title>
  </head>
  <body class="home-bg">
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 me-1 w-25 d-flex" href="./index.php"
          ><img src="../assets1/cibil-logo.png" alt="logo.svg" width="24%" />
          <span class="h2 ps-2 pt-2">CIBIL</span>
          <span class="ps-1 pt-4 h6 text-muted">SCORE</span>
        </a>
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
              <a class="nav-link active" aria-current="page" href="./index.php"
                >HOME
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Loan-details.php">LOAN DETAILS</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle dropdown-toggle2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                CREATE ACCOUNT
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item text-center"
                    href="../logins/login.php"
                    >LOGIN</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item text-center"
                    href="../logins/register.php"
                    >SIGNUP</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item text-center"
                    href="../logins/admin.php"
                    >ADMIN LOGIN</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div
      id="carouselExampleControls"
      class="carousel slide my-3"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../assets1/house-protection home-page.jpg"
            class="img-fluid"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="../assets1/medical loan carousel home-page.jpg"
            class="img-fluid"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="../assets1/education corousel home-paqge.jpg"
            class="img-fluid"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container-fluid banner-img">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div data-aos="fade-right" data-aos-duration="3000">
          <div class="my-5 mx-2 banner">
            <h2 class="display-6 pt-5 ps-5 banner-tittle">
              VIEW-COMPARE-APPLY FOR A LOAN
            </h2>
            <p class="banner-para pt-4 ps-5 pb-3">
              Get Personalized Loan and Credit Card Offers Based on your CIBIL
              Score and Report <span class="bold">IT’S FREE!!</span>
            </p>
            <a href="./Loan-details.php" class="start-btn py-3 px-4 ms-5">start now</a>
            <span class="d-flex">
              <p class="my-4 ms-5">Already a Member&#63;</p>
              <a href="../logins/login.php" class="my-4 mx-1 nav-link text-primary">Login</a>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 section">
          <div data-aos="fade-up" data-aos-duration="2000">
            <div class="section my-3">
              <h2 class="h4 lh-sm pb-4">
                CIBIL MarketPlace was created with one clear goal- to make your
                loan search simpler and faster.
              </h2>
              <div class="section-para">
                <p class="py-2 lh-base">
                  CIBIL MarketPlace is an online platform which provides
                  tailor-made loan and credit card offers based on your CIBIL
                  Score and Report. Here you get offers for Credit Card,
                  Personal Loan, Home Loan, Gold Loan and Loan against Property,
                  based on the lenders eligibility criteria.
                </p>
                <p class="py-2 lh-base">
                  At CIBIL MarketPlace you can also compare interest rates,
                  credit limits, annual fees and other features of an offer and
                  apply for your preferred loan or credit card with the
                  participating bank/financial institution, all at one place.
                </p>
                <p class="py-2 lh-base">
                  Your CIBIL Score plays a critical role in the loan approval
                  process. Lenders check your CIBIL Score before approving your
                  loan application. Higher your CIBIL Score, higher are the
                  chances of your loan application getting approved*.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-1 mt-3">
          <div data-aos="fade-up" data-aos-duration="2000">
            <div class="section bg-dark text-white p-5 rounded">
              <h4 class="h5">PRODUCT HIGHLIGHTS</h4>
              <div class="section-para2">
                <h5 class="heading1">
                  <img
                    src="../assets1/check-mark.png"
                    alt=""
                    style="width: 30px; margin-bottom: 5px"
                  />
                  Increased Likelihood of Loan Approval
                </h5>
                <p class="p1">
                  A higher CIBIL Score takes you one step closer to loan
                  disbursal
                </p>
              </div>
              <div class="section-para2">
                <h5 class="heading1">
                  <img
                    src="../assets1/check-mark.png"
                    alt=""
                    style="width: 30px; margin-bottom: 5px"
                  />Comparative Analysis of Rates
                </h5>
                <p class="p1">
                  Get a comparative analysis of multiple offers from different
                  lenders.
                </p>
              </div>
              <div class="section-para2">
                <h5 class="heading1">
                  <img
                    src="../assets1/check-mark.png"
                    alt=""
                    style="width: 30px; margin-bottom: 5px"
                  />Simpler Loan Approval Process
                </h5>
                <p class="p1">
                  24*7 access to the portal for available loan offers, all at
                  one place. This saves time and effort both for consumers and
                  lenders.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="cibil-score text-center my-4 py-5">
        <div
          data-aos="zoom-in"
          data-aos-easing="linear"
          data-aos-duration="2000"
        >
          <h5 class="mb-5 h4">
            It is absolutely free with your CIBIL Score and Report!!
          </h5>
          <a href="./cibilScore.php">GET A LOAN</a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    "></script>

    <!--CSS Online CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   
    <!--CSS Offline CDN -->
    <!-- <script src="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script> -->

    <script>
      AOS.init();
    </script>
  </body>
</html>
