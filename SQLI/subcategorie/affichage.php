<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcategories</title>
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
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        a {
            text-decoration: none;
            padding: 8px 16px;
            border: 2px solid #3498db;
            color: #3498db;
            border-radius: 5px;
            margin-right: 5px;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Subcategories</h1>
    <a href="../Utilisateur\aff.php">Home</a>
    <a href="../categories\affichage.php">Categories</a>
    <?php echo "<a href='index.php'>Ajouter</a>"; ?>
    <hr>
    <table>
        <tr>
            <th>Subcategory</th>
            <th>Category</th>
            <th>Subcategory ID</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        <?php
            require 'connexion.php';
            $requete = "SELECT sub_category.*, category.nom AS category_nom FROM sub_category JOIN category ON category.category_id = sub_category.category_id";
            $Query = mysqli_query($connect, $requete);
            
            while($rows = mysqli_fetch_assoc($Query)){
                echo "<tr>";
                echo "<td>".$rows['nom']."</td>";
                echo "<td>".$rows['category_nom']."</td>";
                echo "<td>".$rows['subcategory_id']."</td>";
                echo "<td><a href='delete.php?subcategory_id=".$rows['subcategory_id']."'>Delete</a></td>";
                echo "<td><a href='index.php?subcategory_id=".$rows['subcategory_id']."'>Modifier</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
