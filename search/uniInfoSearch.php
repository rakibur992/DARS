<?php
include 'db_con.php';

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
