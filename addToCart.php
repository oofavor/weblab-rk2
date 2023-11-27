<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nftid = $_GET["nftid"];
    $userid = $_SESSION['userid'];
    echo $userid;

    $query = "INSERT INTO ShoppingCart (user_id, nft_id) VALUES ('$userid', '$nftid')";
    $result = mysqli_query($mysql, $query);
}

?>