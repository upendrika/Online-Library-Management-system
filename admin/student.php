
<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">

  .srch
    {
      padding-left: 800px;

    }
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
.h:hover
{
  color:white;
  width: 300px;
  height: 50px;
  background-color: #e5af56e6;
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
      </div><br>

  <div class="h"><a href="profile.php">Profile</a></div>
  <div class="h"><a href="books.php">Books</a></div>
  <div class="h"><a href="request.php">Book Request</a></div>
  <div class="h"><a href="issue_info.php">Issue Information</a></div>
</div>
<div id="main">
  
  <span style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()">&#9776; open</span>


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
      <div class="srch">
      <form class="navbar-form" method="post" name="form1">
        
          <input class="form-control" type="text" name="search" placeholder="Student username.." required="">
          <button style="background-color:#f09b0ee6;" type="submit" name="submit" class="btn btn-default">

            <span class="glyphicon glyphicon-search"></span>
          </button>        
       </form>

       <form class="navbar-form" method="post" name="form1">
      
        <input class="form-control" type="text" name="username" placeholder="Enter Username.." required="">
        <button style="background-color: #f09b0ee6;" type="submit" name="submit1" class="btn btn-default"><b>Delete</b>
        </button>
    </form>
            <div>&nbsp &nbsp 
                <a href="add_student.php" class="btn btn-default" style="background-color: #f09b0ee6; width: 120px; height: 35px;"><b>Add Student</b></a>
            </div>
    </div>

  <h2 style="color: white;">List Of Students</h2>
  <?php

    if(isset($_POST['submit'])){
      $q=mysqli_query($db,"SELECT first,last,username,roll,email,contact,gender,department FROM `student` where username like '%$_POST[search]%' ");

      if(mysqli_num_rows($q)==0){
        echo "Sorry! No student found with that user name. Try searching again";
      }
      else{
        echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color:  #f09b0ee6; color:black;'>";
        
        //Table header
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Last Name";  echo "</th>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll";  echo "</th>";
        echo "<th>"; echo "Email";  echo "</th>";
        echo "<th>"; echo "contact";  echo "</th>";
        echo "<th>"; echo "gender";  echo "</th>";
        echo "<th>"; echo "department";  echo "</th>";
        echo "<th>"; echo "edit";  echo "</th>";

      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($q))
      {
        echo "<tr style='background-color: #fff1c9;color:black;'>";
        echo "<td><strong>" . $row['first'] . "</strong></td>";
        echo "<td><strong>" . $row['last'] . "</strong></td>";
        echo "<td><strong>" . $row['username'] . "</strong></td>";
        echo "<td><strong>" . $row['roll'] . "</strong></td>";
        echo "<td><strong>" . $row['email'] . "</strong></td>";
        echo "<td><strong>" . $row['contact'] . "</strong></td>";
        echo "<td><strong>" . $row['gender'] . "</strong></td>";
        echo "<td><strong>" . $row['department'] . "</strong></td>";
        echo "<td>";
        echo "<a href='stuedit.php?bid=".$row['username']."'>";
        echo "<button style='background-color: #f09b0ee6; color: black;'>Edit </button>";
        echo "</a>";
        echo "</td>";

        echo "</tr>";
      }
    echo "</table>";

      }
}
    /*if the button is not pressed*/
    else{
        $res=mysqli_query($db,"SELECT first,last,username,roll,email,contact,gender,department FROM `student` ;");

      echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color:  #f09b0ee6; color:black;'>";
        
        //Table header
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Last Name";  echo "</th>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll";  echo "</th>";
        echo "<th>"; echo "Email";  echo "</th>";
        echo "<th>"; echo "contact";  echo "</th>";
        echo "<th>"; echo "gender";  echo "</th>";
        echo "<th>"; echo "department";  echo "</th>";
        echo "<th>"; echo "edit";  echo "</th>";

      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr style='background-color: #fff1c9;color:black;'>";
        echo "<td><strong>" . $row['first'] . "</strong></td>";
        echo "<td><strong>" . $row['last'] . "</strong></td>";
        echo "<td><strong>" . $row['username'] . "</strong></td>";
        echo "<td><strong>" . $row['roll'] . "</strong></td>";
        echo "<td><strong>" . $row['email'] . "</strong></td>";
        echo "<td><strong>" . $row['contact'] . "</strong></td>";
        echo "<td><strong>" . $row['gender'] . "</strong></td>";
        echo "<td><strong>" . $row['department'] . "</strong></td>";
        echo "<td>";
        echo "<a href='stuedit.php?bid=".$row['username']."'>";
        echo "<button style='background-color: #f09b0ee6; color: black;'>Edit </button>";
        echo "</a>";
        echo "</td>";

        echo "</tr>";
      }
    echo "</table>";

    }

    if (isset($_POST['submit1'])) {
    if (isset($_SESSION['login_user'])) {
      if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $query = "DELETE FROM student WHERE username = '$username'";
        $result = mysqli_query($db, $query);

        if ($result && mysqli_affected_rows($db) > 0) {
          // Deletion successful
          ?>
          <script type="text/javascript">
            alert("Delete Successful.");
          </script>
          <?php
        } else {
          // No rows affected, username not found
          ?>
          <script type="text/javascript">
            alert("Username not found. Delete failed.");
          </script>
          <?php
        }
      } else {
        ?>
        <script type="text/javascript">
          alert("Please provide a username.");
        </script>
        <?php
      }
    } else {
      ?>
      <script type="text/javascript">
        alert("Please Login First.");
      </script>
      <?php
    }
  }
?>
   </div>
</body>
</html>