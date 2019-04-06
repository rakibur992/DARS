<?php

$servername = "localhost";
$username = "root";
$password = "rakib";
$dbname = "dars2.0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//generating bar chart

$sql1 = "SELECT DISTINCT University_Name FROM university ORDER BY University_Name ASC";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {

    // output data of each row

    $option1="";
    while ($row1 = mysqli_fetch_assoc($result1)) {
        $option1=$option1.'<option value="'.$row1["University_Name"].'">'.$row1["University_Name"].'</option>';
    }
}

$sql2 = "SELECT DISTINCT UYear FROM university ORDER BY UYear DESC";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {

    // output data of each row

    $option2="";
    $i=0;
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $option2=$option2.'<option value="'.$row2["UYear"].'">'.$row2["UYear"].'</option>';
    }
}

$conn->close();
