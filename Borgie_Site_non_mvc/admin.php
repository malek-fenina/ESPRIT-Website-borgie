<?php  include'assets/include/header.php';
		include'fonction_php.php';	
		include"bd.php";	
?>
<title>Connexion</title>
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
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> VOIR</a>
				<img src="assets/img/poster_6.jpg" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VOIR</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> VOIR</a>
				<img src="assets/img/poster_5.jpg" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VOIR</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Acceuil</a> <span class="divider">/</span></li>
		<li class="active">Espace Admin</li>
    </ul>
	<h3 class="num"> Les Reclamations</h3>	
	<hr class="soft"/>
	
	<div class="row">

		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">			
			<?php  
				affichage();
			?>
		</div>
		</div>
	</div>	

	<h3 class="num"> Les Livraisons</h3>	
	<hr class="soft"/>
	
	<div class="row">

		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">			
			<?php  
				afficha();
			?>
		</div>
		</div>
	</div>	
	
</div>
</div>
<?php  include'assets/include/footer.php' ;?>