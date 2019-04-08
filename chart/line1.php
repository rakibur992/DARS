<?php
include 'db_con.php';

if (isset($_POST['uni1']) and isset($_POST['uni2'])) {
    $uni1=$_POST['uni1'];
    $uni2=$_POST['uni2'];

    $sql = "SELECT  Admitted_Student,u.UYear
  FROM university u,student_distribution sd
  WHERE  u.Uid_PK=sd.uID_PK
  AND u.UYear=sd.year_PK
  AND u.University_Name='$uni1'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach ($result as $row) {
            $uni1Data[] = $row['Admitted_Student'];
            $year[] = $row['UYear'];
        }
    }

    $sql = "SELECT  Admitted_Student,u.UYear
  FROM university u,student_distribution sd
  WHERE  u.Uid_PK=sd.uID_PK
  AND u.UYear=sd.year_PK
  AND  u.University_Name='$uni2' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach ($result as $row) {
            $uni2Data[] = $row['Admitted_Student'];
        }
    }

    echo json_encode(array('uni1Data'=>$uni1Data ,'year'=>$year,'uni2Data'=>$uni2Data ));
}
$conn->close();
