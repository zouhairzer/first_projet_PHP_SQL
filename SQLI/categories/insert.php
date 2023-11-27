<?php
    if(isset($_POST['category_id'])){
        $nom=$_POST['nom'];
        $id=$_POST['category_id'];
        include 'connexion.php';
        $requ="UPDATE category SET nom='$NOM' WHERE category_id='$id'";
        $quer=mysqli_query($connect,$requ);
        if(isset($quer)){
            header ("location:affichage.php");
        }
    }
    else{
        $nom=$_POST['nom'];
        include 'connexion.php';
        $req="INSERT INTO category(nom) VALUES('$nom')";
        $que=mysqli_query($connect,$req);
    if(isset($que)){
        header ('location:index.php');
    }
    }
?>