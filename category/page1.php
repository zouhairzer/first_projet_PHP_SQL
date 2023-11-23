<?php
    $nom=$_POST['nom']; 
    require 'connect2.php';
    $req="INSERT INTO category (nom) VALUE('$nom')";
    $query=mysqli_query($conexion, $req);
    if(isset($query)){
        header ("location: affichagecategory.php");
    }

?>