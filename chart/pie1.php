<?php
include 'db_con.php';

if (isset($_POST['uni1']) and isset($_POST['year'])) {
    $uni1=$_POST['uni1'];
    $year=$_POST['year'];

    $sql16 = "SELECT  Female_Student,(s.Admitted_Student-s.Female_Student) AS Malestd
     FROM university u,student_distribution s WHERE u.UYear='$year' AND u.Uid_PK=s.uID_PK AND u.UYear=s.year_PK  AND u.University_Name='$uni1'";
    $result = mysqli_query($conn, $sql16);

    if (mysqli_num_rows($result) > 0) {

        // output data of one row
        $row = mysqli_fetch_assoc($result);

        $data_pie_exp1[0]=$row["Female_Student"] ;
        $data_pie_exp1[1]=$row["Malestd"] ;

    }
    echo json_encode($data_pie_exp1);
}
$conn->close();
