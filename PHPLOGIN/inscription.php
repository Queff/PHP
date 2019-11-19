 <?php

try{ // pour essayer ="try" la connexion à la base de donnees
	$bdd= new PDO("mysql:host=localhost;dbname=exercicelogin","quentin","opelcorsa13"); // pour connecter ton fichier .PHP a ta base de donnees, on nomme une variable($bdd) puis = new PDO(c'est une fonction qui approvisionne la BDD), on ouvre les parenthese, on tape mysql (c'est le logiciel qu'on utilise pour la bdd, puis :host c'est où est situé la page internet, =localhost ta page internet, puis ;dbname= "nom de ta base de donnees", puis "damery=login", puis "damery= mot de passe") le login et le mot de passe sont ceux que tu a donné à ton PHPmyAdmin.

	}
catch(PDOException $error){
	echo "erreur" . $error-> getMessages(); // message test pour voir si la bdd est connectee (tu le marques tel quel)
	}

	if(isset($_POST['forminscription']))//Si la fonction ' forminscription existe 
 	{

 	$prenom = htmlspecialchars($_POST['prenom']); //fonction qui enleve tous les caractères html , empecher injection de code!
 	$nom = htmlspecialchars($_POST['nom']);
 	$mail = htmlspecialchars($_POST['email']);

 		if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['email']))// si les champs sont différents du vide on dit "ok" sinon "non"
 		{
 			$prenomlength = strlen($prenom);
 			if($prenomlength <= 100)
 			{
 			
 			$reqmail = $bdd->prepare("SELECT * FROM log WHERE email = ?");
 			$reqmail->execute(array($mail));
 			$mailexist = $reqmail->rowCount();
 		
 				if($mailexist == 0)
 				{

 			$insert = $bdd->prepare("INSERT INTO log ( prenom, nom, email)VALUES ('$prenom' , '$nom' , '$mail')");
 			// pour creer des donnees dans ta bdd a chaque connexion, cela rajoute des ligne dans ton tableau de ta base de données,  la fonction signifie textuellement: variable insert est égale à la variable BDD dans laquelle je vais faire une requête( je te demande d'inserrer dans ma table "coordonnées" de ma bDD, les éléments suivants $nom, $prenom, $age)
			// dans la fonction "query" ce qu'il y a entre () ceus sont des commande mySql.
 			$insert->execute(array($prenom, $nom, $mail));
 			header('Location: login.php');
 			}
 		
 		else
 		{
 			$erreur = "Adresse mail déjà utilisés";
 			
 		}
 	}

 	else
 	{
 		$erreur = "Votre prenom ne doit pas depasser 100 caractères";
 	}
 }

 	else 
 	{
 		$erreur = "Tous les champs doivent être complétés !";
 	}
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test BDD</title>
</head>
<body>
	<div align="center">
	<h1> Inscription </h1>

	<form action="" method="POST"> <!-- action pour savoir sur quelle page tu te redirige -->

		<label for="prenom">Prenom: </label>
		<p><input type="text" name="prenom" id="prenom" placeholder="Votre prenom" size="30" ></p>
		<label for="nom">Nom: </label>
		<p><input type="text" name="nom" id="nom" placeholder="Votre nom" size="30"></p>
		<label for="mail">Mail :</label>
		<p><input type="mail" name="email" id="email" placeholder="Mail" size="30"></p>

		<p><input type="submit" name="forminscription" value="Enregistrer"></p>

	</form>
	</div>

	
		<?php
			if(isset($erreur))
			{
				echo '<font color="red">'.$erreur."</font>";
			}
		?>
	
</body>
</html>