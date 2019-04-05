<?php

	$con = mysqli_connect('localhost', 'root', 'rakib');

	if (!$con) {
		
		echo "Not connected to server";
	}

	if (!mysqli_select_db($con, 'dars2.0')) {
		
		echo "Database Not Selected";
	}

	$Year = $_POST ['Year'];
	$Arts = $_POST ['Arts'];
	$Sociology = $_POST ['Sociology'];
	$Education = $_POST ['Education'];
	$Science = $_POST ['Science'];
	$Business = $_POST ['Business'];
	$Law = $_POST ['Law'];
	$Pharmacy = $_POST ['Pharmacy'];
	$Agriculture = $_POST ['Agriculture'];
	$Engineering_and_Technical = $_POST ['Engineering_and_Technical'];
	$Economics = $_POST ['Economics'];
	


	$sql = "INSERT INTO courses(Year, Arts, Sociology, Education, Science,  Business, Law, Pharmacy, Agriculture, Engineering_and_Technical, Economics) VALUES ('$Year', '$Arts', '$Sociology', '$Education', '$Science', '$Business', '$Law', '$Pharmacy', '$Agriculture', '$Engineering_and_Technical', '$Economics')";

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}

	header("refresh:1; url=home.php");


?>