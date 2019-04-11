<?php
include 'db_con.php';

if (isset($_POST['resuni2'])) {
    $uni3=$_POST['resuni2'];

    $sql6 = "SELECT  Research_Project_Completed,u.UYear
    FROM university u,research_and_publictaion r
    WHERE  u.Uid_PK=r.UiD_pk
    AND u.UYear=r.Pyear_pk
    AND u.University_Name='$uni3'";

    $result = mysqli_query($conn, $sql6);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach ($result as $row) {
            $dataR[] = $row['Research_Project_Completed'];
            $year[] = $row['UYear'];
        }
    }
    echo json_encode(array('data'=>$dataR ,'year'=>$year ));
}
$conn->close();
