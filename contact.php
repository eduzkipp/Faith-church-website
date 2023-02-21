<!DOCTYPE html>
<html>

<head>
	<title>Contactus</title>
</head>

<body>
	
		<?php
		

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "faith_church");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		// $first_name = $_REQUEST['first_name'];
		// $last_name = $_REQUEST['last_name'];
		// // $gender = $_REQUEST['gender'];
		// $address = $_REQUEST['address'];
		// $email_address = $_REQUEST['email_address'];
		
		// Performing insert query execution
		// here our table name is college

		//make sure allof the input boxes have a value

		$na=$_POST['name'];
		$ema=$_POST['email'];
		$sub=$_POST['subject'];
		$msg=$_POST['message'];
		

		if(empty($na)||
		 empty($ema)||
		 empty($sub)||
		 empty($msg))
		 
		 {
			die('<p style="font-size:25px;">please fill all required fields!');

		 }


		else{
		$sql = "INSERT INTO contact_us VALUES ('$na',
			'$ema','$sub','$msg')";
		
		if(mysqli_query($conn, $sql)){
		echo '<p style="font-size:25px;color:green;">Faith church thanks you  for contacting us';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
