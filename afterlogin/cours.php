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
	<link rel="stylesheet" type="text/css" href="style/courstyle.css">
	<link rel="stylesheet" type="text/css" href="style/cardscour.css">
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
			<li><a class="menu-item" href="http://cloud/afterlogin/aboutCloud.php"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
			<li><a class="menu-item" href="http://cloud/afterlogin/cours.php"><i class="fa fa-book" aria-hidden="true"></i>Cours</a></li>
			<li><a id="td" class="menu-item" href="http://cloud/afterlogin/td.php"><i class="fa fa-pencil" aria-hidden="true"></i>Travaux dirigés</a></li>
			<li><a class="menu-item" href="http://cloud/afterlogin/td1.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Exam</a></li>
		</ul>
	</nav>
	<div class="slider">
		<div class="slides">
		<div class="slide"><img src="images/photo10.jpg"></div>
		<div class="slide"><img src="images/photo9.jpg"></div>
		<div class="slide"><img src="images/photo12.jpg"></div>
		<div class="slide"><img src="images/photo7.jpg"></div>
		<div class="slide"><img src="images/photo13.jpg"></div>
		<div class="slide"><img src="images/photo11.jpg"></div>
		<div class="slide"><img src="images/photo14.jpg"></div>
		<div class="slide"><img src="images/photo8.jpg"></div>
	</div>
	</div>
	<section class="sc2">
		<div class="banner">
			<video autoplay muted loop >
				<source src="images/Kiasmos_-_Drawn_Official_Music_Video.mp4" type="video/mp4">
			</video>
			<h2>Cloud & IOT</h2>
			<div class="loader1">
			<span></span>
			<span></span>
			<span></span>
			</div>
			<div class="loader2">
			<span></span>
			<span></span>
			<span></span>
			</div>
			<h3>Cours</h3>
		</div>
	</section>
	<section class="sc3">
		<div class="cards">
		<div class="card">
			<article>
				<h2>Operating System</h2>
				<div class="title">Cours enseigné par Mr Bensaid</div>
				<div class="pic">
					<img src="images/systeme-exploitation-windows-linux-macos-kiatoo.png" alt="">
				</div>
				<div class="desc">
					<a class="desc-item" href="cours/01-Introduction.ppt"><i class="fa fa-download" aria-hidden="true"></i>  Introduction</a><br>
					<a class="desc-item" href="cours/02-processus.ppt"><i class="fa fa-download" aria-hidden="true"></i>  Processus</a><br>
					<a class="desc-item" href="cours/03-synchronisation.ppt"><i class="fa fa-download" aria-hidden="true"></i>  Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
		<div class="card">
			<article>
				<h2>Reseau de communication</h2>
				<div class="title">Cours enseigné par Mr Nouaary</div>
				<div class="pic">
					<img src="images/istockphoto-181178018-1024x1024.jpg" alt="">
				</div>
				<div class="desc">
					<a href="01-Introduction.ppt">Introduction</a><br>
					<a href="02-processus.ppt">Processus</a><br>
					<a href="03-synchronisation.ppt">Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
		<div class="card">
			<article>
				<h2>Theorie d'information et du codage</h2>
				<div class="title">Cours enseigné par Mr Hadmi</div>
				<div class="pic">
					<img src="images/dc09c21849_96869_03-366.jpg" alt="">
				</div>
				<div class="desc">
					<a href="01-Introduction.ppt">Introduction</a><br>
					<a href="02-processus.ppt">Processus</a><br>
					<a href="03-synchronisation.ppt">Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
		<div class="card">
			<article>
				<h2>Science economique</h2>
				<div class="title">Cours enseigné par Mr Barka</div>
				<div class="pic">
					<img src="images/La_science_conomique_1.jpg" alt="">
				</div>
				<div class="desc">
					<a href="01-Introduction.ppt">Introduction</a><br>
					<a href="02-processus.ppt">Processus</a><br>
					<a href="03-synchronisation.ppt">Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
	</div>
	<div class="cards2">
		<div class="card">
			<article>
				<h2>Mathematique pour l'ingenieur</h2>
				<div class="title">Cours enseigné par Mr Hilali</div>
				<div class="pic">
					<img src="images/8169b55ce3_17755_7926-intro.jpg" alt="">
				</div>
				<div class="desc">
					<a href="01-Introduction.ppt">Introduction</a><br>
					<a href="02-processus.ppt">Processus</a><br>
					<a href="03-synchronisation.ppt">Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
		<div class="card">
			<article>
				<h2>Langage C</h2>
				<div class="title">Cours enseigné par Mme Benomar</div>
				<div class="pic">
					<img src="images/url.jpg" alt="">
				</div>
				<div class="desc">
					<a href="01-Introduction.ppt">Introduction</a><br>
					<a href="02-processus.ppt">Processus</a><br>
					<a href="03-synchronisation.ppt">Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
		<div class="card">
			<article>
				<h2>Déontologie</h2>
				<div class="title">Cours enseigné par Mr Laghrissi</div>
				<div class="pic">
					<img src="images/code-de-déonto-03.jpg" alt="">
				</div>
				<div class="desc">
					<a href="01-Introduction.ppt">Introduction</a><br>
					<a href="02-processus.ppt">Processus</a><br>
					<a href="03-synchronisation.ppt">Synchronisation</a><br>
					</p>
				</div>
			</article>
		</div>
	</div>
	</section>
	<section class="sc4">
		<div class="contactbox">
			<h2 class="titre"><i class="fa fa-commenting-o" aria-hidden="true"></i>  Ecrire un commentaire</h2><br>
			<form class="contact" action="courcontact.php" method="post">
			<div class="inputbox">	
				<label for="name">Name</label>  <input type="text" name="name" id="name"><br>
			</div>
			<div class="inputbox">	
				<label for="message">Commentaire</label>  <input type="text" name="message" id="message"><br>
				<input type="submit" name="envoyer" value="envoyer">
			</div>	
			</form>
		</div>
		<br>
<div class="msgs">		
<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8','root','');
}
catch(exception $e)
{
	die('Erreur : ' .$e->getMessage());
}
$reponse= $bdd->query('SELECT name, message FROM messages ORDER BY ID DESC LIMIT 0, 10');
while($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['name']) .'</strong>:' . htmlspecialchars($donnees['message']) . '</p><br>';
}
$reponse->closeCursor();
 ?>	
</div>
	</section>
</body>
</html>
<style type="text/css">
	/*-----images slide----*/
.slide img{
	width: 1350px;
	height: 600px;
}
.slide {
	width: 100%;
}
.slides{
	width: calc(1350px * 8);
	display: flex;
	top: 40px;
	animation: glisse 20s infinite;
	overflow: hidden;
}
.slider{
	width: 100%;
	height: 600px;
	overflow: hidden;
}

@keyframes glisse {
	0%{
		transform: translateX(0);
	}
	5%{
		transform: translateX(0);
	}
	15%{
		transform: translateX(-1350px);
	}
	20%{
		transform: translateX(-1350px);
	}
	25%{
		transform: translateX(-2700px);
	}
	35%{
		transform: translateX(-2700px);
	}
	40%{
		transform: translateX(-4050px);
	}
	45%{
		transform: translateX(-4050px);
	}
	55%{
		transform: translateX(-5400px);
	}
	60%{
		transform: translateX(-5400px);
	}
	65%{
		transform: translateX(-6750px);
	}
	75%{
		transform: translateX(-6750px);
	}
	85%{
		transform: translateX(0px);
	}
	90%{
		transform: translateX(0px);
	}
	95%{
		transform: translateX(0px);
	}
	100%{
		transform: translateX(0px);
	}

}
.avatar {
	font-size: 30px;
	float: left;
}
/*----------------styling sub----------*/
.sub-content {
	position: absolute;
	top:50px;
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
</style>