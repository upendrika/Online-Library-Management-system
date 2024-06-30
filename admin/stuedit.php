<?php
  include "navbar.php";
  include "connection.php";

  if (isset($_GET['bid'])) {
    $username = $_GET['bid'];

    // Fetch the student information based on the provided username
    $query = "SELECT * FROM student WHERE username = '$username'";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);

      // Display the student information in a form for editing
?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Edit Student Information</title>
        <style type="text/css">
          label {
            color: white;
            padding-right: 360px;
          }

          input {
            height: 15px;
            width: 300px;
            color: white;
          }

          .form-control {
            color: black;
            height: 40px;
            width: 450px;
            margin: 0 140px;
          }
           body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
            background-image: url("images/bg.jpg");

          }
          .box2{
            height: 950px;
            width: 750px;
            background-color: black;
            margin: 0px auto;
            opacity: .9;
            color: white;
            padding: 10px;
          }
        </style>
      </head>
      <body style="background-color:#7e5a45;">
        <div class="container" style="text-align: center;">
          <div class="box2">

          <h2 style="text-align: center;color: #fff;">Edit Student Information</h2><br><br>
          <div class="form1">
          <form action="" method="post" enctype="multipart/form-data">
              <input class="form-control" type="file" name="file">

              <label><h4><b>First Name:</b></h4></label>
              <input class="form-control" type="text" name="first" value="<?php echo $row['first']; ?>" required>

              <label><h4><b>Last Name:</b></h4></label>
              <input class="form-control" type="text" name="last" value="<?php echo $row['last']; ?>" required>

              <label><h4><b>Username:</b></h4></label>
              <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>" required>

              <label><h4><b>Password:</b></h4></label>
              <input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>" required>

              <label><h4><b>Email:</b></h4></label>
              <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>" required>

              <label><h4><b>Roll:</b></h4></label>
              <input class="form-control" type="text" name="roll" value="<?php echo $row['roll']; ?>" required>

              <label><h4><b>Contact No:</b></h4></label>
              <input class="form-control" type="text" name="contact" value="<?php echo $row['contact']; ?>" required><br>

              <b><p style="padding-right: 230px;font-size: 15px;font-weight: 700;center;color: #fff;">Gender
              <input style="margin-left: 25px; width: 18px;" type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>>Male
              <input style="margin-left: 25px; width: 18px;" type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>>Female </p></b>

              <label><h4><b>Department:</b></h4></label>

              <select class="form-control" name="department" required>
                <option <?php if ($row['department'] == 'IT') echo 'selected'; ?>>IT</option>
                <option <?php if ($row['department'] == 'Management') echo 'selected'; ?>>Management</option>
                <option <?php if ($row['department'] == 'Education') echo 'selected'; ?>>Education</option>
                <option <?php if ($row['department'] == 'Science') echo 'selected'; ?>>Science</option>
                <option <?php if ($row['department'] == 'Law') echo 'selected'; ?>>Law</option>
                <option <?php if ($row['department'] == 'Technology') echo 'selected'; ?>>Technology</option>
              </select>
              <br>
              <div style="padding-right: 90px;">
                <button class="btn btn-default" type="submit" name="submit">Save</button>&nbsp &nbsp &nbsp
                <input class="btn btn-default" type="reset" value="Reset" style="color: black; width: 70px; height: 35px;">
              </div>
            </form>
          </div>
        </div>
      </div>
      </body>
      </html>
<?php
      if (isset($_POST['submit'])) {
        // Update the student information based on the edited values
        $first = $_POST['first'];
        $last = $_POST['last'];
        $password = $_POST['password'];
        $roll = $_POST['roll'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];

        if (!empty($_FILES['file']['name'])) {
          // A new file was uploaded, handle the file upload and update the file path
          $targetDir = "uploads/";
          $targetFile = $targetDir . basename($_FILES['file']['name']);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

          // Check if the file is an actual image
          $check = getimagesize($_FILES['file']['tmp_name']);
          if ($check !== false) {
            $uploadOk = 1;
          } else {
            echo "<script>alert('File is not an image.');</script>";
            $uploadOk = 0;
          }

          // Check if the file already exists
          if (file_exists($targetFile)) {
            echo "<script>alert('File already exists.');</script>";
            $uploadOk = 0;
          }

          // Check file size (limit to 2MB)
          if ($_FILES['file']['size'] > 2 * 1024 * 1024) {
            echo "<script>alert('File size exceeds the limit.');</script>";
            $uploadOk = 0;
          }

          // Allow only certain file formats
          $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
          if (!in_array($imageFileType, $allowedExtensions)) {
            echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.');</script>";
            $uploadOk = 0;
          }

          if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
              // File uploaded successfully, update the file path in the database
              $updateQuery = "UPDATE student SET first='$first', last='$last', password='$password', roll='$roll', email='$email', contact='$contact', gender='$gender', department='$department', photo='$targetFile' WHERE username='$username'";
              $updateResult = mysqli_query($db, $updateQuery);

              if ($updateResult && mysqli_affected_rows($db) > 0) {
                // Update successful
                echo "<script>alert('Student information updated successfully.');</script>";
                echo "<script>window.location.href='stuedit.php';</script>";
              } else {
                // Update failed
                echo "<script>alert('Failed to update student information.');</script>";
              }
            } else {
              // File upload failed
              echo "<script>alert('Error uploading the file.');</script>";
            }
          }
        } else {
          // No new file was uploaded, update the student information without modifying the file path
          $updateQuery = "UPDATE student SET first='$first', last='$last', password='$password', roll='$roll', email='$email', contact='$contact', gender='$gender', department='$department' WHERE username='$username'";
          $updateResult = mysqli_query($db, $updateQuery);

          if ($updateResult && mysqli_affected_rows($db) > 0) {
            // Update successful
            echo "<script>alert('Student information updated successfully.');</script>";
            echo "<script>window.location.href='student.php';</script>";
          } else {
            // Update failed
            echo "<script>alert('Failed to update student information.');</script>";
          }
        }
      }
    } else {
      // Student not found
      echo "<script>alert('Student not found.');</script>";
      echo "<script>window.location.href='student.php';</script>";
    }
  } else {
    // Redirect if the 'bid' parameter is not provided
    echo "<script>window.location.href='student.php';</script>";
  }
?>
