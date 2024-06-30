
<?php
  include "navbar.php";
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

  <title>Approve admin request</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">

  
  body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image: url("images/bg.jpg");

}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.img-circle{
margin-left: 10px;
}
.container
{
  height: 650px;
  background-color: black;
  opacity: .9;
  color: white;
}

</style>
</head>
<body>
     <!-- -------------------- sidenav --------------- -->

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

      <div style="color: white; margin-left: 70px; font-size: 18px;">

            <?php
            if(isset($_SESSION['login_user'])){

              echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
              echo "</br></br>";
              echo "Welcome ".$_SESSION['login_user'];
              }  
             ?>
      </div>

  <a href="profile.php">Profile</a>
  <a href="books.php">Books</a>
  <a href="request.php">Book Request</a>
  <a href="issue_info.php">Issue Information</a>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

    <!-- ---------------------search bar ---------------- -->
    <div class ="container">
      <h3 style="float: left;color:white;">Search one username at a time to approve the request</h3><br>
      <div style="float: right; "class="srch">
      <form class="navbar-form" method="post" name="form1">
        
          <input class="form-control" type="text" name="search" placeholder="Enter Username.." required="">
          <button style="background-color:#f09b0ee6;" type="submit" name="submit" class="btn btn-default">

            <span class="glyphicon glyphicon-search"></span>
          </button>        
       </form>
    </div>

  <br><br><br><br><br><h2>New Requests</h2>
  <?php

    if(isset($_POST['submit'])){
      $q=mysqli_query($db,"SELECT first, last, username, email, contact FROM `admin` where username like '%$_POST[search]%' and status='' ");

      if(mysqli_num_rows($q)==0){
        echo "Sorry! No new request found with that user name. Try searching again";
      }
      else{
        echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color: #f09b0ee6; color:black;'>";
        
        //Table header
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Last Name";  echo "</th>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Email";  echo "</th>";
        echo "<th>"; echo "contact";  echo "</th>";
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($q))
      {
        $_SESSION['test_name']=$row['username'];

        echo "<tr style='background-color: #fff1c9;color:black;'>";
        echo "<td><strong>" . $row['first'] . "</strong></td>";
        echo "<td><strong>" . $row['last'] . "</strong></td>";
        echo "<td><strong>" . $row['username'] . "</strong></td>";
        echo "<td><strong>" . $row['email'] . "</strong></td>";
        echo "<td><strong>" . $row['contact'] . "</strong></td>";

        echo "</tr>";
      }
    echo "</table>";

    ?>
    <form method="post">
    <button type="submit" name="submit1" style="background-color: #baf1eb;" class="btn btn-default"><span style="color: red;" class="glyphicon glyphicon-remove-sign"></span><b>&nbsp Remove</b></button>
    
    <button type="submit" name="submit2" style="background-color: #baf1eb;" class="btn btn-default"><span style="color: green;" class="glyphicon glyphicon-ok-sign"></span><b>&nbsp Approve</b></button>
    </form>

    <?php

      }
  }
    /*if the button is not pressed*/
    else{
        $res=mysqli_query($db,"SELECT first, last, username, email, contact FROM `admin` where status='';");

      echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color: #f09b0ee6; color:black;'>";
        
        //Table header
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Last Name";  echo "</th>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Email";  echo "</th>";
        echo "<th>"; echo "contact";  echo "</th>";

      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr style='background-color: #fff1c9;color:black;'>";
        echo "<td><strong>" . $row['first'] . "</strong></td>";
        echo "<td><strong>" . $row['last'] . "</strong></td>";
        echo "<td><strong>" . $row['username'] . "</strong></td>";
        echo "<td><strong>" . $row['email'] . "</strong></td>";
        echo "<td><strong>" . $row['contact'] . "</strong></td>";

        echo "</tr>";
      }
    echo "</table>";

    }

        if(isset($_POST['submit1'])){
         
         mysqli_query($db,"DELETE from admin where username='$_SESSION[test_name]'and status='';");
        
          /*unset($_SESSION['test_name']);*/
          
        }
        if(isset($_POST['submit2'])){
          
          mysqli_query($db,"UPDATE admin set status='yes' where username='$_SESSION[test_name]';");
          /*unset($_SESSION['test_name']);*/
          
         }


?>
</div>
</body>
</html>