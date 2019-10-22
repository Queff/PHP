
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
    
    <ul>
     	<div class="parcours"><li><a href="?call_pro">Parcours Professionel</a></li></div>
     	<div class="formation"><li><a href="?call_formation">Formation</a></li></div>
     	<div class="passion"><li><a href="?call_passion">Passion / Hobbies</a></li></div>
		</ul>
	   
      </div>

      <?php
          if (isset($_GET['call_pro'])){
            include('pro.php');
          }
          if (isset($_GET['call_formation'])){
            include('formations.php');
          }
          if (isset($_GET['call_passion'])){
            include('passion.php');
          }

      ?>


</body>
</html>