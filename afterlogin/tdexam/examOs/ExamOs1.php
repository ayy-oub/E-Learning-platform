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
    <title>cloud computing</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
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
    <div class="container">
      <div class="cour">
        <a class="text" href="#" style="font-size: 30px;">Systeme d'exploitation</a>
        <a class="book-bt" href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
      </div>
      <div class="question" style="font-size: 15px;">
        <h2>Exercice 1:</h2>
        <h4>Décrivez la procédure complète à appliquer lorsqu'une interruption arrive. </h4>
      </div>

      <div>
        <div class="choice">
          <h4>Réponse :</h4>
          <form name="quizForm" onsubmit="return submitAnswersOs()">
          <input type="button" name="qOs1" onclick="rep();MT1();" value="procédure 1" id="c1">Interruption du processus en cours->Sauvegarde du contexte du processus interrompu.->Exécution de la routine d'interruption correspondante.->Restauration du contexte du processus interrompu->Poursuite de l'exécution du processus interrompu<br>
          <input type="button" name="qOs1"  onclick="rep();MT1();" value="procédure 2" id="c2">Sauvegarde du contexte du processus interrompu.->Interruption du processus en cours->Exécution de la routine d'interruption correspondante.->Restauration du contexte du processus interrompu->Poursuite de l'exécution du processus interrompu<br>
          <input type="button" name="qOs1"  onclick="rep();MT1();" value="procédure 3" id="c3">Sauvegarde du contexte du processus interrompu.->Exécution de la routine d'interruption correspondante.->Restauration du contexte du processus interrompu->Poursuite de l'exécution du processus interrompu <br>
        </div>
        <div>
           <button id="btn40" type="button" ><a href="examOs21.php"> suivant </a></button>
           <button id="btn5" type="button"><a href="#">Retour</a></button>
        </div>
      </div>
      <script type="text/javascript" src="js.js">
      </script>
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