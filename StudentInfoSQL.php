<?php

	$con = mysqli_connect('localhost', 'root', 'rakib');

	if (!$con) {
		
		echo "Not connected to server";
	}

	if (!mysqli_select_db($con, 'dars2.0')) {
		
		echo "Database Not Selected";
	}

	$Year = $_POST ['Year'];
	$AdmitStud = $_POST ['AdmitStud'];
	$AdmitFStud = $_POST ['AdmitFStud'];
	$TotalStud = $_POST ['TotalStud'];
	$TotalFStud = $_POST ['TotalFStud'];
	$TotalUndergrads = $_POST ['TotalUndergrads'];
	$TotalUndergradsHons = $_POST ['TotalUndergradsHons'];
	$PassedUndergrads = $_POST ['PassedUndergrads'];
	$PassedHons = $_POST ['PassedHons'];
	$PassedUndergradsEng = $_POST ['PassedUndergradsEng'];
	$TotalGrads = $_POST ['TotalGrads'];
	$PassedGradsEng = $_POST ['PassedGradsEng'];
	$Poverty = $_POST ['Poverty'];
	$FreedomFighter = $_POST ['FreedomFighter'];
	


	$sql = "INSERT INTO student_distribution(year_PK, Admitted_Student, Female_Student, Total_Student_Studying, Total_Female_Student_Studying, Undergraduate_pass, Undergraduate_Hons, Undergraduate_Passed_Student_Normal, Undergraduate_Passed_Student_Hons, Undergraduate_Passed_Student_Eng_tech, Graduate_Passed_Student_Normal, Graduate_Passed_Student_Eng_tech, Student_Proverty, Student_Freedom_Fighter ) VALUES ('$Year', '$AdmitStud', '$AdmitFStud', '$TotalStud', '$TotalFStud', '$TotalUndergrads', '$TotalUndergradsHons', '$PassedUndergrads', '$PassedHons', '$PassedUndergradsEng', '$TotalGrads', '$PassedGradsEng', '$Poverty', '$FreedomFighter')";

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}

	header("refresh:1; url=home.php");


?>