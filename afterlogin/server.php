<?php
session_start();

// initializing variables
$username = "";
$emailconf ="";
$email    = "";
$id = 0;
$address = "";
$phone = "";
$msg = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: afterlogin/profile.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Username is required");
   } 
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {

        $_SESSION['username'] = $username;
        $_SESSION['email']= $email;
        $_SESSION['success'] = "You are now logged in";
        if ($username= 'hajjaji ayyoub') {
          header('location: afterlogin/adminprofile.php');
        }else{
        header('location: afterlogin/profile.php');
      }
      }else {
        array_push($errors, "Wrong username or email or password ");
      }
  }
}

//-------------
//____________
// edit profile
        
if (isset($_POST['editprofil'])) {
  $username=$_SESSION['username'];
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
  $ine = mysqli_real_escape_string($db, $_POST['ine']);

  mysqli_query($db, "UPDATE users SET  phone='$phone', address='$address', birthday='$birthday', ine='$ine' WHERE username='$username'");
  $_SESSION['success'] = "Profile updated!"; 

  header('location: profile.php');
}
//--------
//--------
//---image de profile----
 if (isset($_POST['upload'])) {
  $username=$_SESSION['username'];
    // Get image name
    $image = $_FILES['image']['name'];

    // image file directory
    $target = "images/".basename($image);
    $sql = "UPDATE users SET image ='$image' WHERE username='$username' ";
    // execute query
    mysqli_query($db, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
//------------
  ///----------
  //-----contact
if (isset($_POST['contacter'])) {
  $friendname = mysqli_real_escape_string($db, $_POST['friend']);
  $username=$_SESSION['username'];
  if ($friendname!= $username) {
    $querys = "SELECT * FROM users WHERE username='$friendname' ";
    $results = mysqli_query($db, $querys);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['friendname'] = $friendname;
      header('location: chat.php');
    }else {
      array_push($errors, "Ce compte n'existe pas");
    }
    $recievemessage="you have no messages  ";
    mysqli_query($db,"UPDATE users SET recievemessage='$recievemessage' WHERE username='$username' ");

} 
else {
  $_SESSION['success']="mauvais username";
}
}


if (isset($_POST['contacter1'])) {
  $friendname = mysqli_real_escape_string($db, $_POST['friend']);
  $username = $_SESSION['username'];
  if ($friendname!= $username) {
    $querys = "SELECT * FROM users WHERE username='$friendname' ";
    $results = mysqli_query($db, $querys);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['friendname'] = $friendname;
      header('location: chatother.php');
    }else {
      array_push($errors, "Ce compte n'existe pas");
    }
     $recievemessage="you have no messages  ";
    mysqli_query($db,"UPDATE users SET recievemessage='$recievemessage' WHERE username='$username' ");
} 
else {
  $_SESSION['success']="mauvais username";
}
}
   
  
if(isset($_POST['envoyer'])){
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $name = $_SESSION['username'];
  $friendname = $_SESSION['friendname'];

  $message = "INSERT INTO messages (name, friendname, message) 
          VALUES('$name', '$friendname', '$message')";
    mysqli_query($db, $message);
    $recievemessage="you have message from $name ";
    mysqli_query($db,"UPDATE users SET recievemessage='$recievemessage' WHERE username='$friendname' ");

header('location: chat.php');
}


if(isset($_POST['envoyer1'])){
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $name = $_SESSION['username'];
  $friendname = $_SESSION['friendname'];

  $message = "INSERT INTO messages (name, friendname, message) 
          VALUES('$name', '$friendname', '$message')";
    mysqli_query($db, $message);
     $recievemessage="you have message from $name ";
    mysqli_query($db,"UPDATE users SET recievemessage='$recievemessage' WHERE username='$friendname' ");

header('location: chatother.php');
}
//--------------------
//----------------
//----visitprofile
if (isset($_POST['visitprofile'])) {
  $friendname = mysqli_real_escape_string($db, $_POST['friend']);
   $querys = "SELECT * FROM users WHERE username='$friendname' ";
    $results = mysqli_query($db, $querys);
    if (mysqli_num_rows($results) == 1) {

      $_SESSION['friendname'] = $friendname;
      header('location: othersprofile.php');
    }else {
      array_push($errors, "Ce compte n'existe pas");
    }
}
?>