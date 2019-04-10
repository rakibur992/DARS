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
if (isset($_POST['sinput'])) {
    $stdyear1=$_POST['sinput'];

    $sql13 = "SELECT  Admitted_Student,Female_Student,Total_Student_Studying,
    Total_Female_Student_Studying,Undergraduate_pass,Undergraduate_Hons,Undergraduate_Passed_Student_Normal,
    Undergraduate_Passed_Student_Hons,Undergraduate_Passed_Student_Eng_tech,Graduate_Passed_Student_Normal,
    Graduate_Passed_Student_Eng_tech,Student_Proverty,Student_Freedom_Fighter
     FROM student_distribution st, university u
      WHERE st.year_PK=u.UYear AND u.Uid_PK=st.uID_PK AND
      st.year_PK='$stdyear1' AND u.University_Name='North South University' ";

    $result = mysqli_query($conn, $sql13);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $data13[] = $row;
        }
    }
    echo json_encode($data13);
}
$conn->close();
