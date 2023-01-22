<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="./login.css">
    <style>
      body{
         overflow: hidden;
      }
    </style>
</head>
<body class="Signin" style="background-image: url(./img/signup-bg.webp)!important; background-position:center !important; background-repeat: no-repeat !important; background-size: cover !important; height: 100vh;" >
  <div class="login-page">
    <div class="form"  style="height: 410px; background-color:transparent; margin: 0px 6px; width: 80%;">
      <form class="login-form" method="post" action="register.php" >

        <h2 class="log" style="color:rgba(255, 255, 255, 0.896) ; margin-top:7px;  font-size: 2.6rem;"> SIGN UP</h2>
            <input type="text" placeholder="User Name" name="user" required style="margin:10px 0 0 0 ; background-color:rgba(240, 248, 255, 0.883); font-size: 1rem; border-radius: 5px;"/>

            <input type="email" placeholder="Email" name="email" required style="margin:30px 0 0 0 ;background-color:rgba(240, 248, 255, 0.883); font-size: 1rem;   border-radius: 5px;"/>
            
            <input type="password" placeholder="Password" name="pass" style="margin:30px 0 0 0 ;background-color:rgba(240, 248, 255, 0.883); font-size: 1rem; border-radius: 5px;"/>

            <input type="submit" name="btn" value="Sign Up" id="cls" style="margin:30px 0 5px 0 ; font-size: 1.2rem; background-color: rgba(0, 111, 202, 0.709); color:#fff;">
            <p class="message"  style="font-size:1rem ; color:rgba(255, 255, 255, 0.826);">Not registered? <a href="login.php" style="color:rgb(0, 212, 21) ; padding-left:5px ;">Already registered?</a></p>
          </form>
    </div>
  </div>
         <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
         });
        </script>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
   display($_POST['user'],$_POST['email'],$_POST['pass']);
}
function display($u,$e,$p)
{
    // echo "hi";
   include 'database.php';
   $insert=mysqli_query($connect,"insert into login (username,email,password) value ('$u','$e','$p')");
   if($insert)
   {
      echo '<script> window.location.href="login.php";
      alert("successfully register");
      </script>';
   }
   else
   {
      echo 'not login';
   }
}
?> 
