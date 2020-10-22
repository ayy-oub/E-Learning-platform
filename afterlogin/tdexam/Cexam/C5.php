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
    <link rel="stylesheet" type="text/css" href="styleC.css">
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
    <div class="cour">
        <a class="text" href="#">Langage C</a>
        <a class="book-bt" href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
    </div>
    <div class="question">
         <br>
        Completez ce programme C qui permet de saisir une série de nombres entiers positifs et qui après saisie, affiche les valeurs du plus petit et du plus grand nombre saisi ainsi que la somme et la moyenne des nombres.
    </div>

   <div>
        <div class="reponse">
          #include < stdio.h><br>
int main(void)<br>
{   int N, Petit, Grand, S, val;<br>
    printf("Saisir N - ");<br>
    scanf("%d", &N);<br>
    S = 0; Petit = 34234234; Grand = -1;
    for (int i = 0; i < N; i++)<br>
    {   printf("Saisir une valeur - ");<br>
        scanf("%d", &val);<br>
        S += val;<br>
        if (i == 0)<br>
        { Petit = val; Grand = <input id="myField0" type="text">; }<br>
        else {   
        if (val > Grand)  <input id="myField1" type="text"> = val;<br>
        if (val < Petit)  Petit = val; }  }<br>
    printf("le nombre le plus petit est %d \n", Petit);<br>
    printf("le nombre le plus grand est %d\n", Grand);<br>
    printf("la somme est %d\n", <input id="myField2" type="text">);<br>
    printf("la moyenne est %f\n", (float)S / N);<br>
    return 0;}<br>
        </div>
        <div>
           <input id="btn6" type="submit" value="OK" onclick="MT1();C5();">
           <button id="btn40" type="button" ><a href="C6.php"> suivant </a></button>
           <button id="btn41" type="button" ><a href="C7.php"> suivant </a></button>
           <a id="btn7" href="https://rextester.com/RSCW47696" target="_blank">Try it Urself </a>
        </div>
    </div>
<script type="text/javascript" src="Cjs.js"></script>
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