<?php
    include 'config/conn.php';
    $id = $_GET['id'];
    mysqli_query($conn, "delete from writers where id='$id'");
    header("location:index-writer.php");
?>