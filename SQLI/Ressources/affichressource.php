<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Ressource</h1><hr>
        <table border="1" width="70%">
            <tr>
                <th>Ressource_id</th>
                <th>projet_id</th>
                <th>squad_id</th>
                <th>category_id</th>
                <th>subcategory_id</th>
            </tr>
            <?php
            include "connectressource.php";
            $requete="SELECT * FROM ressource";
            $query=mysqli_query($conn,$requete);
            while($rows=mysqli_fetch_assoc($query)){
                $id=$rows['ressource_id'];
                echo "<tr>";
                echo "<td>".$rows['ressource_id']."</td>";
                echo "<td>".$rows['projet_id']."</td>";
                echo "<td>".$rows['squad_id']."</td>";
                echo "<td>".$rows['category_id']."</td>";
                echo "<td>".$rows['subcategory_id']."</td>";
                echo "<td><a href='deleteressource.php?ressource_id=".$id."'>Supprimer</a></td>";
                echo "<td><a href='index.php?ressource_id=".$id."'>Modifier</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
</body>
</html>