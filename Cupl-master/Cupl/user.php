
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/user.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/user.js"></script>
</head>

<body>

        <nav id="sidenav" role="navigation" class="sidenav">
                
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#side">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div id="side">
                <a class="action" href="">Home</a>
                <a href="">Register player</a>
                <a href="">Settings</a>
                <a href="php/logout.php">Sign out</a>
                </div>
                </nav>
                
                
                
                
                
                <div id="page-content">
                
                <div class="wrapper" id="main">
                <div id="home" class="container">
                <div class="jumbotron text-center">
                <h2 id="liverpoolhomepage">Liverpool</h2>
                </div>
                </div>
                
                
                <div class="container">
                <div id="form">
                <div class="text-center form-group">
                <input type="file">
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                <label for="clubowner">Club Owner:</label>
                </div>
                <div class="col-sm-10">
                <input id="static" readonly placeholder="Gab Marcotti">
                </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                <label for="manager">Manager:</label>
                </div>
                <div class="col-sm-10">
                <input id="static" readonly placeholder="Nero Bero">
                </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                <label for="captain">Captain</label>
                </div>
                <div class="col-sm-10">
                <input id="static" readonly placeholder="David Olominu">
                </div>
                </div>
                </div>
                </div>
                <div id="standings" class="text-center border border-dark">
                <table>
                <caption id="#caption">CUPL Season 2018/2019</caption>
                <tr>
                <th id="team" scope="col">Team</th>
                <th id="wins" scope="col">Won</th>
                <th id="draws" scope="col">Draw</th>
                <th id="lost" scope="col">Lost</th>
                <th id="gamesplayed" scope="col">Pl</th>
                <th id="goalsagainst" scope="col">Ga</th>
                <th id="goalsfor" scope="col">Gf</th>
                <th id="goaldifference" scope="col">Gd</th>
                <th id="points" scope="col">Pts</th>
                </tr>
                
                <tr>
                <td scope="row">Liverpool</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Manchester United</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Bayern Munich</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Monaco</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">PSG</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Barcelona</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Real Madrid</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Napoli</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                
                <tr>
                <td scope="row">Juventus</th>
                <td id="wins" scope="row">0</th>
                <td id="draws" scope="row">0</th>
                <td id="lost" scope="row">0</th>
                <td id="gamesplayed" scope="row">0</th>
                <td id="goalsagainst" scope="row">0</th>
                <td id="goalsfor" scope="row">0</th>
                <td id="goaldifference" scope="row">0</th>
                <td id="points" scope="row">0</th>
                </tr>
                </table>
                </div>
                </div>
















    <script src="js/bootstrap.min.js"></script>
    <script src="/Users/apple/Documents/neww/TT user page/jquery-3.3.1.min.js"></script>



</body>

</html>
