<?php
  include "connection.php";
  include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .srch
    {
      padding-left: 1000px;

    }
    
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-size: cover;
  background-repeat: no-repeat;
    background-image: url("images/bg1.jpg");

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
  color: white;
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
.img-circle
{
  margin-left: 20px;
}
.h:hover
{
  color:white;
  width: 300px;
  height: 50px;
  background-color: #00544c;
}
.scroll {
      max-height: 430px; /* Adjust the max height as needed */
      overflow-y: auto;
    }
.sticky-header th {
      position: sticky;
      top: 0;
      background-color: #46cbd6e6;
    }
  </style>

</head>
<body>
  <!--_________________sidenav_______________-->
  
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                {   echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 
  <div class="h"> <a href="nonregbook.php">Books</a></div>
  <div class="h"> <a href="nonregbook.php">Book Request</a></div>
  <div class="h"> <a href="nonregbook.php">Issue Information</a></div>
  <div class="h"><a href="nonregbook.php">Expired List</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>


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
  <!--___________________search bar________________________-->

  <div class="srch">
    <form class="navbar-form" method="post" name="form1">
      

        <input class="form-control" type="text" name="search" placeholder="search books.." required="">
        <button style="background-color: #46cbd6e6; color:black;" type="submit" name="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>
        </button>
    </form>
  </div>
  
  <!--___________________request book_______________-->
  <div class="srch">
    <form class="navbar-form" method="post" name="form1">
      
        <input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
        <button style="background-color: #46cbd6e6; color:black;" type="submit" name="submit1" class="btn btn-default">Request
        </button>
    </form>
  </div>


  <h2 style="color: black;text-align: center;" >List Of Books</h2>
    <div class="scroll">

  <?php

    if(isset($_POST['submit']))
    {

      $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%'");

      if(mysqli_num_rows($q)==0)
      {
        echo "Sorry! No book found. Try searching again.";
      }
      else
      {
    echo "<table class='table table-bordered table-hover' >";
    echo "<thead class='sticky-header'>";

      echo "<tr style='background-color: #46cbd6e6;color:black;'>";
        //Table header
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "Book-Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
        echo "<th>"; echo "Quantity";  echo "</th>";
        echo "<th>"; echo "category";  echo "</th>";
        echo "<th>"; echo "view "; echo "</th>";
        
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($q))
      {
        echo "<tr style='background-color: #caf3f3e6;'>";
        echo "<td><strong>" . $row['bid'] . "</strong></td>";
        echo "<td><strong>" . $row['name'] . "</strong></td>";
        echo "<td><strong>" . $row['authors'] . "</strong></td>";
        echo "<td><strong>" . $row['edition'] . "</strong></td>";
        echo "<td><strong>" . $row['status'] . "</strong></td>";
        echo "<td><strong>" . $row['quantity'] . "</strong></td>";
        echo "<td><strong>" . $row['category'] . "</strong></td>";
        echo "<td>";
        echo "<a href='book_details.php?bid=".$row['bid']."'>";
        echo "<button style='background-color: #46cbd6e6;color:black;'>View Book</button>";
        echo "</a>";
        echo "</td>";

        echo "</tr>";
      }
    echo "</table>";
      }
    }
      /*if button is not pressed.*/
    else
    {
      $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`bid` ASC;");

    echo "<table class='table table-bordered table-hover' >";
    echo "<thead class='sticky-header'>";

      echo "<tr style='background-color: #46cbd6e6; color:black;'>";
        //Table header
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "Book-Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
        echo "<th>"; echo "Quantity";  echo "</th>";
        echo "<th>"; echo "category";  echo "</th>";
        echo "<th>"; echo "view "; echo "</th>";
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr style='background-color: #caf3f3e6;'>";
        echo "<td><strong>" . $row['bid'] . "</strong></td>";
        echo "<td><strong>" . $row['name'] . "</strong></td>";
        echo "<td><strong>" . $row['authors'] . "</strong></td>";
        echo "<td><strong>" . $row['edition'] . "</strong></td>";
        echo "<td><strong>" . $row['status'] . "</strong></td>";
        echo "<td><strong>" . $row['quantity'] . "</strong></td>";
        echo "<td><strong>" . $row['category'] . "</strong></td>";
        echo "<td>";
        echo "<a href='book_details.php?bid=".$row['bid']."'>";
        echo "<button style='background-color: #46cbd6e6;color:black;'>View Book</button>";
        echo "</a>";
        echo "</td>";

        echo "</tr>";
      }
    echo "</table>";
    }

    if(isset($_POST['submit1']))
    {
      if(isset($_SESSION['login_user']))
      { 
        $sql1=mysqli_query($db,"SELECT * FROM `books` WHERE bid='$_POST[bid]';");

        $row1=mysqli_fetch_assoc($sql1);
        $count1=mysqli_num_rows($sql1);
        if($count1!=0){

           if ($row1['status'] == "not available") {
            ?>
            <script type="text/javascript">
              alert("You must login to Request a book");
            </script>
            <?php

            } else {


              mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[bid]', '', '', '');");
              ?>
                <script type="text/javascript">
                  window.location="request.php"
                </script>
              <?php
        }}
        else{
            ?>
            <script type="text/javascript">
              alert("The Book is not available in library");
            </script>
            <?php
        }
      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You must login to Request a book");
          </script>
        <?php
      }
    }

  ?>
</div>
</div>
</body>
</html>