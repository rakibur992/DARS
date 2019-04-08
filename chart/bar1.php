<?php
include 'db_con.php';

if (isset($_POST['input'])) {
    $year=$_POST['input'];

    $sql = "SELECT  University_Name,Total_Student_Studying FROM university u,student_distribution s WHERE UYear='$year' AND u.Uid_PK=s.uID_PK AND u.UYear=s.year_PK ";
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
