<?php
include 'db_con.php';

if (isset($_POST['rinput'])) {
    $ryear1=$_POST['rinput'];

    $sqlep = "SELECT  Research_Journal,Research_Project_Completed,Published_Journal_Foreign,
    Publish_Journal_Local,Publish_Journal_Peer_review
    FROM research_and_publictaion rp, university u
    WHERE rp.Pyear_pk=u.UYear AND u.Uid_PK=rp.UiD_pk AND
    rp.Pyear_pk='$ryear1' AND u.University_Name='North South University' ";

    $result = mysqli_query($conn, $sqlrp);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        foreach ($result as $row) {
            $data14[] = $row;
        }
    }
    echo json_encode($data14);
}
$conn->close();
