<?php
    include 'config/conn.php';
    $id = $_GET['id'];
    mysqli_query($conn, "delete from books where id='$id'");
    header("location:index.php");
?>