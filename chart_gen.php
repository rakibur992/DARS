<?php

$servername = "localhost";
$username = "root";
$password = "rakib";
$dbname = "dars2.0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT  University_Name,Total_Student_Studying FROM university u,student_distribution s WHERE UYear='2017' AND u.Uid_PK=s.uID_PK AND u.UYear=s.year_PK ";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    $i=0;
    while ($row = mysqli_fetch_assoc($result)) {
        $data_bar[$i]=$row["University_Name"] ;
        $data2_bar[$i]=$row["Total_Student_Studying"] ;
        $i+=1;
    }
}

$sql2 = "SELECT  Total_Expense_Education,Expense_Research,Expense_Salary,
Expense_Scholarship,Expense_Transport,Expense_Electricity,
Expense_Infrustructure_maintainence,Expense_Medical,Expense_Misc,Expense_per_student
 FROM university u,finances f WHERE u.UYear='2017' AND u.Uid_PK=f.UiD_pk AND u.UYear=f.year_pk  AND u.University_Name='North South University'";
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
    $data_pie_exp[8]=$row["Expense_per_student"] ;
    $data_pie_exp[9]=$row["Expense_Infrustructure_maintainence"] ;
}






$conn->close();
