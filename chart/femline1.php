<?php
include 'db_con.php';

if (isset($_POST['femuni2'])) {
    $uni3=$_POST['femuni2'];

    $sqfem = "SELECT  Female_Student,u.UYear
    FROM university u, student_distribution sdr
    WHERE  u.Uid_PK=sdr.uID_PK
    AND u.UYear=sdr.year_PK
    AND u.University_Name='femuni2'";

    $result = mysqli_query($conn, $sqfem);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach ($result as $row) {
            $datafem[] = $row['Female_Student'];
            $year[] = $row['UYear'];
        }
    }
    echo json_encode(array('data'=>$datafem ,'year'=>$year ));
}
$conn->close();
