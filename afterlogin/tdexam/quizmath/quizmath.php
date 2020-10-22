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
	<title>Quiz Algebre</title>
	<link rel="stylesheet" type="text/css" href="corrquizmat.css">
	<script type="text/javascript" src="jsmath.js"></script>
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
			<h1 class="titreOs">Algèbre pour la Data Science (QUIZ)</h1>
			<p><h2>Répondre aux questions suivantes :<h2></p>
		</header>
		<section class="quizz">
			<div id="resultats">
				<form name="quizForm" onsubmit="return submitAnswers()">
				<h3>1. Parmi les sous-ensembles de R3 suivantes, lesquelles sont des sous-espaces vectoriels ? </h3>
				<input type="radio" name="q1" value="a" id="q1a">a. F1 = {(x, y, z) ∈ R3: x + y − 2z = 1} <br>
				<input type="radio" name="q1" value="b" id="q1b">b. F1 = {(x, y, z) ∈ R3: 2x − y + z = 0} <br>
				<input type="radio" name="q1" value="c" id="q1c">c. F1 = {(x, y, z) ∈ R3: x = 0 et y = z + 1}<br>

				<h3> 2.3.Soient u1, u2 et u3 trois vecteurs d’un espace vectoriel E tel que u3 = αu1 + βu2 où α et β sont des nombres réels.Considérons le système S = {u1,u2,u3}. Alors,  </h3>
				<input type="radio" name="q2" value="a" id="q2a">a. S est lié.<br>
				<input type="radio" name="q2" value="b" id="q2b">b. S est libre.<br>
				<input type="radio" name="q2" value="c" id="q2c">c. S engendre E.<br>

				<h3>3.  Soient u1 = (1, 0), u2 = (0, 1), u3 = (1, 1) et u4 = (2, 0) quatre vecteurs de R2. Un système libre de R2est :</h3><br>
				<input type="radio" name="q3" value="a" id="q3a">a. S3 = {u1,u4}.<br>
				<input type="radio" name="q3" value="b" id="q3b">b. S = {u1,u2,u3}.<br>
				<input type="radio" name="q3" value="c" id="q3c">c. S = {u1,u3}<br>

				<h3>4.  Soient u1, u2 et u3 trois vecteurs d’un espace vectoriel E tel que u3 = αu1 + βu2 où α et β sont des nombres réels.Considérons le système S = {u1,u2,u3}. Alors, on peut avoir :</h3>
				<input type="radio" name="q4" value="a" id="q4a">a. dim E = 4<br>
				<input type="radio" name="q4" value="b" id="q4b">b. S est libre<br>
				<input type="radio" name="q4" value="c" id="q4c">c. dim E = 3<br>

				<h3>5. Soit f l’application de R<sup>2</sup> dans R<sup>3</sup>, définie par : f(x, y) = (x − y, 1, y). Alors, on a :</h3>
				<input type="radio" name="q5" value="a" id="q5a">a. f surjective<br>
				<input type="radio" name="q5" value="b" id="q5b">b. f injective<br>
				<input type="radio" name="q5" value="c" id="q5c">c. f est linéaire<br>

				<h3>6. Soit a et b deux réels. Soit f une application vérifiant : f(1, 1) = (1, 2), f(1, 2) = (3, b) et f(2, 3) = (a, 9).A quelle condition f est une application linéaire de R<sup>2</sup> dans R<sup>2</sup>?</h3>
				<input type="radio" name="q6" value="a" id="q6a">a. a = 4 et b = 7<br>
				<input type="radio" name="q6" value="b" id="q6b">b. a = 2 et b = 5<br>
				<input type="radio" name="q6" value="c" id="q6c">c. a = 1 et b = 3<br>

				<h3>7. Soit A une matrice d’ordre 4 de déterminant −1. Lesquelles des matrices suivantes ont le même déterminant que A ? </h3>
				<input type="radio" name="q7" value="a" id="q7a">a. A<sup>-1</sup><br>
				<input type="radio" name="q7" value="b" id="q7b">b. A<sup>2</sup><br>
				<input type="radio" name="q7" value="c" id="q7c">c. A<sup>4</sup><br>

				<h3>8. Parmi les sous-ensembles de R3 suivantes, lesquelles sont des sous-espaces vectoriels ?</h3>
				<input type="radio" name="q8" value="a" id="q8a">a. F = {(x, y, z) ∈ R<sup>3</sup>: x = 2y = 5y}<br>
				<input type="radio" name="q8" value="b" id="q8b">b. F3 = {(x, y, z) ∈ R<sup>3</sup>: y<sup>2</sup> + (z − 2x)<sup>2</sup> = 0}<br>
				<input type="radio" name="q8" value="c" id="q8c">c. F = {(x, y, z) ∈ R<sup>3</sup>: 2x(y − z) = 0}<br>

				<h3>9.  Soient u1 = (1, 0), u2 = (0, 1), u3 = (1, 1) et u4 = (0, 0) quatre vecteurs de R<sup>2</sup>. Un système lié de R<sup>2</sup>est : </h3>
				<input type="radio" name="q9" value="a" id="q9a">a. S = {u1,u2}<br>
				<input type="radio" name="q9" value="b" id="q9b">b. S = {u1,u3}<br>
				<input type="radio" name="q9" value="c" id="q9c">c. S = {u4}<br>

				<h3>10. Soit f une application linéaire non nulle de R<sup>2</sup> dans R. Alors nécessairement</h3>
				<input type="radio" name="q10" value="a" id="q10a">a. Ker f = {(0, 0)}<br>
				<input type="radio" name="q10" value="b" id="q10b">b. f surjective<br>
				<input type="radio" name="q10" value="c" id="q10c">c. f injective<br>
				<input type="submit" value="Valider" class="valide">


				<button id="suiv" type="button" ><a href="http://cloud/afterlogin/tdexam/quizmath/Corrquizmath.php"> Réponses: </a></button>


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