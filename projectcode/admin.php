<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In Page</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body class="admin">
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post" action="admin.php">

        <h2 class="log">ADMIN LOGIN</h2>

        <input type="text" placeholder="Username" name="user" required/>
        
        <input type="password" placeholder="password" name="pass" required/>
        <input type="submit" name="btn" value="login" id="cls">
        <!-- <p class="message">Not registered? <a href="register.php">Create an account</a></p> -->
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



//admin
if(isset($_POST['btn']))
{
   user_login1($_POST['user'],$_POST['pass']);
}
function user_login1($u,$p)
{
//   echo 'hi';
   include 'database.php';
   $select=mysqli_query($connect,"select * from admin where username='$u' and password='$p'");
   $num=mysqli_num_rows($select);
   if($num==1)
   {
     echo 'login';
     echo '<script>window.location.href="adminprofile.html";alert("successfully login");</script>';

    }
   else
   {
      echo 'not login';
   }
}
?> 