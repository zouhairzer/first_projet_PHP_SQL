<?php
    require 'connect2.php';
    $cid=$_GET['category_id'];
    $sql="DELETE FROM category where category_id ='$cid'";
    $query=mysqli_query($conexion,$sql);
    if(isset($query)){
        header("location:affichagecategory.php");
    }
?>