<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/signup.js"></script>
  
</head>
<body class="body">
    <form class="form-signup px-5 pb-5" action="php/insert.php" method="post" enctype="multipart/form-data">
        <h2 class="text-center">C.U.P.L</h2>

        <fieldset>
            <legend>Admin Details:</legend>
            <div class="label-group">
                <input type="text" name="name" placeholder="Enter Name" class="form-control" id="inputname" required autofocus>
                <label for="inputname">Name</label>
            </div>

            <div class="label-group">
                    <input type="text" name="username" placeholder="Enter Username" class="form-control" id="inputname" required>
                    <label for="inputname">Username</label>
                </div>
        </fieldset>
        
        <fieldset>
            <legend>Club Details:</legend>
            <div class="form-group">
                    <select id="inputclub" name="club" required>
                        <option value="">----Enter your Club----</option>
                        <option value="Eagles United">Eagles United</option>
                        <option value="Fc Knights">FC Knights</option>
                        <option value="Flamy Warriors">Flamy Warriors</option>
                        <option value="Masters FC">Masters FC</option>
                        <option value="Panther City">Panther City</option>
                        <option value="CU Rangers">CU Rangers</option>
                    </select>
                </div>

                <div class="form-group">
                    <select id="inputrole" name="clubrole" required>
                        <option value="">----Enter your role----</option>
                        <option value="Captain">Captain</option>
                        <option value="Coach">Coach</option>
                        <option value="Owner">Owner</option>
                    </select>
                </div>
        </fieldset>

        <fieldset>
            <legend>Security:</legend>
         <div class="form-group">
            <input  type="password" name="password" placeholder="Enter Password" class="form-control" id="inputpassword" required>
            
        </div>

        

        <div class="form-group">
            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" id="confirmpassword" required>
            
        </div>

        <p id="message"></p>
        </fieldset>

        <!-- <a class="btn btn-lg btn-outline-success btn-block btn-block" href="user.html">Sign Up</a> -->
        <input type="submit" name="button" value="Sign Up" class="btn btn-lg btn-outline-success btn-block btn-block">
    </form>
    

   
   
    
    
</body>
</html>