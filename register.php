<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>cloud computing</title>
		<link rel="stylesheet" type="text/css" href="style/registerstyle.css">
		<meta charset="utf-8">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<nav class="menu">
		<ul class="rmenu">
			<li><a class="menu-item" href="http://cloud/aboutCloud.html"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
			<li><a class="menu-item" href="http://cloud/cours.php"><i class="fa fa-book" aria-hidden="true"></i>Cours</a></li>
			<li><a class="menu-item" href="http://cloud/beforetd.html"><i class="fa fa-pencil" aria-hidden="true"></i>Travaux dirigés</a></li>
			<li><a class="menu-item" href="http://cloud/beforetd.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Exam</a></li>
			<li><a class="menu-reg" href="http://cloud/register.php">Register</a></li>
			<li><a class="menu-log" href="http://cloud/login.php">Login</a></li>
		</ul>
	</nav>
		<div class="box">
			<h2>register</h2>
			<form  method="POST" action="register.php">
				<?php include('errors.php'); ?>
				<div class="inputbox">
					<input type="text" name="username" id="name" required="" value="<?php echo $username; ?>" >
					<label for="name"><i class="fa fa-user-circle" aria-hidden="true"></i>   Username</label>
				</div>
				<div class="inputbox">
				 	<input type="email" name="email" required="" value="<?php echo $email; ?>">
					<label for="mail"><i class="fa fa-envelope" aria-hidden="true"></i>  email</label>
				</div>	
				<div class="inputbox">
					<input type="password" required="" name="password_1">
					<label><i class="fa fa-unlock-alt" aria-hidden="true"></i>  Password</label>
				</div>
				<div class="inputbox">
					<input type="password" required="" name="password_2">
					<label><i class="fa fa-unlock-alt" aria-hidden="true"></i>  confirm Password</label>
				</div>
				<button class="submit" name="reg_user">
				<span></span>
		        <span></span>
				<span></span>
				<span></span>		
				REGISTER
				</button>
			</form>
		</div>	
		<div class="mber">
			<p class="already">
     			Already a member ? <a class="signin" href="login.php">Sign in</a>
    		</p>
    		<style type="text/css">
    			.boxreg {

    			}
    			.submit {
    				top: 90%;
    			}
    		.mber {
	position: absolute;
	top: 90%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;

}
.signin {
	color: white;
	font-size: 20px;
	text-decoration: none;
	border: 1px solid #fff;
	padding: 6px;
	border-radius: 10px;
	opacity: 1;
}
</style>
		</div>		
	</body>
</html>