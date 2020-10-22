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
			<p>Répondre aux questions suivantes :</p>
		</header>
		<section class="quizz">
			<div id="resultats">
				<form name="quizForm" onsubmit="return submitAnswers()">
				<h3>1. Le type "char" correspond à   ? : </h3>
				<input type="radio" name="q1" value="a" id="q1a">a. Un entier codé sur un unique octet <br>
				<input type="radio" name="q1" value="b" id="q1b">b. Un réel. <br>
				<input type="radio" name="q1" value="c" id="q1c">c. Ni l'un ni l'autre.<br>

				<h3>2.3. Le type "unsigned int" correspond à : ?  </h3>
				<input type="radio" name="q2" value="a" id="q2a">a. Un entier.<br>
				<input type="radio" name="q2" value="b" id="q2b">b. Un réel.<br>
				<input type="radio" name="q2" value="c" id="q2c">c. Ni l'un ni l'autre.<br>

				<h3>3.  Dans une structure if... </h3><br>
				<input type="radio" name="q3" value="a" id="q3a">a. Les parenthèses encadrant la condition logique sont obligatoires.<br>
				<input type="radio" name="q3" value="b" id="q3b">b. Le mot clé « else » est obligatoire.<br>
				<input type="radio" name="q3" value="c" id="q3c">c. La condition, énoncée juste après if, est suivie d'un point virgule.<br>

				<h3>4.  L'instruction «switch» sert à éviter des instructions :</h3>
				<input type="radio" name="q4" value="a" id="q4a">a. while... imbriquées.<br>
				<input type="radio" name="q4" value="b" id="q4b">b. do... while imbriquées.<br>
				<input type="radio" name="q4" value="c" id="q4c">c. if... else... imbriquées.<br>

				<h3>5. 2. Choisir la structure de boucle adéquate.<br>
                          Si le nombre d'itérations est connu, il est préférable d'utiliser : :</h3>
				<input type="radio" name="q5" value="a" id="q5a">a. for...<br>
				<input type="radio" name="q5" value="b" id="q5b">b. while...<br>
				<input type="radio" name="q5" value="c" id="q5c">c. do... while<br>

				<h3>6. On considère deux tableaux T1 et T2. Peut-on copier le contenu de T2 dans T1 sans perdre d'information ?</h3>
				<input type="radio" name="q6" value="a" id="q6a">a. Directement si T1 et T2 sont de même taille ? On utilise l'instruction T1 = T2 ;<br>
				<input type="radio" name="q6" value="b" id="q6b">b. Elément par élément à l'aide d'une boucle dès que la taille de T1 est >= à la taille de T2 ?<br>
				<input type="radio" name="q6" value="c" id="q6c">c. Directement si la taille de T2 est supérieure à la taille de T1 ? On utilise l'affectation T1 = T2 ;.<br>

				<h3>7. Peut-on changer la taille d'un tableau en cours d'exécution du programme  ? </h3>
				<input type="radio" name="q7" value="a" id="q7a">a. Oui, en affectant une nouvelle valeur à la variable définissant la taille du tableau.<br>
				<input type="radio" name="q7" value="b" id="q7b">b. Non, c'est impossible.<br>
				<input type="radio" name="q7" value="c" id="q7c">c. Oui, en redéfinissant la valeur de la constante indiquant la taille du tableau.<br>

				<h3>8.  Que fait la fonction strncpy(s2, s3, 5)?</h3>
				<input type="radio" name="q8" value="a" id="q8a">a. Copie les 5 premiers octets de s3 dans la chaîne pointée par s2.<br>
				<input type="radio" name="q8" value="b" id="q8b">b. Copie les 5 premiers octets de s2 dans la chaîne pointée par s3.<br>
				<input type="radio" name="q8" value="c" id="q8c">c. Copie les 5 derniers octets de s3 dans la chaîne pointée par s2.<br>

				<h3>9.  Où sont déclarées les variables locales ? </h3>
				<input type="radio" name="q9" value="a" id="q9a">a. En début du programme principal.<br>
				<input type="radio" name="q9" value="b" id="q9b">b. Au début de chaque fonction où elles interviennent.<br>
				<input type="radio" name="q9" value="c" id="q9c">c. Elles sont passées en paramètres dans l'énoncé de la fonction.<br>

				<h3>10. Une fonction renvoie toujours une valeur.Comment cela se programme-t-il, à l'intérieur de la fonction ?</h3>
				<input type="radio" name="q10" value="a" id="q10a">a. En précédant la valeur à retourner par le mot-clé return.<br>
				<input type="radio" name="q10" value="b" id="q10b">b. En affectant à l'identificateur de fonction la valeur à retourner.<br>
				<input type="radio" name="q10" value="c" id="q10c">c. langage C renvoie toujours la dernière valeur calculée dans la fonction<br>
				<input type="submit" value="Valider" class="valide" >


                <button id="suiv" type="button" ><a href="http://cloud/afterlogin/tdexam/quizC/corrquizC.php"> Réponses: </a></button>

			</form>
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