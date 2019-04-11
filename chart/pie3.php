<?php
include 'db_con.php';

if (isset($_POST['uni1']) and isset($_POST['year'])) {
    $uni1=$_POST['uni1'];
    $year=$_POST['year'];

    $sql17 = "SELECT  Total_Teacher_Adjunct,Professor,Associate_Professor,
    Assistant_Professor,Lecturer,Total_Teacher_grad_PHD
     FROM university u,teacher_distribution t WHERE u.UYear='$year' AND u.Uid_PK=t.uid_PK AND u.UYear=t.year_PK  AND u.University_Name='$uni1'";
    $result = mysqli_query($conn, $sql17);

    if (mysqli_num_rows($result) > 0) {

        // output data of one row
        $row = mysqli_fetch_assoc($result);

        $data_pie_exp1[0]=$row["Total_Teacher_Adjunct"] ;
        $data_pie_exp1[1]=$row["Professor"] ;
        $data_pie_exp1[2]=$row["Associate_Professor"] ;
        $data_pie_exp1[3]=$row["Assistant_Professor"] ;
        $data_pie_exp1[4]=$row["Lecturer"] ;
        $data_pie_exp1[5]=$row["Total_Teacher_grad_PHD"] ;
    }
    echo json_encode($data_pie_tt);
}
$conn->close();
