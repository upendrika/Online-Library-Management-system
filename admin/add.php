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

    .srch{
      padding-left: 1160px;
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

.h:hover {
  color:white;
  width: 300px;
  height: 50px;
  background-color: #c65607;
}
.book
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: white;
  color: black;
  height: 40px;
  width: 450px;
  margin: 0 5px;
}
.box2{
  height: 790px;
  width: 750px;
  background-color: black;
  margin: 0px auto;
  opacity: .8;
  color: white;
  padding: 10px;
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

 <div class="h"> <a href="add.php">Add Books</a> </div> 
  <div class="h"> <a href="request.php">Book Request</a></div>
  <div class="h"> <a href="issue_info.php">Issue Information</a></div>
  <div class="h"><a href="expired.php">Expired List</a></div>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; open</span>
  <div class="container" style="text-align: center;">
    <div class="box2">
    <h2 style="color:white; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2><br>
    
    <form class="book" action="" method="post" enctype="multipart/form-data">

        <input class="form-control" type="file" name="file"><br>

        <input type="text" name="bid" class="form-control" placeholder="Book id" required=""><br>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <textarea name="book_details" class="form-control" placeholder="Book details" rows="5" required=""></textarea><br><input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        
        <select name="category" class="form-control" placeholder="Category" required="">
          <optgroup label="Educational">
            
              <option>Textbooks</option>
              <option>Reference Books</option>
              <option>Academic Journals</option>
              <option>Arts and Creativity</option>
              <option>Professional Development</option>
          </optgroup>
          <optgroup label="Entertainment">
              <option>Fiction</option>
              <option>Mystery</option>
              <option>Science Fiction</option>
              <option>Fantasy</option>
              <option>Romance</option>
              <option>Thriller</option>

          </optgroup>
          
        </select><br>
 
        <button style="text-align: center; width: 80px; height: 35px;" class="btn btn-default" type="submit" name="submit">ADD</button>&nbsp &nbsp &nbsp
        <input class="btn btn-default" type="reset" value="Reset" style="color: black; width: 80px; height: 35px;">

    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
      if(isset($_SESSION['login_user']))
      {
        $file = $_FILES['file'];

        // Define the target directory
        $targetDir = "uploads/";

        // Generate a unique filename for the uploaded file
        $fileName = uniqid() . '_' . $file['name'];

        // Construct the target path
        $targetPath = $targetDir . $fileName;

        // Move the uploaded file to the target directory
        if(move_uploaded_file($file['tmp_name'], $targetPath))
        {
          $bid = mysqli_real_escape_string($db, $_POST['bid']);
          $fileName = mysqli_real_escape_string($db, $fileName);
          $name = mysqli_real_escape_string($db, $_POST['name']);
          $authors = mysqli_real_escape_string($db, $_POST['authors']);
          $bookDetails = mysqli_real_escape_string($db, $_POST['book_details']);
          $edition = mysqli_real_escape_string($db, $_POST['edition']);
          $status = mysqli_real_escape_string($db, $_POST['status']);
          $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
          $category = mysqli_real_escape_string($db, $_POST['category']);

          mysqli_query($db, "INSERT INTO books VALUES ('$bid', '$fileName', '$name', '$authors', '$bookDetails', '$edition', '$status', '$quantity', '$category');");






        /*mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]', '$fileName', '$_POST[name]', '$_POST[authors]', '$_POST[book_details]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[category]') ;");*/
        ?>
          <script type="text/javascript">
            alert("Book Added Successfully.");
          </script>

        <?php
      }
      else{
        ?>
          <script type="text/javascript">
            alert("Failed to upload the file.");
          </script>
          <?php
      }
      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#7e5a45";
}
</script>
</div>
</body>
</html>
