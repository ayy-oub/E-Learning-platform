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
	<link rel="stylesheet" type="text/css" href="style/tdcrstyle.css">
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
        <li><a class="menu-item" href="http://cloud/afterlogin/td.php"><i class="fa fa-book" aria-hidden="true"></i>Travaux dirigés</a></li>
        <li><a class="menu-item" href="http://cloud/afterlogin/td1.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Exam</a></li>
      </ul>
  </nav>
		<div class="cour1">
			<a class="txte" href="http://cloud/afterlogin/tdexam/exam%20reseau/res1.php">reseaux de comunication</a>
			<a class="book-btn" href="http://cloud/afterlogin/tdexam/exam%20reseau/res1.php"><i class="fa fa-book" aria-hidden="true"></i></a>
		</div>
		<div class="cour2">
			<a class="txte" href="http://cloud/afterlogin/tdexam/Cexam/C1.php">langage C</a>
			<a class="book-btn" href="http://cloud/afterlogin/tdexam/Cexam/C1.php"><i class="fa fa-book" aria-hidden="true"></i></a>
		</div>
		<div class="cour3">
			<a class="txte" href="http://cloud/afterlogin/tdexam/Mathexam/Mathq1.php">algebre pour la data science</a>
			<a class="book-btn" href="http://cloud/afterlogin/tdexam/Mathq1.php"><i class="fa fa-book" aria-hidden="true"></i></a>
		</div>
		<div class="cour4">
			<a class="txte" href="http://cloud/afterlogin/tdexam/examOs/ExamOs1.php">systéme d'exploitation</a>
			<a class="book-btn" href="http://cloud/afterlogin/tdexam/examOs/ExamOs1.php"><i class="fa fa-book" aria-hidden="true"></i></a>
		</div>
		<div class="cour5">
			<a class="txte" href="http://cloud/afterlogin/tdexam/exam%20codage/examCodage1.php">théorie de l'informatin et du codage</a>
			<a class="book-btn" href="http://cloud/afterlogin/tdexam/exam%20codage/examCodage1.php"><i class="fa fa-book" aria-hidden="true"></i></a>
		</div>
		<div class="cour6">
			<a class="txte" href="http://cloud/afterlogin/tdexam/exam%20eco/ecoc1.php">Science Economique</a>
			<a class="book-btn" href="http://cloud/afterlogin/tdexam/exam%20eco/ecoc1.php"><i class="fa fa-book" aria-hidden="true"></i></a>
		</div>
		<style type="text/css">
			.cour6 {
	position: absolute;
	top: 80%;
	left: 50%;
	transform: translate(-50%,-50%);
	background-color: white	;
	height: 40px;
	border-radius: 40px;
	padding: 10px;
}
.cour6:hover > .txte {
	width: 180px;
	padding: 0 6px;
}	
.cour6:hover > .book-btn {
	background: black;
	color: #ffebcd;
}
		</style>
	<a id="submit1" href="http://cloud/afterlogin/cr.php" >
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		CHOOSE THE COURSE
		</a>
		<script type="text/javascript" src="site.js"></script>
</body>
</html>	