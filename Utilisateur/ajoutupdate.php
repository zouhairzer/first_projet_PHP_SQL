<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		require 'connection.php';
		if(isset($_GET['user_id'])){
			$id = $_GET['user_id'];
			$sql="SELECT * FROM utilisateur where user_id= '$id'";
			$query=mysqli_query($connection,$sql);
			$rows=mysqli_fetch_assoc($query);
			$nom=$rows['nom'];
			$email=$rows['email'];
			$id=$rows['user_id'];
			$squad=$rows['squad_id'];
			$LM=$rows["Leader_member"];
		}
	?>
    <form method="POST" action="insert.php?<?php  if(isset($_GET['user_id'])) {echo "id=update";} ?>">
        <input type="text" name="nom" value="<?php if(isset($_GET['user_id'])){echo $nom;} ?>" placeholder="entre le nom" ><br><br>
		<input type="hidden" name="user_id" value="<?php if(isset($_GET['user_id'])){echo $id;} ?>" placeholder="entre le user_id">
        <input type="email" name="email" value="<?php if(isset($_GET['user_id'])){echo $email;} ?>" placeholder="entre l'email"><br><br>
        <input type="text" name="squad_id"  value="<?php if(isset($_GET['user_id'])){echo $squad;} ?>" placeholder="entre le id de squad"><br><br>
        <input type="text" name="leader_member"  value="<?php if(isset($_GET['user_id'])){echo $LM;} ?>" placeholder="entre la situation dans squad"><br><br>
        <button type="submit">
	<?php
		if(isset($_GET['user_id'])){
			echo "Modifier";
		}else{
			echo "Envoyer";
			}
	?>
	</button>
    </form><br>
    <a href="aff.php"></a>
</body>
</html>