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

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 50px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
        $nom = $rows['nom'];
        include 'connexion.php';
        if(isset($_GET['category_id'])){
            $id = $_GET['category_id'];
            $req = "SELECT * FROM category WHERE category_id='$id'";
            $quer = mysqli_query($connect, $req);
            $rows = mysqli_fetch_assoc($quer);
            $nom = $rows['nom'];
        }
    ?>
    <form method="POST" action="insert.php?<?php if(isset($_GET['category_id'])){echo "id=update";}?>">
        <input type="text" name="nom" placeholder="Entrer la catégorie" value="<?php if(isset($_GET['category_id'])){echo $nom;} ?>"><br>
        <button type="submit">
            <?php
                if(isset($_GET['category_id'])){
                    echo "Modifier";
                } else {
                    echo "Envoyer";
                }
            ?>
        </button>
    </form>
    <a href="affichage.php">AFFICHER</a>
</body>
</html>
