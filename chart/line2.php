<?php
include 'db_con.php';

if (isset($_POST['uni1'])) {
    $uni1=$_POST['uni1'];

    $sql5 = "SELECT  Total_Income_own,u.UYear,Total_Expense
    FROM university u,finances f
    WHERE  u.Uid_PK=f.UiD_pk
    AND u.UYear=f.year_pk
    AND u.University_Name='$uni1'";

    $result = mysqli_query($conn, $sql5);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        foreach ($result as $row) {
            $income[] = $row['Total_Income_own'];
            $expense[] = $row['Total_Expense'];
            $year[] = $row['UYear'];
        }
    }
    echo json_encode(array('income'=>$income ,'year'=>$year,'expense'=>$expense ));
}
$conn->close();
