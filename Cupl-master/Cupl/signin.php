
<?php 
    require("php/signin1.php");
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CUPL | Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signin.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
</head>
<body>

    <form class="form-signin border border-success p-4 rounded" action="signin.php" method="post">
                <h4><?php 
                    if (isset($echo)) {
                        # code...
                        echo $echo;
                    }
             ?></h4>
        <h3 class="text-center mb-4">CUPL</h3>
        <div class="form-label-group">
            <input type="username" name="username" id="username" class="form-control" placeholder="Username" required>
            <label for="username">Username</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <div class="text-right mb-3" id="not">
            <a href="signup.php">New User?</a>
        </div>

        <div class="">
            <input type="submit" name="Login" value="Login" class="btn btn-lg btn-outline-success btn-block btn-block">
            <!-- <a class="btn btn-lg btn-outline-success btn-block btn-block" href="user.html">Login</a> -->
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; Naemo 2018</p>
    </form>
    
</body>
</html>