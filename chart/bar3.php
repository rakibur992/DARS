<?php
include 'db_con.php';

if (isset($_POST['year1'])) {
    $year=$_POST['year1'];

    $sql16 = "SELECT Expense_Scholarship, University_Name
     FROM university u,finances f WHERE u.UYear='$year' AND u.Uid_PK=f.UiD_pk AND u.UYear=f.year_pk";
    $result = mysqli_query($conn, $sql16);
    if (mysqli_num_rows($result) > 0) {

        // output data of one row
        foreach ($result as $row) {
            $uni1Name[] = $row['University_Name'];
            $s_expense[] = $row['Expense_Scholarship'];
        }
    }
    echo json_encode(array('University_Name' =>$uni1Name ,'Expense_Scholarship'=>$s_expense));
}
$conn->close();
