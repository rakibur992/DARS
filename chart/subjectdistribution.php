<?php
include 'db_con.php';
if (isset($_POST['uni1subject']) and isset($_POST['yearsubject'])) {
    $uni1=$_POST['uni1subject'];
      $year=$_POST['yearsubject'];
$sql17 = "SELECT  Arts,Sociology,Education,Science,Business,Law,Pharmacy,Agriculture,Engineering_and_Technical,Economics
 FROM university u,courses c WHERE u.UYear='$year' AND u.Uid_PK=c.Uid AND u.UYear=c.Year  AND u.University_Name='$uni1'";
$result = mysqli_query($conn, $sql17);

if (mysqli_num_rows($result) > 0) {

    // output data of one row
    $row = mysqli_fetch_assoc($result);

    $data_pie_exp2[0]=$row["Arts"] ;
    $data_pie_exp2[1]=$row["Sociology"] ;
    $data_pie_exp2[2]=$row["Education"] ;
    $data_pie_exp2[3]=$row["Science"] ;
    $data_pie_exp2[4]=$row["Business"] ;
    $data_pie_exp2[5]=$row["Law"] ;
    $data_pie_exp2[6]=$row["Pharmacy"] ;
    $data_pie_exp2[7]=$row["Agriculture"] ;
    $data_pie_exp2[8]=$row["Engineering_and_Technical"] ;
    $data_pie_exp2[9]=$row["Economics"] ;
      echo json_encode($data_pie_exp2);
}
$conn->close();
}
