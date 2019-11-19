<?php
session_start();

  try{ 
  $bdd= new PDO("mysql:host=localhost;dbname=exercicelogin","quentin","opelcorsa13"); 
      }
catch(PDOException $error)
  {
  echo "erreur" . $error-> getMessages(); 
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, user-scalable=no">
  <title>CV Quentin</title>
  <link rel="stylesheet" href="cv.css">
  <style>
    .présentation{
      font-size: 16px;
      font-weight: bold;
    }
    footer{
      text-align: center;
      font-weight: bold;
      margin-top: 50px;
    }
    
  </style>
</head>
<body>

<header>
    <div class="name">
      <img  class="imagecv" src="imagecv.png" alt="imagecv">
        <div class="titre">
     	      <h1> Quentin Queffurus</br></h1>
            <div class="metier">DEVELOPPEUR WEB JUNIOR</div>
        </div>
        <div class="infos">
     	      <p>  &#128242; 06.77.29.72.84</br></br>
                 &#128231; quentin.quef@gmail.com</br></br>
                 &#x2709;  6 Avenue Arthur Rimbaud</br>
                 13470 Carnoux en Provence</br></p>
        </div>   
    </div>
</header>
    
    <div class="menu">
    
    <ul>
     	<div class="parcours"><li><a href="?call_pro">Parcours Professionel</a></li></div>
     	<div class="formation"><li><a href="?call_formation">Formation/ Diplômes</a></li></div>
     	<div class="competence"><li><a href="?call_competence">Compétences</a></li></div>
		</ul>
	   
      </div>

      <div class="présentation"><p>Après plusieurs années d'expérience en tant que technicien ainsi que dans la vente, j'ai souhaité me reconvertir dans le développement web.</p> Actuellement dans une formation certifiante qui se finit en Mai 2019, cela va me permettre d'acquérir toutes les connaissances techniques requises et de les appliquer dans ce cadre, sur des projets professionnels concluants.</div>

      <?php
          if (isset($_GET['call_pro'])){
            include('pro.php');
          }
          if (isset($_GET['call_formation'])){
            include('formations.php');
          }
          if (isset($_GET['call_competence'])){
            include('compétence.php');
          }

      ?> 
      
<footer>
  <a href="deconnexion.php">Se deconnecter</a>
</footer>

</body>
</html>