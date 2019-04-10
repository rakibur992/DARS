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

if (isset($_POST['input'])) {
    $year=$_POST['input'];

    $sql = "SELECT  * FROM university u WHERE UYear='$year' AND University_Name='North South University' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $data[] = $row;
        }
    }
    echo json_encode($data);
}
$conn->close();
