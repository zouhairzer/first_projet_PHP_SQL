<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>category</h1><hr>
    <table border="1" width="30%">
        <tr>
            <th>nom</th>
            <th>category_id</th>
            <th>Supprimer</th>
            <th>Ajouter</th>
        </tr>
        <?php
            require 'connect2.php';
            $requete = "SELECT * FROM category";
            $query=mysqli_query($conexion, $requete);
            while($rows = mysqli_fetch_assoc($query)){
                $id=$rows['category_id'];
                echo "<tr>";
                echo "<td>".$rows["nom"]." </td>";
                echo "<td>".$rows["category_id"]." </td>";
                echo "<td><a href='deletecategory.php?category_id=".$id."'>Supprimer</a></td>";
                echo "<td><a href='category.php'>Ajouter</a></td></td>";
                echo "</tr>";
            }    
        ?>
    </table>
</body>
</html>