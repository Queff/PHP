
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>CV Quentin</title>
  <link rel="stylesheet" href="cv.css">
</head>
<body>

    <div class="name">
     	<h1> Quentin Queffurus </h1>
     	<h3> 26ans </h3>
	</div>
    
    <div class="menu">
    <nav>
     	<ul>
     	<li><a href="">Parcours Professionel</a></li>
     	<li><a href="?call_formation">Formation</a></li>
     	<li><a href="">Passion / Hobbies</a></li>
		</ul>
	</nav>
  </div>
      <?php
          if (isset($_GET['call_formation'])){
            include('formations.php');
          }

      ?>


</body>
</html>