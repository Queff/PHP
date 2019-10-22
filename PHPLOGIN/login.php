<?php
	include ('BDD.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
</head>
<body>
	<form action="login.php" method="POST">
 			<h1> Se connecter </h1>

			<input type="text" name="prenom" value="prenom" >
				<input type="text" name="nom" value="nom" >
				<input type="text" name="email" value="email">
				<input type="submit" name ="submit" value="Seconnecter">

	</form>

			<h2> Vous n'êtes pas inscrit ? <a href="inscription.php">Cliquer Ici</a></h2>
		<?php

			if(isset($_POST['submit'])) {
					if($firstname == 'quentin' and $name == 'queffurus' and $mail == 'quentin.quef@gmail.com'){
					header('Location: cv.php');
				}
				else {
					echo "Me la fais pas à l'envers !";
				}
			}
		?>
                
</body>
</html>