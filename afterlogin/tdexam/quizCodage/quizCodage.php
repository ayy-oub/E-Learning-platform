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
	<title>Quiz Codage</title>
	<link rel="stylesheet" type="text/css" href="quizCodage.css">
	<script type="text/javascript" src="jsCodage.js"></script>
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
	<style type="text/css">
		#container {
			top: 5%;
		}
	</style>
    <div id="container">
		<header>
			<h1 class="titreOs">Codage et Théorie de L'Information (QUIZ)</h1>
			<p>Répondre aux questions suivantes :</p>
		</header>
		<section class="quizz">
			<div id="resultats">
				<form name="quizForm" onsubmit="return submitAnswers()">
				<h3>1. Qui a inventé la Théorie de l'information? </h3>
				<input type="radio" name="q1" value="a" id="q1a">a. Ronald Aylmer Fisher<br>
				<input type="radio" name="q1" value="b" id="q1b">b. Claude Shanon<br>
				<input type="radio" name="q1" value="c" id="q1c">c. Ronald Marc Fish<br>

				<h3>2. Qui a renforcé la Théorie de l'information?  </h3>
				<input type="radio" name="q2" value="a" id="q2a">a. Ronald Aylmer Fisher<br>
				<input type="radio" name="q2" value="b" id="q2b">b. Claude Shanon<br>
				<input type="radio" name="q2" value="c" id="q2c">c. Ronald Marc Fish<br>

				<h3>3. La théorie de l'information est une théorie : </h3>
				<input type="radio" name="q3" value="a" id="q3a">a. Physique<br>
				<input type="radio" name="q3" value="b" id="q3b">b. Phylosophiqe<br>
				<input type="radio" name="q3" value="c" id="q3c">c. Mathématque<br>

				<h3>4. Quelles sont les opérations mathématiques utilisées dans la formule de l'entropie?</h3>
				<input type="radio" name="q4" value="a" id="q4a">a. Somme/Log/Multiplication/Exponentielle<br>
				<input type="radio" name="q4" value="b" id="q4b">b. Somme/Intégrale/Multiplication/Exponentielle<br>
				<input type="radio" name="q4" value="c" id="q4c">c. Somme/Log/Multiplication/Division<br>

				<h3>5. Quelles sont les différentes sources de l'information?</h3>
				<input type="radio" name="q5" value="a" id="q5a">a. Continue/Discontinue<br>
				<input type="radio" name="q5" value="b" id="q5b">b. Continue/Discrete<br>
				<input type="radio" name="q5" value="c" id="q5c">c. Continue<br>

				<h3>6. Combien y a t-il de types de mesures?</h3>
				<input type="radio" name="q6" value="a" id="q6a">a. 4<br>
				<input type="radio" name="q6" value="b" id="q6b">b. 1<br>
				<input type="radio" name="q6" value="c" id="q6c">c. 2<br>

				<h3>7. Quelles sont les propriétés de l'entropie? </h3>
				<input type="radio" name="q7" value="a" id="q7a">a. Positive/Null<br>
				<input type="radio" name="q7" value="b" id="q7b">b. Null/Négative<br>
				<input type="radio" name="q7" value="c" id="q7c">c. Positive/Négative<br>

				<h3>8. Dans le processus de transmission de l'information, le bruit est l'élément perturbateur de quel autre élément? </h3>
				<input type="radio" name="q8" value="a" id="q8a">a. Source<br>
				<input type="radio" name="q8" value="b" id="q8b">b. Canal<br>
				<input type="radio" name="q8" value="c" id="q8c">c. Utilisateur<br>

				<h3>9.  Pour quelle valeur l'entropie est-elle maximale? </h3>
				<input type="radio" name="q9" value="a" id="q9a">a. pi=1+x<br>
				<input type="radio" name="q9" value="b" id="q9b">b. pi=1-x<br>
				<input type="radio" name="q9" value="c" id="q9c">c. pi=1/n<br>
				<input type="submit" value="Validé" class="valide">
				<button class="valide"><a href="correctionCodage.php">Correction</a></button>
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