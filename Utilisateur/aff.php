<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tbale de les utilisateurs</h1><hr>
    <table border="1" width="90%">
        <tr>
        <th>nom          </th>
        <th>emal         </th>
        <th>user_id      </th>
        <th>squad_id     </th>
        <th>Leader_member</th>
        <th>Supprimer</th>
        <th>Modifier</th>
        </tr>
    <?php
        require 'connection.php';
        $requete= "SELECT * FROM utilisateur";
        $query=mysqli_query($connection, $requete);
        while($rows=mysqli_fetch_assoc($query)){
                $id=$rows['user_id'];
            echo "<tr>";
                echo "<td>".$rows['nom']."</td>";
                echo "<td>".$rows['email']."</td>";
                echo "<td>".$rows['user_id']."</td>";
                echo "<td>".$rows['squad_id']."</td>";
                echo "<td>".$rows["Leader_member"]."</td>";
                echo "<td><a href='delete.php?user_id=".$id."'>supprimer<a></td>";
                echo "<td><a href='ajoutupdate.php?user_id=".$id."'>Modifier<a></td>";
            }
    ?>
    </table>
</body> 
</html>