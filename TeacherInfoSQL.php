<?php

	$con = mysqli_connect('localhost', 'root', 'rakib');

	if (!$con) {
		
		echo "Not connected to server";
	}

	if (!mysqli_select_db($con, 'dars2.0')) {
		
		echo "Database Not Selected";
	}

	$Year = $_POST ['Year'];
	$NoOfTeachers = $_POST ['NoOfTeachers'];
	$AdjunctTeachers = $_POST ['AdjunctTeachers'];
	$PHD = $_POST ['PHD'];
	$Professors = $_POST ['Professors'];
	$AProfessors = $_POST ['AProfessors'];
	$AsProfessors = $_POST ['AsProfessors'];
	$Lecturers = $_POST ['Lecturers'];
	


	$sql = "INSERT INTO teacher_distribution(year_PK, Total_Teacher, Total_Teacher_Adjunct, Total_Teacher_grad_PHD, Professor,  Associate_Professor, Assistant_Professor, Lecturer) VALUES ('$Year', '$NoOfTeachers', '$AdjunctTeachers', '$PHD', '$Professors', '$AProfessors', '$AsProfessors', '$Lecturers')";

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}

	header("refresh:1; url=home.php");


?>