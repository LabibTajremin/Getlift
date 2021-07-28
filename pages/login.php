<?php include('check1.php') ?>
<?php include('check.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            User login
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2> Login </h2>
        </div>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            
             <div class="input-group">
                <lebel>Mobile Number</lebel>
                <input type="text" id="m_num" name="m_num"><br>
            
            </div>
            <div class="input-group">
                <lebel>Password</lebel>
                <input type="Password" id="Pass" name="Pass"><br>
        
            </div>
          
            <div class="input-group">
            <button type="submit" class="btn" name="login">Login</button>
                     </div>
             <p>
  		        Not a member? <a href="signin_page.php">Sign up</a>
  	        </p>


        </form>
       
    </body>
</html>