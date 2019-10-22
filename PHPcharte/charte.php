<?php
	include("db.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Charte de l'apprenant</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Charte de l'apprenant</h1>

	<h2>Fonctionnement global de la promo / Boon of the tiger</h2>

		<ul>
			<li>Le confort de tou.te.s en compte tu prendras</li>
			<li>Des locaux propres tu préserveras</li>
			<li>Collectivement le vendredi tu rangeras</li>
			<li>Ta météo brièvement tu feras</li>
			<li>La veille tu respecteras</li>
			<li>La feuille de présence tu signeras</li>
			<li>Dans le travail concentré tu seras</li>
		</ul>q

	<h2>Etat d'esprit / vision / Hidden war</h2>

		<ul>
			<li>A la réussite collective tu oeuvreras</li>
			<li>Plus haut que ton cul tu ne pèteras</li>
			<li>Quand la parole tu prendras l'attention tu auras</li>
			<li>Au bien être de tous tu veilleras</li>
			<li>Dans le partage tu travailleras</li>
			<li>Avec patience et persévérance tu apprendras</li>
			<li>Ton utopote tu respecteras</li>
			<li>Ton esprit ouvert tu garderas</li>
			<li>En autonomie tu feras mais l'esprit de groupe tu protègeras</li>
		</ul>

	<h2>Engagements de l'apprenant.e / ligthningcrushers</h2>

		<ul>
			<li>Assidu tu seras</li>
			<li>Le temps de parole tu respecteras</li>
			<li>Tes formateurs tu respecteras</li>
			<li>L'entraide tu pratiqueras</li>
			<li>Ta curiosité tu aiguiseras</li>
			<li>Ta connaissance constamment tu élargiras</li>
			<li>Dans tes recherches, méthodique tu seras</li>
			<li>Ces règles tu appliqueras</li>
			<li>le matériel tu respecteras</li>
		</ul>

	<div>
		<form method="POST" action="charte.php">
			<p>
        		<label for="name">Votre Nom: </label>
        			<input type="text" name="name" id="name" placeholder="Ex : Zozor" size="30" />
    		</p>
		</form>
	</div>

	<div>	<input type="submit" value="Envoyer" /><br /> </div>

	<h3> Liste des signataires </h3>
	 <?php echo $_POST['name']; ?>
	 <?php echo 34; ?>
	 	
</body>

</html>