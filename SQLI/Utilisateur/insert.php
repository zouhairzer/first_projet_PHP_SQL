<?php
    require 'connection.php';
    
///modification d' utilisateur

    if(isset($_POST['user_id'])){
        $nom=$_POST['nom'];
        $email=$_POST['email'];
        $id = $_POST['user_id'];
        $sql="UPDATE utilisateur SET nom ='$nom', email='$email' WHERE user_id = '$id'";
        $q=mysqli_query($connection, $sql);
        if(isset($q)){
            header("location:aff.php");
        }

    } 

////insertion utilisateur

    else{
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    require 'connection.php';
    $requete= "INSERT INTO utilisateur (nom, email,squad_id,Leader_member) VALUES('$nom', '$email','$squad','$LM')";
    $query=mysqli_query($connection, $requete);
    
    if(isset($query)){
        header("location:aff.php");
    }
}
?>



