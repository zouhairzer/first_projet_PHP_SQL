<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        a {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            color: #3498db;
            text-decoration: none;
            border: 1px solid #3498db;
            border-radius: 3px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Tbale des utilisateurs</h1>
    <div class="sidebar">
        <a href="../Utilisateur\aff.php">Home</a>
        <a href="../subcategorie\affichage.php">Categories</a>
        <a href="../categories\affichage.php">Subcategories</a>
    </div>
    <hr>
    <table border="1" width="90%">
        <tr>
        <th>nom          </th>
        <th>email         </th>
        <th>user_id      </th>
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
                echo "<td><a href='delete.php?user_id=".$id."'>supprimer</td>";
                echo "<td><a href='ajoutupdate.php?user_id=".$id."'>Modifier</td>";
            }
    ?>
    </table>
</body> 
</html>