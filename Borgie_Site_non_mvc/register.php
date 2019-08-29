<?php  include'assets/include/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->


	<div class="row">
<div id="sidebar" class="span3">
<?php include'assets/include/droit.php'; ?>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Réduction </h2>
				  <p> 
					 Seulement pour les commandes online <br><br><a class="defaultBtn" href="#">Cliquez ICI </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Produit à venir <br><small>Cliquez pour regarder</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/poster_9.jpg" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/poster_8.jpg" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/poster_7.jpg" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Acceuil</a> <span class="divider">/</span></li>
		<li class="active">Inscription</li>
    </ul>
	<h3 class="num"> Inscription</h3>	
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal">
		<h3>Formulaire </h3>
		<hr class="loun">
		<div class="control-group">
		<label class="control-label">Sexe</label>
		<div class="controls">
		<select class="span1" name="days">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="3">Mme.</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">Nom </label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="Nom">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Prenom </label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Prenom">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email </label>
		<div class="controls">
		  <input type="text" placeholder="Email">
		</div>
	  </div>
	  	<div class="control-group">
		<label class="control-label" >ID </label>
		<div class="controls">
		  <input type="text" placeholder="nom d'utilisateur">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Mot de passe </label>
		<div class="controls">
		  <input type="password" placeholder="Mot de passe">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label">Date de naissance </label>
		<div class="controls">
		<input type="date" name="days">
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Inscrire" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>

</div>
</div>
<?php  include'assets/include/footer.php' ;?>