<?php
include 'db_con.php';

if (isset($_POST['uni1']) and isset($_POST['year'])) {
    $uni1=$_POST['uni1'];
    $year=$_POST['year'];

    $sql16 = "SELECT  Female_Student,Undergraduate_pass,Undergraduate_Hons,
    Undergraduate_Passed_Student_Normal,Undergraduate_Passed_Student_Hons,Undergraduate_Passed_Student_Eng_tech,
    Graduate_Passed_Student_Normal,Graduate_Passed_Student_Eng_tech,Student_Proverty,Student_Freedom_Fighter
     FROM university u,student_distribution s WHERE u.UYear='$year' AND u.Uid_PK=s.uID_PK AND u.UYear=s.year_PK  AND u.University_Name='$uni1'";
    $result = mysqli_query($conn, $sql16);

    if (mysqli_num_rows($result) > 0) {

        // output data of one row
        $row = mysqli_fetch_assoc($result);

        $data_pie_exp1[0]=$row["Female_Student"] ;
        $data_pie_exp1[1]=$row["Undergraduate_pass"] ;
        $data_pie_exp1[2]=$row["Undergraduate_Hons"] ;
        $data_pie_exp1[3]=$row["Undergraduate_Passed_Student_Normal"] ;
        $data_pie_exp1[4]=$row["Undergraduate_Passed_Student_Hons"] ;
        $data_pie_exp1[5]=$row["Undergraduate_Passed_Student_Eng_tech"] ;
        $data_pie_exp1[6]=$row["Graduate_Passed_Student_Normal"] ;
        $data_pie_exp1[7]=$row["Graduate_Passed_Student_Eng_tech"] ;
        $data_pie_exp1[8]=$row["Student_Proverty"] ;
        $data_pie_exp1[9]=$row["Student_Freedom_Fighter"] ;
    }
    echo json_encode($data_pie_exp1);
}
$conn->close();
