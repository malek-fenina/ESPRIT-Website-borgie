<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="assets\js\js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/logo_1.png">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="https://twitter.com/"><span class="icon-twitter"></span></a>
					<a href="https://www.facebook.com/"><span class="icon-facebook"></span></a>
					<a href="https://www.youtube.com/"><span class="icon-youtube"></span></a>
					<a href="https://www.tumblr.com/"><span class="icon-tumblr"></span></a>
				</div>
				<a href="index.php"> <span class="icon-home"></span> Acceuil </a> 
				<a href="admin/index.php"><span class="icon-user"></span> Admin </a> 
				<a href="register.php"><span class="icon-edit"></span> Inscription gratuite </a> 
				<a href="contact.php"><span class="icon-envelope"></span> Nous contacter </a>
				<a href="cart.php"><span class="icon-shopping-cart"></span> Piéce(s) - <span class="badge badge-warning"> 60 TND</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<a class="logo" href="index.php"><span> Logo </span>
		<img src="assets/img/logo_1.png" alt="bootstrap sexy shop">
	</a>
	
	</div>
	<div class="span4">
	<div >

	<i ></i>

	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong class="num"> Support (24/24) :  +216 52 57 41 94 </strong><br><br></p>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse"  >
			<ul class="nav">
			  <li class=""><a href="index.php">Acceuil</a></li>
			  <li class=""><a href="grid-view.php">Produit générale </a></li>
			  <li class=""><a href="general.php">Nouveauté </a></li>
			  <li class=""><a href="admin_commande.php">Livraison </a></li>
			  <li class=""><a href="general.php">Evenement </a></li>
			  <li class=""><a href="reclamation.php">Réclamation </a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Recherche" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Se connecter <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Mot de passe">
				  </div>
				  <center><u><a href="login.php">Ouvrir la page de connexion</a></u></center>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Se souvenir
					</label>
					<button type="submit" class="shopBtn btn-block">Se connecter</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->