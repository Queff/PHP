<?php
	session_start();
	try{ // pour essayer ="try" la connexion à la base de donnees
	$bdd= new PDO("mysql:host=localhost;dbname=exercicelogin","quentin","opelcorsa13"); // pour connecter ton fichier .PHP a ta base de donnees, on nomme une variable($bdd) puis = new PDO(c'est une fonction qui approvisionne la BDD) on tape mysql (c'est le logiciel qu'on utilise pour la bdd, puis :host c'est où est situé la page internet, =localhost ta page internet, puis ;dbname= "nom de ta base de donnees", puis "login", puis mot de passe : le login et le mot de passe sont ceux que tu a donné à ton PHPmyAdmin.
	}
catch(PDOException $error){
	echo "erreur" . $error-> getMessages(); // message test pour voir si la bdd est connectee (tu le marques tel quel)
	}

if(isset($_POST['formconnexion']))
{
	$prenomco = htmlspecialchars($_POST['prenomco']);
	$nomco = htmlspecialchars($_POST['nomco']);
	$emailco = htmlspecialchars($_POST['emailco']);

	if(!empty($_POST['prenomco']) AND !empty($_POST['nomco']) AND !empty($_POST['emailco']))// si les champs sont différents du vide on dit "ok" sinon "non"
 	{
 		$requser = $bdd->prepare('SELECT * FROM log WHERE prenom = ? AND nom = ? AND email = ?');
 		$requser->execute(array($prenomco, $nomco, $emailco));
 		$row = $requser->fetch(PDO::FETCH_ASSOC);
 		$userexist = $requser->rowCount();

 		if($userexist == 1)
 		{
 			$userinfo = $requser->fetch();
 			$_SESSION['id'] = $userinfo['id'];
 			$_SESSION['prenom'] = $userinfo['prenom'];
 			$_SESSION['nom'] = $userinfo['nom'];
 			$_SESSION['email'] = $userinfo['email'];
 			header("Location: cv.php?id=".$_SESSION['id']);//
 		}
 		else
 		{
 			$erreur = "Mauvais identifiant";
 		}
 	}
	else
	{
		$erreur = "Tous les champs doivent être complétés";
	}
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
</head>
<body>
	<div align="center">
	<h1> Connexion </h1>

	<form action="" method="POST"> <!-- action pour savoir sur quelle page tu te redirige -->

		<label for="prenom">Prenom: </label>
		<p><input type="text" name="prenomco" id="prenom" placeholder="Votre prenom" size="30" ></p>
		<label for="nom">Nom: </label>
		<p><input type="text" name="nomco" id="nom" placeholder="Votre nom" size="30"></p>
		<label for="mail">Mail :</label>
		<p><input type="mail" name="emailco" id="email" placeholder="Mail" size="30"></p>

		<p><input type="submit" name="formconnexion" value="Se connecter"></p>

	</form>

			<h2> Vous n'êtes pas inscrit ? <a href="inscription.php">Cliquer Ici</a></h2>
	</div>
	<?php
			if(isset($erreur))
			{
				echo '<font color="red">'.$erreur."</font>";
			}
	?>
                
</body>
</html>