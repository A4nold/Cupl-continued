<?php 

    $dbconnect = mysqli_connect("localhost","root","","cupl") or die ("Failed to connect !!!");


        $name = $_POST['name'];
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $cpass = $_POST['confirmpassword'];
        $club = $_POST['club'];
        $role = $_POST['clubrole'];

        $add = "insert into sign_up (name, username, password, confirmpassword, club, clubrole) values 
                ('$name','$uname','$pass','$cpass','$club','$role')";

        $check = mysqli_query($dbconnect, $add);

        if ($check) {
            # code...
            echo "<h1>Values have been entered</h1>";
            echo "<a href='../signin.php'>Click to sign in</a>";
        }

 ?>