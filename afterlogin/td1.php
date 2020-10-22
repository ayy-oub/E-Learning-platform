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
        <li><a class="menu-item" href="http://cloud/afterlogin/td.php"><i class="fa fa-pencil" aria-hidden="true"></i>Travaux dirigés</a></li>
        <li><a class="menu-item" href="http://cloud/afterlogin/td1.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Exam</a></li>
      </ul>
  </nav>
	<a id="submit1" href="http://cloud/afterlogin/cr1.php">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		CHOOSE THE COURSE
	</a>
	<script type="text/javascript" src="site.js"></script>
</body>
</html>	