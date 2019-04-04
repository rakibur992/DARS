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

//generating bar chart

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


//generating doughnut chart

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
//generating line chart

  $sql3 = "SELECT  Admitted_Student,u.UYear
  FROM university u,student_distribution sd
  WHERE  u.Uid_PK=sd.uID_PK
  AND u.UYear=sd.year_PK
  AND u.University_Name='North South University'";

$result = mysqli_query($conn, $sql3);
$i=0;
while ($row = mysqli_fetch_assoc($result)) {
    $u1_data[$i]=$row["Admitted_Student"];
    $u1_year[$i]=$row["UYear"];
    $i+=1;
}

$sql4 = "SELECT  Admitted_Student
FROM university u,student_distribution sd
WHERE  u.Uid_PK=sd.uID_PK
AND u.UYear=sd.year_PK
AND u.University_Name='Bangladesh University of Business and Technology'";

$result = mysqli_query($conn, $sql4);
$i=0;
while ($row = mysqli_fetch_assoc($result)) {
    $u2_data[$i]=$row["Admitted_Student"];
    $i+=1;
}

// Generating Expense/Income Chart


  $sql5 = "SELECT  Total_Income_own,u.UYear,Total_Expense
  FROM university u,finances f
  WHERE  u.Uid_PK=f.UiD_pk
  AND u.UYear=f.year_pk
  AND u.University_Name='North South University'";

$result = mysqli_query($conn, $sql5);
$i=0;
while ($row = mysqli_fetch_assoc($result)) {
    $u_income[$i]=$row["Total_Income_own"];
    $u5_year[$i]=$row["UYear"];
    $u_expense[$i]=$row["Total_Expense"];
    $i+=1;
}
//Generating Student distribution charts
$sql16 = "SELECT  Female_Student,Undergraduate_pass,Undergraduate_Hons,
Undergraduate_Passed_Student_Normal,Undergraduate_Passed_Student_Hons,Undergraduate_Passed_Student_Eng_tech,
Graduate_Passed_Student_Normal,Graduate_Passed_Student_Eng_tech,Student_Proverty,Student_Freedom_Fighter
 FROM university u,student_distribution s WHERE u.UYear='2017' AND u.Uid_PK=s.uID_PK AND u.UYear=s.year_PK  AND u.University_Name='North South University'";
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
$sql17 = "SELECT  Arts,Sociology,Education,Science,Business,Law,Pharmacy,Agriculture,Engineering_and_Technical,Economics
 FROM university u,courses c WHERE u.UYear='2017' AND u.Uid_PK=c.Uid AND u.UYear=c.Year  AND u.University_Name='North South University'";
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
}



$conn->close();
