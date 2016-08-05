<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<?php
	$c_name = $_POST['name'];
	$c_email = $_POST['email'];
	$c_password = $_POST['password1'];

	// Create connection
	$conn = new mysqli("localhost","root","","sportshub");

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

	$sql = "INSERT INTO customer (customer_name, customer_email, password)
	VALUES ('$c_name', '$c_email', '$c_password')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	mysqli_close($conn);

	?>
</body>
</html>
