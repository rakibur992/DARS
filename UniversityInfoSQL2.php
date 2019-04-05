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

	$sql = "INSERT INTO university(UYear, University_Name) VALUES ('$UYear', '$Name')";


	$sql2 = "SELECT UYear, University_Name, University_Contact FROM university";
	$result = $con->query($sql2);

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo ("id: " . $row["UYear"]. " - Name: " . $row["University_Name"]. " - Contact: " . $row["University_Contact"]. "<br>");
    }
} else {
    echo "0 results";
}





?>