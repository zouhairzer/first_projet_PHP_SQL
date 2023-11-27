<?php

require "connectressource.php";

    if(isset($_POST['ressource_id'])){
        $id=$_POST['ressource_id'];
        $Pid = $_POST['projet_id'];
        $Sid = $_POST['squad_id'];
        $Cid = $_POST['category_id'];
        $Subid = $_POST['subcategory_id'];
        $requete="UPDATE ressource SET projet_id='$Pid', squad_id='$Sid', category_id='$Cid', subcategory_id='$Subid' WHERE ressource_id='$id'";
        $query=mysqli_query($conn,$requete);
        if(isset($query)){
            header ('location:affichressource.php');
        }
    }
    
    else{
        $Pid = $_POST['projet_id'];
        $Sid = $_POST['squad_id'];
        $Cid = $_POST['category_id'];
        $Subid = $_POST['subcategory_id'];
        $requete="INSERT INTO ressource(projet_id, squad_id, category_id, subcategory_id) VALUES('$Pid' ,'$Sid','$Cid' ,'$Subid')";
        $query=mysqli_query($conn,$requete);
        if(isset($query)){
            header ('location:affichressource.php');
        }
    }
?>
