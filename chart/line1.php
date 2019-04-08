<?php
include 'db_con.php';

if (isset($_POST['input1'] & $_POST['input2'])) {
    $uni1=$_POST['input1'];
    $uni2=$_POST['input2'];

    $sql = "SELECT  Admitted_Student,u.UYear,University_Name
  FROM university u,student_distribution sd
  WHERE  u.Uid_PK=sd.uID_PK
  AND u.UYear=sd.year_PK
  AND (u.University_Name='$uni1' OR u.University_Name='$uni2' )";

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
