<?php
session_start();

include("connection.php");
//include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$USN = $_POST['USN'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if (!empty($Name) && !empty($Email) && !empty($Password) && !is_numeric($Name)) {

		//save to database
		//$user_id = random_num(20);
		$query = "INSERT INTO `log` (`USN`,`Name`, `Email`, `Password`) VALUES ('$USN','$Name', '$Email', '$Password')";
		if($query)
		{
			echo '<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Registered Succesfully</h4>
			<p>You Can Now LogIn</p>
			</div>';
		}

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Signup</title>
</head>

<body>

	<!-- <style type="text/css">

	body{
		background-image: ;
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
	

	</style> -->

	<!-- <div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="Name"><br><br>
			<input id="text" type="text" name="Email"><br><br>
			<input id="text" type="password" name="Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div> -->
	<!-- <img src="lgbg.jpg" class="img-fluid" alt="Responsive image"> -->
	<div class="container-fluid bg">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-container"  action="signup.php" method="post">
                    <h1 class="font-weight-bold text-center ">SignUp</h1>
					<div class="form-group">
                        <label for="USN">USN</label>
                        <input type="text" name="USN" class="form-control" id="USN" placeholder="USN">
                    </div>
					<div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
                    </div>
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

                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
	<style>
		body
		{
			background-image: url(lgbg.jpg);
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