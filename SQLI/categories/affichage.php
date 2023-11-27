<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
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
    <h1>Categories</h1>
    <a href="../Utilisateur\aff.php">Home</a>
    <a href="../subcategorie\affichage.php">Subategories</a>
    <?php echo "<a href='index.php'>Ajouter</a>"; ?>
    <hr>
    <table border="1" >
        <tr>
            <th>Nom</th>
            <th>Category_id</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        <?php
            include 'connexion.php';
            $req = "SELECT * FROM category ";
            $que = mysqli_query($connect, $req);
            while ($rows = mysqli_fetch_assoc($que)) {
                $id = $rows['category_id'];
                echo "<tr>";
                echo "<td>".$rows['nom']."</td>";
                echo "<td>".$rows['category_id']."</td>";
                echo "<td><a href='delete.php?category_id=".$id."'>Supprimer</a>";
                echo "<td><a href='index.php?category_id=".$id."'>Modifier</a>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
