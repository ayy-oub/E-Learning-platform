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
	<title>Quiz Réseaux de communication</title>
	<link rel="stylesheet" type="text/css" href="reseau.css">
	<script type="text/javascript" src="reseau.js"></script>
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
			<h1 class="titreOs">Réseaux de communication (QUIZ)</h1>
			<p>Répondre aux questions suivantes :</p>
		</header>
		<section class="quizz">
			<div id="resultats">
				<form name="quizForm" onsubmit="return submitAnswers()">
				<h3>1. Le quel des protocoles de transport suivant permet de récupérer les paquets perdus ? </h3>
				<input type="radio" name="q1" value="a" id="q1a">a. UPP<br>
				<input type="radio" name="q1" value="b" id="q1b">b. TCP<br>
				<input type="radio" name="q1" value="c" id="q1c">c. RTP<br>

				<h3>2. Dans quel type d'erreurs de communication les bits adjacents ne sont pas affectés ? </h3>
				<input type="radio" name="q2" value="a" id="q2a">a. Erreurs simples<br>
				<input type="radio" name="q2" value="b" id="q2b">b. Erreurs en rafale<br>

				<h3>3. La quelle des techniques suivantes permet la correction des erreurs sans retransmission ?  </h3>
				<input type="radio" name="q3" value="a" id="q3a">a. ARQ <br>
				<input type="radio" name="q3" value="b" id="q3b">b. Le code de Hamming <br>

				<h3>4. Quel est le protocole qui permet la transmission de plusieurs trames de données sans arrêt ?</h3>
				<input type="radio" name="q4" value="a" id="q4a">a. Stop-and-Wait<br>
				<input type="radio" name="q4" value="b" id="q4b">b. Sliding-Window <br>

				<h3>5. Deux approches sont utilisées pour le contrôle d'erreurs au niveau de la couche liaison de données,La quelle des deux inclut le timer ?</h3>
				<input type="radio" name="q5" value="a" id="q5a">a. ARQ<br>
				<input type="radio" name="q5" value="b" id="q5b">b. FEC<br>

				<h3>6. Le quel des deux protocole est ineficace pour les communication à longue distance et à haut débit  :</h3>
				<input type="radio" name="q6" value="a" id="q6a">a. Go-back-N<br>
				<input type="radio" name="q6" value="b" id="q6b">b. Stop-and-wait<br>
				

				<h3>7. Quel protocole permet de retransmettre seulement la trame perdue ou corrompue ? </h3>
				<input type="radio" name="q7" value="a" id="q7a">a. Selective-Reject ARQ <br>
				<input type="radio" name="q7" value="b" id="q7b">b. Go-back-N ARQ<br>

				<h3>8. La topologie du bus correspond aux : </h3>
				<input type="radio" name="q8" value="a" id="q8a">a. Cannaux point-à-point<br>
				<input type="radio" name="q8" value="b" id="q8b">b. Cannaus de diffusion<br>
				<input type="submit" value="Validé" class="valide">
				<button id="suiv" class="valide" type="button" ><a href="http://cloud/afterlogin/tdexam/quizReseau/correctionReseau.php"> Réponses: </a></button>


			</form>
			</div>
		</section>
	</div>
	 <style type="text/css">
/*----------------styling sub----------*/
.menu  {
	width: 100%;
}
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
}
.valide{
	margin-top: 20px;
	height: 30px;
	width: 100px;
	background-color: rgba(21,71,184,.8);
	border:hidden;
	border-radius: 30px;
}
.valide:hover{
	color: rgb(2,41,136);
	background-color: rgb(127,255,249);
	box-shadow: 0 0 10px rgb(127,255,249), 0 0 20px rgb(127,255,249), 0 0 40px rgb(127,255,249);
}

</style>
</body>
</html>