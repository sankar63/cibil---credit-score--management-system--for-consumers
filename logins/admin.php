<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Log In Page</title>
  <link rel="stylesheet" href="./login.css">
  <link rel="stylesheet" href="./bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css">
  <style>
    body {
      overflow-y: hidden;

    }

    label {
      font-size: 14px;
      font-weight: 300;
    }

    * {
      text-align: start;
    }

    .logout {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.813);
      text-decoration: none;
      float: right;
      margin: -30px -30px 0 0;
      transition: color 0.3s ease;
    }

    .logout:hover {
      color: rgb(255, 255, 255);
    }

    .login {
      margin: 20px 0 10px 0 !important;
      font-size: 1.2rem !important;
      background-color: rgba(0, 140, 255, 0.507) !important;
      text-align: center;
      transition: all 0.3s ease-in;
    }

    .login:hover {
      background-color: rgb(0, 140, 255) !important;
    }
  </style>
</head>

<body
  style="background-image: url(./img/login-bg.jpg) !important; background-position:center !important; background-repeat: no-repeat !important; background-size: cover !important; height: 100vh;">
  <div class="login-page">
    <div class="form" style="background-color:transparent; height:400px; margin-top:22px;">
      <form class="login-form" method="post" action="admin.php">

        <h2 class="log text-white mb-3 text-center ">ADMIN LOGIN</h2>

        <input type="text" placeholder="Username" name="user" required class="rounded mt-5 mb-4" style="background-color:rgba(255, 255, 255, 0.824);" />

        <input type="password" placeholder="password" name="pass" class="rounded mt-2 mb-4 " style="background-color:rgba(255, 255, 255,  0.824);" required />
        <input type="submit" name="btn" value="Login" id="cls" class="text-center mt-3 rounded" style="background-color:rgba(46, 110, 230, 0.801); color:white; font-size:1.2rem; padding:10px 0;">
      </form>
    </div>
  </div>
  <script>
    $('.message a').click(function () {
      $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
    });



  </script>
<script src="./bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/js/bootstrap.min.js "></script>
</body>

</html>
<?php



  //admin
  if (isset($_POST['btn'])) {
    user_login1($_POST['user'], $_POST['pass']);
  }
  function user_login1($u, $p)
  {
    //   echo 'hi';
    include 'database.php';
    $select = mysqli_query($connect, "select * from admin where username='$u' and password='$p'");
    $num = mysqli_num_rows($select);
    if ($num == 1) {
      echo 'login';
      echo '<script>window.location.href="../projectcode/bankadmin.php";alert("successfully login");</script>';

    } else {
      echo 'not login';
    }
  }
  ?>