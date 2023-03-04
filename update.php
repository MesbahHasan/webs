<?php
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		$stmt = $conn->prepare("update registration set firstName = '$firstName',lastName= '$lastName',gender= '$gender',email= '$email',password='$password',number='$number' WHERE id = 19");
		$execval = $stmt->execute();
		echo $execval;
		echo "Registered successfully...";
		$stmt->close();
		$conn->close();
	}
?>
