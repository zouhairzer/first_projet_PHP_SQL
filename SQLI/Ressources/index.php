<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php 
        include 'connectressource.php';
        $id=$_GET['ressource_id'];
        if(isset($_GET['ressource_id'])){
            $id=$_GET['ressource_id'];
            $sql="SELECT * FROM ressource WHERE ressource_id='$id'";
            $Q=mysqli_query($conn,$sql);
            $Row=mysqli_fetch_assoc($Q);
            $Pid=$Row['projet_id'];
            $Sid=$Row['squad_id'];
            $Cid=$Row['category_id'];
            $Subid=$Row['subcategory_id'];
        }
    ?>

    <form method="POST" action="insert.php?<?php if(isset($_GET['ressource_id'])) {echo "id=update";} ?>">
        <input type="hidden" name="ressource_id" value="<?php echo $_GET['ressource_id']; ?>"><br><br>
        <input type="text" placeholder="entrer le id de projet" name="projet_id" require value="<?php if(isset($_GET['ressource_id'])){ echo $Pid; } ?>"><br><br>
        <input type="text" placeholder="entrer le id de squad" name="squad_id" require value="<?php if(isset($_GET['ressource_id'])){ echo $Sid; } ?>"><br><br>
        <input type="text" placeholder="entrer le id de category" name="category_id" require value="<?php if(isset($_GET['ressource_id'])){ echo $Cid; } ?>"><br><br>
        <input type="text" placeholder="entrer le id de subcategory" name="subcategory_id" require value="<?php if(isset($_GET['ressource_id'])){ echo $Subid; } ?>"><br><br>
        <button type="submit">
            <?php
                if(isset($_GET['ressource_id'])){
                    echo "Modifier";
                }else{
                    echo "Envoyer";
                }
            ?>
        </button>
    </form>
</body>
</html>