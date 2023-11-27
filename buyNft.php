<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nftid = $_GET["nftid"];
    $userid = $_SESSION['userid'];

    $query = "UPDATE NFTs SET user_id='$userid', avail=0 WHERE id='$nftid'";
    $result = mysqli_query($mysql, $query);
}

?>