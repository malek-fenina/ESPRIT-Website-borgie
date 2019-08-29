<?php
    include'../fonction_php.php';  
    include'../bd.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Delete Livraison</title>
    <link rel="shortcut icon" href="ico/logo_1.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js\js.js"></script>
  </head>

  <body>
  <form name="f" action="main.php" method="post" onsubmit="return validervide3();">
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Espace Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Acceuil</a></li>
            <li class="active"><a href="index.html"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="..\index.php">Welcome</a></li>
            <li><a href="login.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <head id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <img src="logo_1.png">
      </div>
    </div>
  </div>
  </head>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="rox">
        <div class="col-md-3">
          <div class="list-group">
          <a href="#" class="list-group-item active main-color-bg">
            <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Les Gestions :
          </a>
          <a href="livDelete.php" class="list-group-item"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer livraison</a>
          <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier livraison</a>
          <a href="#" class="list-group-item">-----------------------------------------------</a>
          <a href="recDelete.php" class="list-group-item"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer reclamation</a>
          <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier reclamation</a>
          <a href="#" class="list-group-item">-----------------------------------------------</a>
          <a href="#" class="list-group-item"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer commande</a>
          <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Modifier commande</a>
        </div>
        </div>
      <div class="col-md-9">

    <div class="panel panel-default">
    <div class="panel-heading main-color-bg3">
      <h3 class="panel-title">Les Livraisons</h3>
    </div>
    <div class="panel-body">
    <?php afficha(); ?>
    <hr>
  <center><h3>Modifier l'etat du livraion</h3></center>
  <br>
  <center><input type="text" placeholder="ID livraison" name="livModb" onblur="queDesChiffres(this);"/></center>
  <center><span id="error3"></span></center>
  <br>
  
  <center><input type="text" placeholder="Etat" name="livModh" onblur="queDesLettres(this);"/></center>
  <center><span id="error4"></span></center>
  <br>
  <center><button class="shopBtn" type="submit" >Modifier</button></center>
  <input type="hidden" name="action" value="livMod">
    </div>
    </div>

      </div>
      </div>
    </div>
  </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </form>
  </body>
</html>
