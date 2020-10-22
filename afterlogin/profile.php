<?php include('server.php') ?>
<?php 
$username = $_SESSION['username'];
$email = $_SESSION['email'];
if (isset($_SESSION['friendname'])) {
  $friendname= $_SESSION['friendname'];
}


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
	<title>Cloud computing</title>
	<link rel="stylesheet" type="text/css" href="style/profilestyle.css">
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
  <?php   $result = mysqli_query($db, "SELECT * FROM users WHERE username='$username'"); ?>  
<h3 class="recievemessage"><?php 
while ($row = mysqli_fetch_array($result)) {
  echo $row["recievemessage"];
}
 ?></h3>

 <style type="text/css">
   .recievemessage {
    position: absolute;
      left: 2%;
      top: 20%;
      color: #c0c0c0;
      font-family: sans-serif;
      text-transform: uppercase;
      overflow: hidden;
      background: linear-gradient(90deg ,#000 ,#fff ,#000);background-repeat: no-repeat;
      background-size: 80%;
      -webkit-background-clip:text;
      -webkit-text-fill-color:rgba(255,255,255,0);
      animation: animate 3s linear infinite;
   }
   @keyframes animate{
    0%{
      background-position: -500%;
    }
    100%{
      background-position: 500%;
    }
   }
   

 </style>

  <?php  if (isset($_SESSION['success'])) : ?>
  <h3 class="success">
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
  </h3>
  <style type="text/css">
    .success {
      position: absolute;
      left: 20%;
      top: 10%;
      color: #c0c0c0;
    }
  </style>
  <?php endif ?>
<style type="text/css">
   #content{
    width: 15%;
    position: absolute;
    top: -20%;
    left: 75%;  
    opacity: 1;  
   }
   .addimage {
    position: absolute;
    top: 100%;
    left: 60%;
   }
   
   #img_div{
    width: 80%;
    border-radius: 50%;
    margin-top: 5%;
    object-fit: cover;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
  border-radius: 50%;
    margin: 5px;
    width: 150px;
    height: 150px;
   }
</style>
<?php   $result = mysqli_query($db, "SELECT * FROM users WHERE username='$username'"); ?>
<div class="infobox">
  <div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<a href='images/".$row['image']."' download><img src='images/".$row['image']."' >";
      echo "</div>";
    }
  ?>
  <div class="addimage">
  <form method="POST" action="profile.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
      <input type="file" name="image">
      <button type="submit" name="upload">add image</button>
  </form>
  </div>
</div>
  <?php  if (isset($_SESSION['username']) AND isset($_SESSION['email'])) : ?>
      <h2 class="upper"><strong><?php echo $_SESSION['username']; ?></strong></h2>
    <?php endif ?>
    <?php $results = mysqli_query($db, "SELECT * FROM users WHERE username='$username' "); 
    while ($row = mysqli_fetch_array($results)) { ?>
    <form method="POST" action="profile.php">
      <div class="inputbox">
        <input type="email" name="emailedited" value="<?php echo $_SESSION['email']; ?>">
        <label >email  : </label>
      </div>
      <div class="inputbox">  
        <input type="text" name="phone" value="<?php echo $row['phone'] ; ?>">
        <label>phone  : </label>
      </div>
      <div class="inputbox">  
        <input type="text" name="address" value="<?php echo $row['address']; ?>">
        <label>adresse : </label>
      </div>
      <div class="inputbox">  
        <input type="date" name="birthday" value="<?php echo $row['birthday']; ?>">
        <label>birthday : </label>
      </div>
      <div class="inputbox">  
        <input type="text" name="ine" value="<?php echo $row['ine']; ?>">
        <label>INE : </label>
      </div>
        <button class="profiledit"  name="editprofil"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
 edit profile </button>
    </form>  
    <?php } ?>
    </div>
    <style type="text/css">
      .profiledit {
        color: black;
        border: 1px solid #000;
        padding: 6px;
        border-radius: 10px;
        position: absolute;
        top: 90%;
        right: 5%;
      }
      .profiledit:hover {
        cursor: pointer;
      }
      /*--------infobox-------*/
      .upper{
  text-transform: uppercase;
}
.infobox {
  position: absolute;
  top: 62%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding: 40px;
  background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(7,53,144,1) 43%, rgba(9,21,121,0.6727065826330532) 56%, rgba(0,212,255,1) 100%);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  opacity: 1;
  height: 460px;
}
.infobox h2 {
  margin: 0 0 30px;
  margin-top: 30px;
  color: #fff;
  text-align: center;

} 
.infobox .inputbox {
  position: relative;
  color: #fff;
} 
.infobox .inputbox input {
  width: 100%;
  padding: 10px 0 ;
  font-size: 16px;
  color: #fff;
  letter-spacing: 1px;
  margin-bottom: 30px;
  border:none;
  border-bottom: 1px solid #fff;
  outline: none;  
  background: transparent;

}
.infobox .inputbox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px:
  color:#00FFFF;
  pointer-events: none;
  transition: .5s;
  opacity: 1;

}
.infobox .inputbox input:focus ~ label,
.infobox .inputbox input:valid ~ label
 {
  top: -18px;
  left: 0;
  color: #00FFFF;
  font-size: 12px;
}
    </style>
</div>
  <form method="POST" action="profile.php">
    <div class="users-box">
  <a class="users-btn" href="#"><i class="fa fa-users" aria-hidden="true"></i></a><br>
   <input class="friend-name" type="text" placeholder="friend's username" name="friend"><br><br>
   <button class="btns"  name="contacter">Contacter </button>
   <button class="btns" name="visitprofile">Visit profile</button>
   </div> 
 </form>
<style type="text/css">
  /*------friendbox-------*/
  .btns {
    text-decoration: none;
        color: black;
        border: 2px solid #000;
        padding: 6px;
        border-radius: 10px;
        width: 100px;
        height: 40px;
        background-color: white;
}
.btns:hover {
  cursor: pointer;
}

.users-box {
  position: absolute;
  top: 5%;
  left: 2%;
  background-color: white ;
  height: 45px;
  border-radius: 40px;
  padding: 10px;
  opacity: 0.8;
}
.friend-name {
  top: 10%;
  border: none;
  border-bottom: 1px solid black;
  background:none;
  float: left;
  padding: 0;
  overflow: visible;
  color: black;
  font-size: 16px;
  transition: 0.4s;
  width: 150px;
}
.users-box:hover > .users-btn {
  background: black;
  color: #ffebcd;
  opacity: 1;
}
.users-btn{
  color: #000080;
  float: right;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: white;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;

}
</style>
</body>
</html>