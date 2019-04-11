<?php
include 'db_con.php';
if (isset($_POST['uni1exp1']) and isset($_POST['yearexp1'])) {
    $uni1=$_POST['uni1exp1'];
      $year=$_POST['yearexp1'];
$sql2 = "SELECT  Total_Expense_Education,Expense_Research,Expense_Salary,
Expense_Scholarship,Expense_Transport,Expense_Electricity,Expense_Medical,Expense_Misc,
Expense_Infrustructure_maintainence
 FROM university u,finances f WHERE u.UYear='$year' AND u.Uid_PK=f.UiD_pk AND u.UYear=f.year_pk  AND u.University_Name='$uni1'";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {

    // output data of one row
    $row = mysqli_fetch_assoc($result);

    $data_pie_exp[0]=$row["Total_Expense_Education"] ;
    $data_pie_exp[1]=$row["Expense_Research"] ;
    $data_pie_exp[2]=$row["Expense_Salary"] ;
    $data_pie_exp[3]=$row["Expense_Scholarship"] ;
    $data_pie_exp[4]=$row["Expense_Transport"] ;
    $data_pie_exp[5]=$row["Expense_Electricity"] ;
    $data_pie_exp[6]=$row["Expense_Medical"] ;
    $data_pie_exp[7]=$row["Expense_Misc"] ;
    $data_pie_exp[8]=$row["Expense_Infrustructure_maintainence"] ;
      echo json_encode($data_pie_exp);
}
$conn->close();
}
