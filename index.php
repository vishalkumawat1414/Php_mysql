<?php 
   //can make global variable here
   
    if($_POST['name']!=''){
    $server = 'localhost';    //all detail for local machine
	$username = 'root';
	$password = '';

    $con = mysqli_connect($server,$username,$password);  // variable for connection 
    
	if(!$con){
		die("Connetion failed" . mysqli_connect.error());
	}
    // echo "connetion success";

	//collection of form data or post data
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$other = $_POST['desc'];
	
	$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `phone`, `email`, `other`, `ts`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$other', current_timestamp())";
        //     `databasenaem` . `tablename`

    // echo $sql;
	if($con->query($sql)==true){
		// echo "successfully inserted";
	}else{
		echo " insertion failed" . "$con->error";
	}

	//close the connnetion with database
	$con->close();
}
?>
  


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Welcome to the travelling journey</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div>
			<div class="container">
				<h1>Welcome to the trip to manali</h1>
				<p>Please enter the required detail to conform the participation</p>
				<form action="index.php" method="post">
					<input
						type="text"
						name="name"
						id="name"
						placeholder="Enter your name" />
					<input type="text" name="age" id="age" placeholder="Enter your age" />
					<input
						type="text"
						name="gender"
						id="gender"
						placeholder="Enter your gender" />
					<input
						type="phone"
						name="phone"
						id="phone"
						placeholder="Enter your phone no" />
					<input
						type="email"
						name="email"
						id="email"
						placeholder="Enter your email" />

					<textarea
						name="desc"
						id="desc"
						cols="30"
						rows="10"
						placeholder="Other info"></textarea>
					<button class="btn">Submit</button>
					<!-- <button class="btn">Reset</button> -->
				</form>
			</div>
		</div>
		<script src="index.js"></script>
	</body>
</html>
