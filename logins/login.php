<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <style>

body{
    overflow-y: hidden;
  }


    </style>
</head>
<body class="log" style="background-image: url(./img/loanbg.jpg) !important; background-position: bottom !important; background-repeat: no-repeat !important; background-size: cover !important; height: 100vh;" >
    <div class="login-page">
        <div class="form " style="height: 380px; background-color:transparent; margin: 10px 6px; width: 73%;">
          <form class="login-form " method="post" action="login.php" >
            <h2 class="log" style="color:rgba(255, 255, 255, 0.896) ; margin-top:10px;  font-size: 2.6rem;" > LOGIN</h2>

            <input type="email" placeholder="Enter Your Email" name="email" style="margin:10px 0 0 0 ; background-color:rgba(240, 248, 255, 0.883); font-size: 1rem; border-radius: 5px;"/>
            
            <input type="password" placeholder=" Enter Your Password" name="pass" style="margin:35px 0 0 0 ;background-color:rgba(240, 248, 255, 0.883); font-size: 1rem; padding-left: 8px;  border-radius: 5px;"/>
            <input type="submit" name="btn" value="Login" id="cls" class="logout" style="margin:35px 0 30px 0 ; font-size: 1.2rem; background-color: rgba(0, 111, 202, 0.709); color: white;">
            <p class="message" style="font-size:1rem ; color:rgba(255, 255, 255, 0.826);">Not registered?<a href="register.php" style="color:rgb(4, 36, 179) ; padding-left:5px ;">Create an account</a></p>
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





//user login
if(isset($_POST['btn']))
{
   user_login($_POST['email'],$_POST['pass']);
}
function user_login($e,$p)
{
  
   include 'database.php';
   $select=mysqli_query($connect,"select * from login where email='$e' and password='$p'");
   $num=mysqli_num_rows($select);
   if($num==1)
   {

     echo '<script>
     window.location.href="../projectcode/Loan-details.php";
     alert("successfully login");</script>';

    }
   else
   {
      echo 'not login';
   }
}


?> 