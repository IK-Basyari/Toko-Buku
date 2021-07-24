<?php
    include 'config/conn.php';
    $id = $_GET['id'];
    mysqli_query($conn, "delete from publisher where id='$id'");
    header("location:index-publisher.php");
?>