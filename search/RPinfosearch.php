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
if (isset($_POST['rinput'])) {
    $ryear1=$_POST['rinput'];

    $sql14 = "SELECT  Research_Journal,Research_Project_Completed,Published_Journal_Foreign,
    Publish_Journal_Local,Publish_Journal_Peer_review
    FROM research_and_publictaion rp, university u
    WHERE rp.Pyear_pk=u.UYear AND u.Uid_PK=rp.UiD_pk AND
    rp.Pyear_pk='$ryear1' AND u.University_Name='North South University' ";

    $result = mysqli_query($conn, $sql14);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $data14[] = $row;
        }
    }
    echo json_encode($data14);
}
$conn->close();
