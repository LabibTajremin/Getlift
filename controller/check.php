<?php



  if (isset($_POST['login'])) {
  $m_num = mysqli_real_escape_string($db, $_POST['m_num']);
  $password = mysqli_real_escape_string($db, $_POST['Pass']);
      

  if (empty($m_num)){ 
  	array_push($errors, "mobile number is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE mobile_number='$m_num' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homepage.php');
  	}
      else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>