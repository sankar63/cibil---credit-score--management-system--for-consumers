<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loan Details</title>

    <link rel="stylesheet" href="../css/bank.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!--CSS Online CDN -->
    <link
      rel="stylesheet"
      href=" https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
    />
    <!--CSS Offline CDN -->
    <link
      rel="stylesheet"
      href="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <style>
      body {
        background-color: #f1f6ff;
      }

      a {
        text-decoration: none;
      }

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
        background: linear-gradient(
          -45deg,
          rgba(188, 230, 243, 0.75) 0%,
          rgba(45, 112, 253, 0.6) 100%
        );
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

  <body>
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
              <a class="nav-link" aria-current="page" href="./index.php"
                >HOME
              </a>
            </li>
            <li class="nav-item p-0">
              <a
                class="nav-link active"
                aria-current="page"
                href="./Loan-details.php"
                >LOAN DETAILS
              </a>
            </li>
            <a class="nav-link login" href="../logins/logout.php"
              ><i class="bi bi-person"></i>Logout</a
            >
          </ul>
        </div>
      </div>
    </nav>
    <div class="bg-img">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div data-aos="fade-up" data-aos-duration="3000">
                <h5 class="font mt-4">
                  2022 World Cibilscore Union Conference
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div data-aos="fade-up" data-aos-duration="3000">
              <h1 class="text-center loan mt-5">Our Loan Products</h1>
              <h5 class="text-center mb-5">A loan for every unique need</h5>
              <div id="news-slider" class="owl-carousel">
                <div class="post-slide">
                  <div class="post-img">
                    <img
                      src="../assets1/handshake-close-up-executives.jpg"
                      alt=""
                    />
                    <a href="#" class="over-layer"
                      ><i class="fa fa-link"></i
                    ></a>
                  </div>
                  <div class="post-content">
                    <h3 class="post-title">
                      <a href="#choosebank">Personal loan</a>
                    </h3>
                    <p class="post-description">
                      One of the financial products that you can avail for
                      yourself is a personal loan. You can avail a personal loan
                      to meet your various financial requirements.
                    </p>
                  </div>
                </div>

                <div class="post-slide">
                  <div class="post-img">
                    <img
                      src="../assets1/studio-portrait-funny-excited-joyful-student-girl-with-graduation-certificate.jpg"
                      alt=""
                    />
                    <a href="#" class="over-layer"
                      ><i class="fa fa-link"></i
                    ></a>
                  </div>
                  <div class="post-content">
                    <h3 class="post-title">
                      <a href="#choosebank">EDUCATION LOAN</a>
                    </h3>
                    <p class="post-description">
                      The bank sanctions the education loan only after thorough
                      due diligence.The EMI of your loan consists of the
                      principal portion and the interest
                    </p>
                  </div>
                </div>

                <div class="post-slide">
                  <div class="post-img">
                    <img
                      src="../assets1/hands-agent-client-shaking-hands-after-signed-contract-buy-new-apartment.jpg"
                      alt=""
                    />
                    <a href="#" class="over-layer"
                      ><i class="fa fa-link"></i
                    ></a>
                  </div>
                  <div class="post-content" style="height: 229px">
                    <h3 class="post-title">
                      <a href="#choosebank">HOME LOAN</a>
                    </h3>
                    <p class="post-description">
                      Buying a house is a financial goal and to accomplish it, a
                      home loan can come to your aid. A loan provides financial
                      resource.
                    </p>
                  </div>
                </div>

                <div class="post-slide">
                  <div class="post-img">
                    <img src="../assets1/hce-medical-page.png" alt="" />
                    <a href="#" class="over-layer"
                      ><i class="fa fa-link"></i
                    ></a>
                  </div>
                  <div class="post-content" style="height: 235px">
                    <h3 class="post-title">
                      <a href="#choosebank">MEDICAL LOAN</a>
                    </h3>
                    <p class="post-description">
                      A medical loan is a type of personal loan that offers
                      financial coverage against expenses that you might have to
                      incur in the event of a medical emergency
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid bg-light my-5 px-5 py-5">
        <div class="row">
          <div data-aos="fade-up" data-aos-duration="3000">
            <div>
              <h3 class="doc text-center py-4">Documents & Eligibility</h3>
            </div>
          </div>
          <div class="offset-lg-2 col-lg-4 offset-md-2 col-md-4 col-sm-12 mt-3">
            <div data-aos="fade-up" data-aos-duration="3000">
              <div class="border-right-2 boder-sm-0">
                <img
                  class="p-1"
                  src="../assets1/photo-icon.svg"
                  alt=""
                  height="25px"
                />
                <span class="text-secondary">Photograph (Selfie)</span> <br />

                <img
                  class="p-1"
                  src="../assets1/hpme-icon.svg"
                  alt=""
                  height="25px"
                /><span class="text-secondary">Identity Proof (PAN)</span>
                <br />
                <img
                  class="p-1"
                  src="../assets1/Address-Proof.svg"
                  alt=""
                  height="25px  "
                />
                <span class="text-secondary"
                  >Address Proof (Aadhaar, Passport)</span
                >
                <br />
              </div>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-4 offset-md-1 col-md-5 col-sm-12 mt-3">
            <div data-aos="fade-up" data-aos-duration="3000">
              <div class="eligibil">
                <img
                  class="p-1"
                  src="../assets1/indian icon.svg"
                  alt=""
                  height="25px"
                /><span class="text-secondary">Indian Citizen</span> <br />
                <img
                  class="p-1"
                  src="../assets1/age-icon.svg"
                  alt=""
                  height="25px"
                /><span class="text-secondary"> Age Limit: 21- 45 years</span
                ><br />
                <img
                  class="p-1"
                  src="../assets1/photo-icon.svg"
                  alt=""
                  height="25px"
                /><span class="text-secondary">
                  Monthly Income: more than ₹10,000</span
                ><br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div
            class="col-12 d-flex justify-content-evenly my-3 py-4 mx-3"
            id="choosebank"
          >
            <div
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="1500"
            >
              <div class="card px-3 py-4 rouded  bg-warning">
                <p class="text-center h4 pt-3 text-white">CIBIL BANK</p>

                <a
                  href="./Apply-Form1.php"
                  class="btn  mt-3 border border-secondery text-white"
                  >Click Here</a
                >
              </div>
            </div>
            <div
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="1500"
            >
              <div class="card px-3 py-4 rouded bg-warning">
                <p class="text-center h4 pt-3  text-white">HCE BANK</p>

                <a
                  href="./Apply-Form2.php"
                  class="btn mt-3 border border-secondery  text-white"
                  >Click Here</a
                >
              </div>
            </div>
            <div
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="1500"
            >
              <div class="card px-3 py-4 rouded bg-warning">
                <p class="text-center h4 pt-3  text-white">HCL BANK</p>

                <a
                  href="./Apply-Form3.php"
                  class="btn mt-3 border border-secondery  text-white"
                  >Click Here</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <!--CSS Offline CDN -->
    <script src="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <!--CSS Online CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    "></script>
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
