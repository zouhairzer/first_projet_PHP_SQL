<?php
    require 'connexion.php';
    $id=$_GET['subcategory_id'];
    $sql="DELETE FROM sub_category where subcategory_id='$id'";
    $quer=mysqli_query($connect,$sql);
    if(isset($quer)){
        header("location:affichage.php");
    }
?>