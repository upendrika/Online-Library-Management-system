<?php
  include "navbar.php";
  include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Book</title>
  <style type="text/css">

    .form-control {
      width: 450px;
      height: 38px;
    }
    .form1 {
      margin: 0 140px;
      color: white;
    }
    label {
      color: white;
    }
  
  .box2{
  height: 1050px;
  width: 750px;
  background-color: black;
  margin: 0px auto;
  opacity: .9;
  color: white;
  padding: 20px;
}
 
 body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image: url("images/bg.jpg");

}
  </style>
</head>
<body >
  <div class="box2">
  <h2 style="text-align: center; color: #fff;">Edit Book Information</h2><br>
  <?php
    if (isset($_GET['bid'])) {
      $bookid = $_GET['bid'];

      // Fetch book details from the database using the book ID
      $query = "SELECT * FROM books WHERE bid = ?";
      $stmt = mysqli_prepare($db, $query);
      mysqli_stmt_bind_param($stmt, "i", $bookid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);

      // Display book details and form for updating
      if ($row) {
        $bookid = $row['bid'];
        $name = $row['name'];
        $authors = $row['authors'];
        $bookDetails = $row['book_details'];
        $edition = $row['edition'];
        $status = $row['status'];
        $quantity = $row['quantity'];
        $category = $row['category'];
        //$bookpic = $row['bookpic']; // Retrieve the current photo's link

        echo "<div class='form1'>";
        echo "<form action='' method='post' enctype='multipart/form-data'>";
        echo "<input class='form-control' type='file' name='file'>";
        echo "<label><h4><b>Book ID: </b></h4></label>";
        echo "<input class='form-control' type='text' name='bookid' value='".$bookid."'>";
        echo "<label><h4><b>Book Name</b></h4></label>";
        echo "<input class='form-control' type='text' name='name' value='".$name."'>";
        echo "<label><h4><b>Author(s)</b></h4></label>";
        echo "<input class='form-control' type='text' name='authors' value='".$authors."'>";
        echo "<label><h4><b>Book Details</b></h4></label>";
        echo "<textarea class='form-control' name='book_details' rows='6'>".$bookDetails."</textarea>";
        echo "<label><h4><b>Edition</b></h4></label>";
        echo "<input class='form-control' type='text' name='edition' value='".$edition."'>";
        echo "<label><h4><b>Status</b></h4></label>";
        echo "<input class='form-control' type='text' name='status' value='".$status."'><br>";
        echo "<label><h4><b>Quantity</b></h4></label>";
        echo "<input class='form-control' type='text' name='quantity' value='".$quantity."'><br>";
        echo "<label><h4><b>Category</b></h4></label>";
        echo "<select class='form-control' name='category'>";
        // Display options for category
        $categories = array(
          "Educational" => array("Textbooks", "Reference Books", "Academic Journals", "Arts and Creativity", "Professional Development"),
          "Entertainment" => array("Fiction", "Mystery", "Science Fiction", "Fantasy", "Romance", "Thriller")
        );


        foreach ($categories as $optgroup => $options) {
          echo "<optgroup label='".$optgroup."'>";
          foreach ($options as $option) {
            echo "<option".($category == $option ? " selected" : "").">".$option."</option>";
          }
          echo "</optgroup>";
        }
        echo "</select><br>";

      
        echo "<div style='padding-left: 200px;'>";
        echo "<button class='btn btn-default' type='submit' name='submit'>Save</button></div>";
        echo "</form>";
        echo "</div>";
      } else {
        echo "Book not found.";
      }
    } else {
      echo "No book ID specified.";
    }
  ?>

  <?php
    if (isset($_POST['submit'])) {
      // Retrieve form input values
      $bookid = $_POST['bookid'];
      $name = $_POST['name'];
      $authors = $_POST['authors'];
      $bookDetails = $_POST['book_details'];
      $edition = $_POST['edition'];
      $status = $_POST['status'];
      $quantity = $_POST['quantity'];
      $category = $_POST['category'];
      $bookid = $_POST['bookid'];

     ;

      // Check if a new file has been uploaded
      if ($_FILES['file']['name'] != "") {
        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];

        // Check for valid file type
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = array("jpg", "jpeg", "png");
        if (in_array($file_ext, $allowed_ext)) {
          if ($file_error === 0) {
            if ($file_size < 5000000) {
              // Generate a unique filename
              $new_file_name = uniqid('', true) . "." . $file_ext;
              $file_destination = "uploads/" . $new_file_name;

              // Move the uploaded file to the destination
              move_uploaded_file($file_tmp, $file_destination);

              // Update the book's photo link in the database
              $sql_update = "UPDATE books SET bookpic=? WHERE bid=?";
              $stmt_update = mysqli_prepare($db, $sql_update);
              mysqli_stmt_bind_param($stmt_update, "si", $file_destination, $bookid);
              mysqli_stmt_execute($stmt_update);
            } else {
              echo "File size exceeds the maximum allowed limit.";
            }
          } else {
            echo "Error uploading the file.";
          }
        } else {
          echo "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
        }
      }

      // Update book details in the database
      $sql1 = "UPDATE books SET name=?, authors=?, book_details=?, edition=?, status=?, quantity=?, category=? WHERE bid=?";
      $stmt = mysqli_prepare($db, $sql1);
      mysqli_stmt_bind_param($stmt, "sssssssi", $name, $authors, $bookDetails, $edition, $status, $quantity, $category, $bookid);

      if (mysqli_stmt_execute($stmt)) {
        ?>
        <script type="text/javascript">
          alert("Saved Successfully.");
          window.location = "book_details.php?bid=<?php echo $bookid; ?>";
        </script>
        <?php
      } else {
        echo "Error updating book details: " . mysqli_error($db);
      }
    }
  ?>
</div>
</body>
</html>
