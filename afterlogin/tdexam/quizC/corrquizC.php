<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: http://cloud/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: http://cloud/login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz langage C</title>
	<link rel="stylesheet" type="text/css" href="quizC.css">
	<script type="text/javascript" src="jsC.js"></script>
	<meta charset="utf-8">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<nav class="menu">
		<ul class="rmenu">
			 <li class="avatar"><a class="menu-item2" href="http://cloud/afterlogin/profile.php"> <i class="fa fa-user-circle" aria-hidden="true"></i>  <?php echo $_SESSION['username']; ?></a>
          <div class="sub-content">
            <div class="sub-drop">
              <ul>
                <li><a href="http://cloud/afterlogin/profile.php">Profile</a></li>
                <li><a href="profile.php?logout='1'" style="color: red;">logout</a></li>
              </ul>
            </div>
          </div>
        </li>
			<li><a class="menu-item" href="http://cloud/afterlogin/aboutCloud.php"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></li>
			<li><a class="menu-item" href="http://cloud/afterlogin/cours.php"><i class="fa fa-book" aria-hidden="true"></i>
 Cours</a></li>
			<li><a class="menu-item" href="http://cloud/afterlogin/td.php"><i class="fa fa-pencil" aria-hidden="true"></i>
 Travaux dirigés</a></li>
			<li><a class="menu-item" href="http://cloud/afterlogin/td1.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Exam</a></li>
		</ul>
	</nav>
    <div id="container">
		<header>
			<h1 class="titreOs">Langage C (QUIZ)</h1>
			<p><h2> Réponses: </h2></p>
		</header>
		<section class="quizz">
			<div id="resultats">
				
				<h3>1. Le type "char" correspond à   ? : </h3>

				a. Un entier codé sur un unique octet <br>
				

				<h3>2.3. Le type "unsigned int" correspond à : ?  </h3>

				a. Un entier.<br>
				
				<h3>3.  Dans une structure if... </h3><br>

				a. Les parenthèses encadrant la condition logique sont obligatoires.<br>
				

				<h3>4.  L'instruction «switch» sert à éviter des instructions :</h3>
				
				c. if... else... imbriquées.<br>

				<h3>5. 2. Choisir la structure de boucle adéquate.<br>
                          Si le nombre d'itérations est connu, il est préférable d'utiliser : :</h3>

				a. for...<br>
				

				<h3>6. On considère deux tableaux T1 et T2. Peut-on copier le contenu de T2 dans T1 sans perdre d'information ?</h3>
				
				b. Elément par élément à l'aide d'une boucle dès que la taille de T1 est >= à la taille de T2 ?<br>
				

				<h3>7. Peut-on changer la taille d'un tableau en cours d'exécution du programme  ? </h3>

				
			    b. Non, c'est impossible.<br>


				<h3>8.  Que fait la fonction strncpy(s2, s3, 5)?</h3>


				a. Copie les 5 premiers octets de s3 dans la chaîne pointée par s2.<br>
				

				<h3>9.  Où sont déclarées les variables locales ? </h3>
				
				
				b. Au début de chaque fonction où elles interviennent.<br>
				

				<h3>10. Une fonction renvoie toujours une valeur.Comment cela se programme-t-il, à l'intérieur de la fonction ?</h3>


				a. En précédant la valeur à retourner par le mot-clé return.<br>


				<button id="suiv" type="button" ><a href="http://cloud/afterlogin/tdexam/quizC/quizC.php"> Retour </a></button>

			</div>
		</section>
	</div>
		<style type="text/css">
/*----------------styling sub----------*/
.sub-content {
	position: absolute;
	top:60px;
	overflow: hidden;
	background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(7,53,144,1) 43%, rgba(9,21,121,0.6727065826330532) 56%, rgba(0,212,255,1) 100%);
	max-height: 0;
}
.sub-content a {
	color: #fff;
	text-decoration:none;
}
.sub-drop {
	padding: 0;
}
.sub-drop ul {
	width: 100%;
	padding: 0;
	margin: 0;
	list-style-type: none;
}
.sub-drop ul li a {
	display: inline-block;
	padding: 10px 20px;
	font-size: 20px;
}
.sub-drop ul li :hover {
	background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,21,121,0.8015581232492998) 68%, rgba(129,96,230,0.11528361344537819) 81%, rgba(0,212,255,1) 100%);
	color: #fff;
	text-shadow: 1px 1px;
}
.menu ul li:hover .sub-content {
	max-height: 400px;
	overflow: visible;
	transition: max-height 0.3s ease-in;
	-mobikit-transition: max-height 0.3s ease-in;
	-moz-transition: max-height 0.3s ease-in;
}
.menu-item2 {
	display: inline-block;
	color: #fff;
	float: right;
	padding: 10px 20px;
	line-height: 40px;
	text-decoration: none;
	opacity: 1.5;
	font-size: 30px;
	
	
}
.menu-item2:hover {
	background-color: blue;
	
	</style>
</body>
</html>