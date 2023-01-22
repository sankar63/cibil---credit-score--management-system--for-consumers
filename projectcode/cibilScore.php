<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Bank Loan Score</title>
    <link
      rel="stylesheet"
      href="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../css/bank.css" />
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://source.unsplash.com/random" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"
    />
    <link rel="stylesheet" href="../css/LoanHome.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 me-1 w-25 d-flex" href="./index.php">
          <span class="h2 ps-1 pt-3">CIBIL</span>
          <span class="ps-1 mt-4 pt-2 h6 text-muted">SCORE</span>
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
              <a
                class="nav-link"
                aria-current="page"
                href="./Loan-details.php"
              >
                <i class="bi bi-chevron-left"></i>BACK
              </a>
            </li>
            <li class="nav-item p-0">
              <a class="nav-link active" aria-current="page" href="./cibilScore.php"
                >CIBIL SCORE
              </a>
            </li>
            <a class="nav-link login" href="../logins/logout.php"
              ><i class="bi bi-person"></i>Logout</a
            >
          </ul>
        </div>
      </div>
    </nav>
    <div class="background">
      <div class="container">
        <div class="row mt-4">
          <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-5 text-center">
            <div data-aos="fade-up" data-aos-duration="2500">
              <h2>Banks Check Your CIBIL Score</h2>
              <h2>Before Approving Your Loan*</h2>
              <button class="score mt-3">
                <a href="#"></a>GET FREE CIBIL SCORE & REPORT
              </button>
              <p class="mt-3">
                Already have a CIBIL account? <a href="#">Log In</a>
              </p>
              <p>Don't worry. Checking your own credit score won't lower it.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="img">
              <div data-aos="flip-right" data-aos-duration="2500">
                <img
                  src="../assets1/cibil-score-bg.png"
                  alt=""
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
            <div data-aos="fade-up" data-aos-duration="3000">
              <div id="myChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div data-aos="zoom-in" data-aos-duration="1000">
        <h2 class="text-center mt-2 mb-4 display-5">
          Learn. Plan. Protect. All in one <place class="h6">Here’s how.</place>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 col-sm-12">
          <div data-aos="fade-down-right" data-aos-duration="1000">
            <div class="content my-5">
              <h4 class="px-3 pt-4">
                24x7 credit monitoring with CIBIL alerts
              </h4>
              <h6 class="px-3 pt-2">
                Safeguard against identity theft with email & SMS notifications.
              </h6>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 col-sm-12">
          <div data-aos="fade-down-left" data-aos-duration="1000">
            <div class="content my-5">
              <h4 class="px-3 pt-4">
                Unlimited access to your CIBIL dashboard
              </h4>
              <h6 class="px-3 pt-2">
                Get regular updates to your CIBIL Score & Report.
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 col-sm-12 mt-3">
          <div data-aos="fade-up-right" data-aos-duration="1000">
            <div class="content my-4">
              <h4 class="px-3 pt-4">
                Make the right credit decisions with Score Simulator
              </h4>
              <h6 class="px-3 pt-2">
                Find out how your credit actions can impact your CIBIL Score.
              </h6>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 col-sm-12 mt-3">
          <div data-aos="fade-up-left" data-aos-duration="1000">
            <div class="content my-4">
              <h4 class="px-3 pt-4">Get personalized loan offers</h4>
              <h6 class="px-3 pt-2">
                Tailored loan offers based on your latest CIBIL Score.
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center my-5">
        <div data-aos="zoom-in-up" data-aos-duration="1000">
          <h5 class="my-5 display-6">
            Everything you need to stay loan-ready, always.
          </h5>
        </div>
      </div>
    </div>
    <script src="../css/bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      window.feed = function (callback) {
        var tick = {};
        tick.plot0 = Math.ceil(350 + Math.random() * 500);
        callback(JSON.stringify(tick));
      };

      var myConfig = {
        type: "gauge",
        globals: {
          fontSize: 25,
        },
        plotarea: {
          marginTop: 80,
        },
        plot: {
          size: "100%",
          valueBox: {
            placement: "center",
            text: "%v", //default
            fontSize: 35,
            rules: [
              {
                rule: "%v >= 700",
                text: "%v<br>EXCELLENT",
              },
              {
                rule: "%v < 700 && %v > 640",
                text: "%v<br>Good",
              },
              {
                rule: "%v < 640 && %v > 580",
                text: "%v<br>Fair",
              },
              {
                rule: "%v <  580",
                text: "%v<br>Bad",
              },
            ],
          },
        },
        tooltip: {
          borderRadius: 5,
        },
        scaleR: {
          aperture: 180,
          minValue: 300,
          maxValue: 850,
          step: 50,
          center: {
            visible: false,
          },
          tick: {
            visible: false,
          },
          item: {
            offsetR: 0,
            rules: [
              {
                rule: "%i == 9",
                offsetX: 15,
              },
            ],
          },
          labels: [
            "300",
            "",
            "",
            "",
            "",
            "",
            "580",
            "640",
            "700",
            "750",
            "",
            "850",
          ],
          ring: {
            size: 50,
            rules: [
              {
                rule: "%v <= 580",
                backgroundColor: "#E53935",
              },
              {
                rule: "%v > 580 && %v < 640",
                backgroundColor: "#EF5350",
              },
              {
                rule: "%v >= 640 && %v < 700",
                backgroundColor: "#FFA726",
              },
              {
                rule: "%v >= 700",
                backgroundColor: "#29B6F6",
              },
            ],
          },
        },
        refresh: {
          type: "feed",
          transport: "js",
          url: "feed()",
          interval: 1500,
          resetTimeout: 1000,
        },
        series: [
          {
            values: [755], // starting value
            backgroundColor: "black",
            indicator: [10, 10, 10, 10, 0.75],
            animation: {
              effect: 2,
              method: 1,
              sequence: 4,
              speed: 900,
            },
          },
        ],
      };

      zingchart.render({
        id: "myChart",
        data: myConfig,
        height: "500",
        width: "100%",
      });
    </script>
  </body>
</html>
