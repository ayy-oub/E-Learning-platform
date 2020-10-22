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
    <script type="text/javascript" src="js.js"></script>
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
        <a class="text" href="#">Codage et Théorie de l'Information</a>
        <a class="book-bt" href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
      </div>
      <div class="question">

        <h2>Exercice 1:</h2>
        <h4>Soit une source d'alphabet &#8486={1,2,3,4,5}. Calculer son entropie pour les ditrubutions de probabilité suivantes:</h4>
        <ol>
          <li>P={0.2,0.2,0.2,0.2,0.2}</li>
          <li>P={0.05,0.05,0.05,0.05,0.8}</li>
          <li>P={0.1,0.2,0.3,0.15,0.25}</li>
        </ol>
      </div>

      <div>
        <div class="choice">
          <h4>Réponse :</h4>
          <input type="button" name="q1" id="c1" onclick="rep1();MT2();" value=" 1. 1.12 bits/symbole 2. 2.23 bits/symbole 3. 2.32 bits/symbole"><br>
          <input type="button" name="q1" id="c1" onclick="rep();MT2();" value= "1. 2.23 bits/symbole 2. 1.12 bits/symbole 3. 2.32 bits/symbole " > <br>
          <input type="button" name="q1" id="c1" onclick="rep1();MT2();" value= "1. 1.12 bits/symbole 2. 3.23 bits/symbole 3. 1.32 bit/symboles"><br>
        </div>
        <div>
           <button id="btn40" type="button" ><a href="http://cloud/afterlogin/tdexam/exam%20codage/examCodage21.php"> suivant </a></button>
           <button id="btn41" type="button" ><a href="http://cloud/afterlogin/tdexam/exam%20codage/examCodage22.php"> suivant </a></button>
           <button id="btn42" type="button" ><a href="http://cloud/afterlogin/tdexam/exam%20codage/examCodage23.php"> suivant </a></button>
        </div>
      </div>
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