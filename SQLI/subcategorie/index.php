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

        input, select, button {
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
        require 'connexion.php';  
        if(isset($_GET['subcategory_id'])){
            $subid=$_GET['subcategory_id'];
            $que="SELECT * FROM sub_category where subcategory_id='$subid'";
            $quer= mysqli_query($connect, $que);
            $rows=mysqli_fetch_assoc($quer);
            $nom=$rows['nom'];
        }
    ?>
    <?php
        require 'connexion.php'; 
        $query = "SELECT * FROM category";
        $quercon = mysqli_query($connect, $query);
    ?>
    
    <form method="POST" action="insert.php?<?php if(isset($_GET['subcategory_id'])) {echo "id=update";}?>">
        <input type="text" name="nom" value="<?php if(isset($_GET['subcategory_id'])){echo $nom;} ?>"><br>
        <input type="hidden" name="subcategory_id" value = "<?php echo $_GET['subcategory_id'];?>">
        <select id="categoriess" name="categoriess">
            <?php
            while ($rows = mysqli_fetch_assoc($quercon)) {
                echo '<option value="' . $rows['category_id'] . '">' . $rows['nom'] . '</option>';
            }
            ?>
        </select>
        
        <button type="submit">
            <?php
                if(isset($_GET['subcategory_id'])){
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
