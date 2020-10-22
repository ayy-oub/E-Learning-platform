<?php include('server.php') ?>
<?php 
$username = $_SESSION['username'];
if (isset($_SESSION['friendname'])) {
  $friendname= $_SESSION['friendname'];
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
<?php   $resultat = mysqli_query($db, "SELECT * FROM users WHERE username='$friendname'"); ?>
<div class="infobox">
  <div id="content">
  <img class="img_div" src="images/<?php
    while ($rows = mysqli_fetch_array($resultat)) {
        echo $rows['image'];
    }
  ?>">
</div>
  <?php  if (isset($_SESSION['friendname'])) : ?>
      <h2 class="upper"><strong><?php echo $_SESSION['friendname']; ?></strong></h2>
    <?php endif ?>
    <?php $results = mysqli_query($db, "SELECT * FROM users WHERE username='$friendname' "); 
    while ($row = mysqli_fetch_array($results)) { ?>
    <form method="POST" action="profile.php">
      <div class="inputbox">
        <input type="email" name="emailedited" value="<?php echo $row['email']; ?>">
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
        <input type="text" name="birthday" value="<?php echo $row['birthday']; ?>">
        <label>birthday : </label>
    </div>
     <div class="inputbox">  
        <input type="text" name="ine" value="<?php echo $row['ine']; ?>">
        <label>INE : </label>
      </div>
    </form>  
    <?php } ?>
    </div>
<style>
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
   <button class="btns"  name="contacter1">Contacter </button>
   <button class="btns" name="visitprofile">Visit profile</button>
   </div> 
 </form>  
<style type="text/css">
/*------friendbox-------*/
  .btns {
    text-decoration: none;
        color: black;
        border: 1px solid #000;
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
<div class="contactbox">
      <h2 class="titre"><a class="quiter" href="http://cloud/afterlogin/profile.php"><i class="fa fa-times-circle" aria-hidden="true"></i>
</a> <br><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo $friendname ; ?></h2><br>
      <div class="contactform">
      <form class="contact" action="server.php" method="POST">
      <div class="inputboxe">  
         <input type="text" name="message" placeholder="message à envoyer" >
        <button class="envoyer" name="envoyer1" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
      </div>  
      </form>
    </div>
    </div>  

<style type="text/css">
/*------messagebox-------*/
.contactform {
  position: absolute;
  top: 93%;
  left: 3%;
  width: 300px;

}
.inputboxe input {
  width: 260px;
  font-size: 22px;
  position: absolute;
  top: 61%;
  left: 1%;
  
}
.titre {
  text-align: center;
  color: black ;
  /*background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(7,53,144,1) 43%, rgba(9,21,121,0.6727065826330532) 56%, rgba(0,212,255,1) 100%);*/
    background: rgb(78,134,138);
background: radial-gradient(circle, rgba(78,134,138,1) 0%, rgba(251,251,251,1) 100%);
    box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  position: absolute;
  padding: 5px;
    top: 46%;
    left: 3%;
    width: 300px;
    height: 71px;
    border: 3px solid black;
    border-left : 3px solid black;
    border-right:  3px solid black;
}
.quiter{
  color: red;
  position: absolute;
  top: 0%;
  left:90%;
}
.envoyer {
  height: 32px;
  width: 30px;
   position: absolute;
  left: 90%;
    top: 0%;
}
.envoyer:hover {
    cursor: pointer;
}
.msgs {
  text-align: center;
  background: rgb(78,134,138);
background: radial-gradient(circle, rgba(78,134,138,1) 0%, rgba(251,251,251,1) 100%);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
  overflow-y: scroll;
  overflow-x: visible;
  width: 300px;
  height: 230px;
  position: absolute;
  left: 3%;
  top: 59%;
  border: 5px solid black;
    border-left : 3px solid black;
    border-right:  3px solid black;
}
</style>
<div id="msgs" class="msgs">    
<?php 
$reponse = mysqli_query($db, "SELECT * FROM messages WHERE (name='$username'AND friendname='$friendname') OR (name= '$friendname' AND friendname='$username')  ORDER BY ID ");
    while ($donnees = mysqli_fetch_array($reponse)) 
{
  echo '<p><strong>' . htmlspecialchars($donnees['name']) .'</strong>:' . htmlspecialchars($donnees['message']) . '</p>';
}
 ?>
</div>
<script type="text/javascript">
  var msgs=document.getElementById("msgs");
  msgs.scrollTop = msgs.scrollHeight ;
</script>
</body>
</html>