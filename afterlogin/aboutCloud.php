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
	<link rel="stylesheet" type="text/css" href="style/homestyle.css">
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
			<li><a class="menu-item1" href="http://cloud/afterlogin/td.php"><i class="fa fa-pencil" aria-hidden="true"></i>
 Travaux dirigés</a></li>
			<li><a class="menu-item" href="http://cloud/afterlogin/td1.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 Exam</a></li>
		</ul>
	</nav>
	<section class="sc1" style="background:url(./images/skills.jpg)no-repeat;">
		<div class="box">
		<div class="fa2"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
		<div class="text">
			<i class="fa fa-quote-right fa1" aria-hidden="true"></i>
			<div>
				<h1>CLOUD & IOT</h1>
				<p>Le rôle de l’ingénieur cloud et IoT intervient et gère la relation d’interdépendance entre  l’internet des objets et le cloud. De  par ses compétences en conception, en déploiement et en administration des infrastructures cloud, il gère les échanges entre objets et le traitement des données (stockage, flux de données, élasticité des infrastructures, et autre.)</p>
			</div>
		</div>
	</div>

	</section>
	<br><span class="devider"></span><span class="hdevider"></span><br>
	<section class="sc2" >
		<h2>About SUD</h2>
		<div class="slides">
			<div class="slide"><img src="images/Cloud-Computing.jpg"></div>
		<div class="slide"><img src="images/Cloud-Computing.png"></div>
		<div class="slide"><img src="images/Cloud-Computing (1).jpg"></div>
		<div class="slide"><img src="images/everything-you-need-to-know-about-iot-applications.jpg"></div>
		<div class="slide"><img src="images/Future-of-IOT-01.jpg"></div>
		<div class="slide"><img src="images/Grafik1_Blogpost-1136x510.png"></div>
	</div>  
	</section> 
	<br><span class="devider"></span><span class="hdevider"></span><br> 
	<section>
	<div style="background:url(./images/skills.jpg)no-repeat;background-size: cover !important;height: 700px; width: 100%;" >
		<h3 style="text-align: center;font-size: 20px;">Un mot du cordinateur à propos de la filière</h3>
	<iframe class="video" width="50%" height="500" src="https://www.youtube.com/embed/vre36oHOXDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div> 
    </section>
    <br><span class="devider"></span><span class="hdevider"></span><br>
	<section class="sc3">
		<h1 style="text-align: center;font-size: 56px; top: 0;"> Débouchés </h1>
		<h3 style="text-align: center;">La formation pluridisciplinaire dispensée par l’INPT, centrée sur l’apprentissage de l’innovation et de la créativité, confère aux lauréats des atouts intellectuels et des facultés d’adaptation qui leur permettent d’aborder de multiples métiers.</h3>
		<ul class="colors">
			<li class="debouche">Ingenieur de Développement de logiciels</li>
			<li class="debouche">Ingenieur de Big Data</li>
			<li class="debouche">Ingenieur Système et réseau</li>
			<li class="debouche">Ingenieur des Systemes Ubiquitaires</li>
			<li class="debouche">Ingenieur de Déploiement Cloud</li>
			<li class="debouche">Ingenieur d'Exploitation Cloud</li>
			<li class="debouche">Architecte Réseau</li>
			<li class="debouche">Ingenieur de Securité des Systemes,Application et Services</li>
			<li class="debouche">Ingenieur Enterpreneur</li>
			<li class="debouche">Ingenieur Chercheur</li>
			<li class="debouche">Ingenieur des Systèmes embarqués</li>
			<li class="debouche">Ingenieur de Développement de services</li>
			<li class="debouche">Ingenieur d'integration</li>
		</ul>
		
	</section>
	<br><span class="devider"></span>
	<span class="hdevider"></span><br>
	<section class="sc4" style="background:url(./images/abstract-technology-particle-background_52683-25766.jpg)no-repeat;">
		<dir class="contacte">
		<h1>Pour plus d'information contacter le coordinateur de la filière</h1>
		<p>M. Abdeslam EN-NOUAARY<br>
abdeslam@inpt.ac.ma<br>
Tél : +212 538 00 28 29</p>
</div>
	</section>
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
	overflow: hidden;
	font-size: 0px;
	
}
.menu:hover .menu-item2 {
	color: #fff;
	overflow: visible;
	font-size: 30px;
}
.menu-item2:hover {
	background-color: blue;
	
	</style>

</body>
</html>