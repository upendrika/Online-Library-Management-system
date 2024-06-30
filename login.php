<?php
  include "connection.php";
  include "navbar.php";

?>

 <!DOCTYPE html>
<html>
<head>

   <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >



</head>
<body>
<style type="text/css">


  body {
  background-image: url("images/3.jpeg");
  background-size: cover;
  background-repeat: no-repeat;
}
  section{
    margin-top:-20px;
  }


  .box1{
  height: 500px;
  width: 550px;
  background-color: black;
  margin: 70px auto;
  opacity: .8;
  color: white;
  padding: 20px;
}

input {
    height: 15px;
    width: 300px;
}


    </style>
</head>
<body>

<section>
  <div class="log_img">

    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Login Form</h1>
        <br><br>

      <form name="login" action="" method="post">
       <b><p style="padding-left: 70px;font-size: 20px;font-weight: 600;">Login As:</p></b><br>
        <div style="align-items: center;">
        
         
        </div>
          <input style="margin-left: 70px; width: 18px;" type="radio" name="user" id="admin" value="admin">
          <label for="admin" style="font-size: 18px;margin-left: 5px;">Admin</label>

          <input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student" checked=""><label for="student" style="font-size: 18px;margin-left: 5px;">Student</label></p>

          <br>

        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 80px; height: 30px">
        </div>
      
      <p style="color: white; padding-left: 70px;">
        <br><br>
        <a style="color:yellow; text-decoration: none;" href="updateps.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        New to this website?&nbsp &nbsp<a style="color: yellow; text-decoration: none;" href="registration.php">Sign Up</a>
      </p>

      </form>
     
    </div>
  </div>
</section>

 <?php 

        if(isset($_POST['submit'])){

          if($_POST['user']=='admin'){

             $count=0;
          $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' and password='$_POST[password]' and status='yes';");
          
          $row=mysqli_fetch_assoc($res);

          $count=mysqli_num_rows($res);

          if($count==0){
            ?>
            <script type="text/javascript">
              alert("The username or password does not match");
            </script>

            
            <?php
          }
            else{
              /*----------------- if username & password matches-----*/

              $_SESSION['login_user'] = $_POST['username'];
              $_SESSION['pic'] = $row['pic'];

              ?>
              <script type="text/javascript">
                window.location="admin/profile.php"
              </script> 
              <?php
            }

          }
          else{

          $count=0;
          $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
          
          $row=mysqli_fetch_assoc($res);

          $count=mysqli_num_rows($res);

          if($count==0){
            ?>
            <script type="text/javascript">
              alert("The username and password does not match");
            </script>

            <?php
          }
            else{
              $_SESSION['login_user'] = $_POST['username'];
              $_SESSION['pic'] = $row['pic'];

              ?>
              <script type="text/javascript">
                window.location="student/profile.php"
              </script> 
              <?php
            }
          }
          }
        ?>

       
</body>
</html>