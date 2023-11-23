<?php
    require 'connection.php';
    $id=$_GET['user_id'];
    $sql="DELETE FROM utilisateur where user_id='$id'";
    $query=mysqli_query($connection,$sql);
    if(isset($query)){
        header("location:aff.php");
    }
?>
