<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if (!empty($Email) && !empty($Password)) {

		//read from database
		$query = "SELECT * FROM `log` WHERE Email='$Email' and Password='$Password'";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['Password'] === $Password) {

					$_SESSION['Email'] = $user_data['Email'];
					header("Location: clubs.php");
					die;
				}
			}
		}

		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Login</title>
</head>

<body>

	<!-- <style type="text/css">

	body{
		background-color:purple;
	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}

	#box{
		margin-top:100px;
		margin-left:600px;
		background-color: black;

		width: 300px;
		padding: 20px;
	}
	

	</style>


	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="Email"><br><br>
			<input id="text" type="password" name="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div> -->
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" action="login.php" method="post">
					<h1 class="font-weight-bold text-center ">LogIn</h1>
					<div class="form-group">
						<label for="Email">Email</label>
						<input type="Email" name="Email" class="form-control" id="Email" placeholder="Email">
					</div>
					<div class="form-group mb-3">
						<label for="Password">Password</label>
						<input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success btn-block" value="signup">Submit</button>
					<hr>
					<h3>Don't Have an account</h3>
					<a href="signup.php">SignUp</a>

				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
	<style>
		body
		{
			background-image: url(lgbg1.jpg);
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			display: grid;
			height: 100vh;
		}

	</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>