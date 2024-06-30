<?php
  include "connection.php";
  include "navbar.php";

?>

 <!DOCTYPE html>
<html>
<head>

   <title>change ps</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >



</head>
<body>
<style type="text/css">


  body {
  background-image: url("images/7.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}
  section{
    margin-top:-20px;
    height: 700px;
  width: 1535px;
  }


.box{
  height: 400px;
  width: 550px;
  background-color: black;
  margin: 0px auto;
  opacity: .8;
  color: white;
  padding: 20px;
  padding-top: 150px;
  }

input {
    height: 15px;
    width: 300px;
}


    </style>
</head>
<body>

<section>
<br><br><br><br><br>

    <div class="box">
      <form name="signup" action="" method="post">
        <b><p style="padding-left: 70px;font-size: 25px;font-weight: 600;">Change Password as:</p></b><br><br>

          <input style="margin-left: 70px; width: 18px;" type="radio" name="user" id="admin" value="admin">
          <label for="admin" style="font-size: 18px;margin-left: 5px;">Admin</label>

          <input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student"><label for="student" style="font-size: 18px;margin-left: 5px;">Student</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
      
      <button class="btn btn-default" type="submit" name="submit1" style="color: black; font-weight: 700; width: 80px;height: 30px;">OK</button>
    </p>

      </form>
    
  </div>
  <?php 

  if(isset($_POST['submit1'])){

    if($_POST['user']=='admin'){
        
  ?>      
        <script type="text/javascript">
          window.location="admin/update_password.php"
        </script>
        <?php
    }
    else{
        ?>      
        <script type="text/javascript">
          window.location="student/update_password.php"
        </script>
        <?php
    }
  }

 ?>
</section>

 
</body>
</html>