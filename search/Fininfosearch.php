<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dars2.0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['finput'])) {
    $fyear1=$_POST['finput'];

    $sqlf = "SELECT  Total_Income_own,Income_Foreign_Fund,Total_Expense,
    Total_Expense_Education,Expense_Research,Expense_Salary,Expense_Scholarship,
    Expense_Transport,Expense_Electricity,Expense_Infrustructure_maintainence,
    Expense_Medical,Expense_Misc,Expense_per_student
     FROM finances f, university u
      WHERE f.year_pk=u.UYear AND u.Uid_PK=f.UiD_pk AND
      f.year_PK='$fyear1' AND u.University_Name='North South University' ";

    $result = mysqli_query($conn, $sqlf);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $dataf[] = $row;
        }
    }
    echo json_encode($dataf);
}
$conn->close();
