<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>book details</title>
  <style type="text/css">

    body {
    background-image: url("images/bg.jpg");
  
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 99vh;
    }
    .wrapper{
      width: 600px;
      margin: 0 auto;
      color: white;
      text-align: center;
    }
     .table {
      
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .table th {
      font-size: 13px;
      width: 150px; /* Adjust the font size for table headers */
    }

    .table td {
      font-size: 14px;
      text-align: left;
    }
     

  .edit-button {
    position: absolute;
    top: 90px;
    right: 400px;
    width: 100px;
  }
  .box2{
  height: 790px;
  width: 750px;
  background-color: black;
  margin: 0px auto;
  opacity: .9;
  color: white;
  padding: 20px;
}
  </style>


</head>
<body >
  <div class="container">
    <div class="box2">
    <div class="wrapper">
      
      <?php 
       if (isset($_GET['bid'])) {
      $bookid = $_GET['bid'];

    // Fetch book details from the database using the book ID
    $query = "SELECT * FROM books WHERE bid = '$bookid'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);

    // Display book details
    if ($row) {
      echo "<h2>Book Details</h2>";

      echo "<div>";
      echo "<img src='uploads/".$row['bookpic']."' class='book-img' style='width: 200px; height: auto;'>";
      echo "</div>";
      
      echo "<div>";

      echo "<table class='table table-bordered'>";

          /*echo "<tr><th>ID</th><td>" . $row['bid'] . "</td></tr>";*/
          echo "<tr><th>Book Name</th><td>" . $row['name'] . "</td></tr>";
          echo "<tr><th>Author(s)</th><td>" . $row['authors'] . "</td></tr>";
          echo "<tr><th>Book Details</th><td>" . $row['book_details'] . "</td></tr>";
          echo "<tr><th>Edition</th><td>" . $row['edition'] . "</td></tr>";
          echo "<tr><th>Status</th><td>" . $row['status'] . "</td></tr>";
          echo "<tr><th>Quantity</th><td>" . $row['quantity'] . "</td></tr>";
          echo "<tr><th>Category</th><td>" . $row['category'] . "</td></tr>";
          echo "</table>";
          echo "</div>";
           echo "<form action='editbook.php' method='get'>";
            echo "<input type='hidden' name='bid' value='".$row['bid']."'>";
            echo "<button style='color: white; background-color: #f09b0ee6;'' class='btn btn-default edit-button' name='submit' type='submit'>Edit Book</button>";
    } else {
      echo "<p>Book not found.</p>";
    }
  }
      ?>

          </div>
    </div>
  </div>
  
</body>
</html>