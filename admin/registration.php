<?php
  include "connection.php";
  include "navbar.php";

?>

 <!DOCTYPE html>
<html>
<head>

  <title>Admin Registration</title>
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet">

</head>
<body>
<style type="text/css">

  body {
  background-image: url("images/reg.png");
  background-size: cover;
  background-repeat: no-repeat;
}
  section{
  margin-top:-20px;
  }


  .box2{
  height: 610px;
  width: 570px;
  background-color: black;
  margin: 0px auto;
  opacity: .8;
  color: white;
  padding: 40px;
}

form .Registration{
  margin: auto 60px;
}

  </style>
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> Admin Registration Form</h1>
        <br><br>
      <form name="Registration" action="" method="post">
       <br>
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 80px; height: 30px">&nbsp &nbsp 
          <input class="btn btn-default" type="reset" value="Reset" style="color: black; width: 80px; height: 30px;">
        
          </div>
      </form>
     
    </div>
  </div>
</section>
       <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `admin`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `admin` VALUES('', '$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]', 'user.png', '');");
        ?>
          <script type="text/javascript">
          window.location="../login.php"
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>


</body>
</html>