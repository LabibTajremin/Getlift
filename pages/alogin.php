<?php include('check1.php') ?>
<?php include('acheck.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin login
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2> Login </h2>
        </div>
        <form method="post" action="alogin.php">
            <?php include('errors.php'); ?>
            
             <div class="input-group">
                <lebel>Admin Id</lebel>
                <input type="text" id="aid" name="aid"><br>
            
            </div>
            <div class="input-group">
                <lebel>Password</lebel>
                <input type="Password" id="aPass" name="aPass"><br>
        
            </div>
          
            <div class="input-group">
            <button type="submit" class="btn" id="alogin" name="alogin">Login</button>
                     </div>
           


        </form>
       
    </body>
</html>