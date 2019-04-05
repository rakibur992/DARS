<?php

	$con = mysqli_connect('localhost', 'root', 'rakib');

	if (!$con) {
		
		echo "Not connected to server";
	}

	if (!mysqli_select_db($con, 'dars2.0')) {
		
		echo "Database Not Selected";
	}

	$UYear = $_POST ['UYear'];
	$Name = $_POST ['Name'];
	$Address = $_POST ['Address'];
	$contact = $_POST ['contact'];
	$email = $_POST ['emailAddress'];
	$website = $_POST ['website'];
	$land = $_POST ['land'];
	$ownedland = $_POST ['ownedland'];
	$rentedland = $_POST ['rentedland'];
	$NoOfSchools = $_POST ['NoOfSchools'];
	$department = $_POST ['department'];


	$sql = "INSERT INTO university(UYear, University_Name, University_Address, University_Contact, University_Email,  University_Website, University_land_Acre, University_Physical_Structure_owned_acre, University_Physical_Structure_rented, No_Of_Schools, Department) VALUES ('$UYear', '$Name', '$Address', '$contact', '$email', '$website', '$land', '$ownedland', '$rentedland', '$NoOfSchools', '$department')";

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}

	header("refresh:1; url=home.php");


?>