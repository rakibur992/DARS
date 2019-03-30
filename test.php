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

$sql = "SELECT  University_Name,Total_Student_Studying FROM university u,student_distribution s WHERE UYear='2017' AND u.Uid_PK=s.uID_PK AND u.UYear=s.year_PK ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    $i=0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$i]=$row["University_Name"] ;
        $i+=1;
    }
    // for ($i=0; $i <mysqli_num_rows($result) ; $i++) {
    //     if ($i==0) {
    //         echo $data[$i] ;
    //     } else {
    //         echo ",".$data[$i] ;
    //     }
    // }

    print json_encode($data);
}
$conn->close();
