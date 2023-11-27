<?php
    include "connectressource.php";
    $id=$_GET['ressource_id'];
    $Req="DELETE FROM ressource  WHERE ressource_id='$id'";
    $Que=mysqli_query($conn,$Req);
    if(isset($Que)){
        header ('location:affichressource.php');
    }
?>