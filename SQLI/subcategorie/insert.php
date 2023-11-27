<?php
    if(isset($_POST['subcategory_id'])){
        require 'connexion.php';
        $nom = $_POST['nom'];
        $nomcate=$_POST['categoriess'];
        $categorye=$_GET['categoriess'];
        $subid = $_POST['subcategory_id']; 
        $req = "UPDATE sub_category SET nom='$nom',category_id='$nomcate'  WHERE subcategory_id='$subid'";
        $quer = mysqli_query($connect, $req);

        if(isset($quer)){
            header('location: affichage.php');
        }
    }else{  
    require 'connexion.php';
    $nom=$_POST['nom'];
    $categorye=$_POST['categoriess'];
    $requete="INSERT INTO sub_category(nom,category_id) VALUES('$nom','$categorye')";
    $query=mysqli_query($connect, $requete);
    if(isset($query)){
        header ('location:affichage.php');
    }
}
?>