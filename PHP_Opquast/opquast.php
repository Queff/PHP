<?php

include "glossaire.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>OPQUAST</title>
  <link rel="stylesheet" href="opquast.css">
</head>

<body>

		<h1>148 Astuces disponibles</h1>
		<button><a href="opquast.php" style="color:red;">Faire défiler</a></button>

<?php
	function random ($glossaire){

		$rand = rand(0, count($glossaire)-1);

		echo "<b>" . $glossaire[$rand]["title"] . "</b>" . "<br>" . $glossaire[$rand]["description"];

	} 
		random($glossaire);	

?>

</body>
</html>
