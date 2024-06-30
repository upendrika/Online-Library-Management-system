<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">

		input {
    height: 15px;
    width: 300px;
		}
		.form-control
		{
			width:450px;
			height: 38px;
		}
		.form1
		{
			margin:0 110px;
			color: white;
		}
		label
		{
			color: white;
		}
		body {
      background-image: url("images/profile.jpg");
  
    }
    .box2{
  height: 960px;
  width: 650px;
  background-color: black;
  margin: 0px auto;
  opacity: .8;
  color: white;
  padding: 1px;
}

	</style>
</head>
<body >
	<div class="box2">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM student WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
			$gender=$row['gender'];
			$department=$row['department'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>"><br>

		<label><h4><b>Gender</b></h4></label>


	      <input style="margin-left: 70px; width: 18px;" type="radio" name="gender" id="male" value="male" <?php if ($gender == 'male') echo 'checked'; ?>>
	      <label for="admin" style="font-size: 18px;margin-left: 5px;">Male</label>

	      <input style="margin-left: 50px; width: 18px;" type="radio" name="gender" id="female" value="female" <?php if ($gender == 'female') echo 'checked'; ?>>
	      <label for="student" style="font-size: 18px;margin-left: 5px;">Female</label>
	      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

		<label><h4><b>Department</b></h4></label>

		<select class="form-control" name="department">
			<option <?php if ($department == 'IT') echo 'selected'; ?>>IT</option>
			<option <?php if ($department == 'Management') echo 'selected'; ?>>Management</option>
			<option <?php if ($department == 'Education') echo 'selected'; ?>>Education</option>
			<option <?php if ($department == 'Science') echo 'selected'; ?>>Science</option>
			<option <?php if ($department == 'Law') echo 'selected'; ?>>Law</option>
			<option <?php if ($department == 'Technology') echo 'selected'; ?>>Technology</option>
		</select>




		<br>
		<div style="padding-left: 200px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 
			if (isset($_POST['submit'])) {
				$first = $_POST['first'];
				$last = $_POST['last'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$gender = $_POST['gender'];
				$department = $_POST['department'];

				// Check if a new file has been uploaded
				if ($_FILES['file']['name']) {
					move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);
					$pic = $_FILES['file']['name'];
					$sql1 = "UPDATE student SET pic='$pic', first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact', gender='$gender', department='$department' WHERE username='$_SESSION[login_user]'";
				} else {
					$sql1 = "UPDATE student SET first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact', gender='$gender', department='$department' WHERE username='$_SESSION[login_user]'";
				}

				if (mysqli_query($db, $sql1)) {
					?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
					<?php
				}
			}
		?>
	</div>
</body>
</html>



