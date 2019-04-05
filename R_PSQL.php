<?php

	$con = mysqli_connect('localhost', 'root', 'rakib');

	if (!$con) {
		
		echo "Not connected to server";
	}

	if (!mysqli_select_db($con, 'dars2.0')) {
		
		echo "Database Not Selected";
	}

	$UYear = $_POST ['Year'];
	$ResearchJournals = $_POST ['ResearchJournals'];
	$ResearchProjectCompleted = $_POST ['ResearchProjectCompleted'];
	$ForeignJournals = $_POST ['ForeignJournals'];
	$LocalJournals = $_POST ['LocalJournals'];
	$ReviewedJournals = $_POST ['ReviewedJournals'];
	


	$sql = "INSERT INTO research_and_publication(Pyear_pk, Research_Journal, Research_Project_Completed, Published_Journal_Foreign, Publish_Journal_Local, Publish_Journal_Peer_review) VALUES ('$UYear', '$ResearchJournals', '$ResearchProjectCompleted', '$ForeignJournals', '$LocalJournals', '$ReviewedJournals')";

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}

	header("refresh:1; url=home.php");


?>