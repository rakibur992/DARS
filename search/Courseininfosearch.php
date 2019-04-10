<?php
include 'db_con.php';
if (isset($_POST['cinput'])) {
    $courseyear1=$_POST['cinput'];

    $sql34 = "SELECT  Arts,Sociology,Education,
    Science,Business,Law,Pharmacy,Agriculture,Engineering_and_Technical,Economics
     FROM courses c, university u
      WHERE c.Year=u.UYear AND c.Uid=u.Uid_PK AND
      c.Year='$courseyear1' AND u.University_Name='North South University' ";

    $result = mysqli_query($conn, $sql34);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $datac[] = $row;
        }
    }
    echo json_encode($datac);
}
$conn->close();
