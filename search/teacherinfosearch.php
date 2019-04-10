<?php
include 'db_con.php';
if (isset($_POST['tinput'])) {
    $teacheryear1=$_POST['tinput'];

    $sql12 = "SELECT  Total_Teacher,Total_Teacher_Adjunct,Total_Teacher_grad_PhD,
    Professor,Associate_Professor,Assistant_Professor,Lecturer
     FROM teacher_distribution t, university u
      WHERE t.year_PK=u.UYear AND u.Uid_PK=t.uid_PK AND
      t.year_PK='$teacheryear1' AND u.University_Name='North South University' ";

    $result = mysqli_query($conn, $sql12);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $data12[] = $row;
        }
    }
    echo json_encode($data12);
}
$conn->close();
