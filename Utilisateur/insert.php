<?php
    require 'connection.php';
    
///modification d' utilisateur

    if(isset($_POST['user_id'])){
        $nom=$_POST['nom'];
        $email=$_POST['email'];
        $squad=$_POST['squad_id'];
        $LM=$_POST['leader_member'];
        $id = $_POST['user_id'];
        $sql="UPDATE utilisateur SET nom ='$nom', email='$email', squad_id= '$squad', Leader_member='$LM' WHERE user_id = '$id'";
        $q=mysqli_query($connection, $sql);
        if(isset($q)){
            header("location:aff.php");
        }

    } 

////insertion utilisateur

    else{
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $squad=$_POST['squad_id'];
    $LM=$_POST['leader_member'];
    
    require 'connection.php';

    $requete= "INSERT INTO utilisateur (nom, email,squad_id,Leader_member) VALUES('$nom', '$email','$squad','$LM')";
    $query=mysqli_query($connection, $requete);
    
    if(isset($query)){
        header("location:aff.php");
    }
}
?>



