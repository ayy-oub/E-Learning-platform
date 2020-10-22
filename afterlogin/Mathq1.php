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
    <link rel="stylesheet" type="text/css" href="style/exammath.css">
    <meta charset="utf-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <nav class="menu">
        <ul class="rmenu">
             <li class="avatar"><a class="menu-item" href="http://cloud/afterlogin/profile.php"> <i class="fa fa-user-circle" aria-hidden="true"></i>  <?php echo $_SESSION['username']; ?></a>
          <div class="sub-content">
            <div class="sub-drop">
              <ul>
                <li><a href="http://cloud/afterlogin/profile.php">Profile</a></li>
                <li><a href="profile.php?logout='1'" style="color: red;">logout</a></li>
              </ul>
            </div>
          </div>
        </li>
            <li><a class="menu-item" href="#">About cloud</a></li>
            <li><a class="menu-item" href="#">cours</a></li>
            <li><a class="menu-item" href="file:///D:/website%20development/td.html">travaux dirigés</a></li>
            <li><a class="menu-item" href="#">exam</a></li>
        </ul>
    </nav>
    <div class="cour">
        <a class="text" href="#">Algèbre pour la data science</a>
        <a class="book-bt" href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
    </div>
    <div class="question">
        1/10 <br>
        Quelle est la version matricielle de l'opération élèmentaire L1↔a*L1 pour une matrice A, (I la matrice élementaire etE11 La matrice dont le coeef de la position (1,1) vaut 1)?
    </div>

   <div>
      <form id="myForm" onsubmit="return validateForm();">
        <div>
          <input type="text" id="myField" size="50" placeholder="write the answer:">
        </div>
        <div>
           <button id="btn4" type="button" ><a href="file:///D:/Desktop/projet%20yasser/Math/Mathq1.html">suivant</a></button>
           <button id="btn5" type="button">retour</button>
        </div>
      </form>
    </div>
<script type="text/javascript" src="js/js1.js"></script>
</body>
</html>





