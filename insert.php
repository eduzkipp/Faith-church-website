<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
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

		$fn=$_POST['first_name'];
		$ln=$_POST['last_name'];
		$add=$_POST['address'];
		$pho=$_POST['phone'];
		$age=$_POST['age'];

		if(empty($fn)||
		 empty($ln)||
		 empty($add)||
		 empty($pho)||
		 empty($age))
		 {
			die('<p style="font-size:25px;">please fill all required fields!');

		 }


		else{
		$sql = "INSERT INTO members_details VALUES ('$fn',
			'$ln','$add','$pho','$age')";
		
		if(mysqli_query($conn, $sql)){
		echo '<p style="font-size:25px;color:green;">Form validated and data submitted to database successfully';
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
