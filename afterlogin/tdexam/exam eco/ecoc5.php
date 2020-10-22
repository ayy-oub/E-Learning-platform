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
    <link rel="stylesheet" type="text/css" href="css/style3.css">
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
    <div class="search-box">
        <input class="search-txt" type="text" name="" placeholder="type to search">
        <a class="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
    </div>
    <div class="cour">
        <a class="text" href="#">Economie</a>
        <a class="book-bt" href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
    </div>
    <div class="question">
        5/8 <br> 
        Le Taux d'inflation au Maroc n'a pas dépassé une valeur maximale depuis 2008, Donnez cette valeur :
    </div>

   <div>
      <form id="myForm">
        <div class="reponse">
           
    <input id="myField4" type="text"><br>
   
        </div>
        <div>
           <input id="btn6" type="submit" value="OK" onclick="C5();M1();">
           <button id="btn40" type="button" ><a href="ecoc6.php"> suivant </a></button>
           <button id="btn41" type="button" ><a href="ecoc7.php"> suivant </a></button>
           <button id="btn5" type="button"><a href="ecoc1.php"> retour </a><button>
        </div>
      </form>
    </div>
<script type="text/javascript" src="js/exam1.js"></script>
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