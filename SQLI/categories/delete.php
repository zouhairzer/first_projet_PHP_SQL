<?php
    include 'connexion.php';
    $id=$_GET['category_id'];
    $req="DELETE FROM category WHERE category_id='$id'";
    $quer=mysqli_query($connect,$req);
    if(isset($quer)){
        header ('location:affichage.php');
    }
?>