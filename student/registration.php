<?php
  include "connection.php";
  include "navbar.php";

?>

 <!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
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
  height: 680px;
  width: 550px;
  background-color: black;
  margin: 0px auto;
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
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> Student Registration Form</h1>

      <form name="Registration" action="" method="post">
       <br>
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>

          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>
        
          <b><p style="padding-left: 5px;font-size: 15px;font-weight: 700;">Gender</b>

          <input style="margin-left: 50px; width: 18px;" type="radio" name="gender" value="male">Male
          <input style="margin-left: 30px; width: 18px;" type="radio" name="gender" value="female">Female</p>

          <select name="department" class="form-control" placeholder="Department" required="">
                      
              <option>IT</option>
              <option>Management</option>
              <option>Education</option>
              <option>Science</option>
              <option>Law</option>
              <option>Technology</option>
          </optgroup>
          
        </select><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 80px; height: 30px;">&nbsp &nbsp 
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
        $sql="SELECT username from `student`";
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
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]', 'user.png', '$_POST[gender]', '$_POST[department]');");
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