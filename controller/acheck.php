<?php


  if (isset($_POST['alogin'])) {
  $uname = mysqli_real_escape_string($db, $_POST['aid']);
  $pass = mysqli_real_escape_string($db, $_POST['aPass']);
      
            


  if (empty($uname)){ 
  	array_push($errors, "ID is required");
  }
  if (empty($pass)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
//  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE admin_id='$uname' AND pass='$pass'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
//      $table=$result->fetchAll(PDO::FETCH_NUM);
//      $username=$table[0];
      $_SESSION['username'] = $uname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: adminpage.php');
  	}
      else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>