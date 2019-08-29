<?php 
if(!isset($_GET['id'])){
	echo "ID not set";
	exit();
}

 ?>
<?php  include'assets/include/header.php'; ?>
<title>Livraison</title>
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
				  <h4><a class="defaultBtn" href="product_details.php">VOIR</a> <span class="pull-right">TND 22.00</span></h4>
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
		<li><a href="admin_commande.php">Commande</a> <span class="divider">/</span></li>
		<li class="active">Livraison</li>
    </ul>
	<h3 class="num"> Livraison</h3>	
	<hr class="soft"/>
	
	<div class="row">

		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h2>Coordonnées De Livraison </h2>
			<hr class="loun"><br>
			<form name="f" action="main.php" method="post" onsubmit="return validervid();">
			  <div class="control-group">
					<center><h3>Quand souhaitez-vous Commander ?</h3></center>
				<div class="controls">
				 <center> <input type="date" name="days" style="width: 150px;"></center>
				 <center><span id="error4"></span></center>
				</div>
			  </div><br>
			  <div class="control-group">
				<center><label><h3>Ville ou Carte postal</h3></label></center>
				<div class="controls">
				 <!--<center><input type="text"  name="ville" placeholder="Ville ou Carte postal"></center>-->
				 <center><select name="ville">
				 	<option>--</option>
				 	<option>Tunis</option>
				 	<option>Nabeul</option>
				 	<option>Sfax</option>
				 	<option>Sousse</option>
				 	<option>Gafsa</option>
				 	<option>Tataouine</option>
				 </select></center>
              	<center><span id="error5"></span></center>
				</div>
			  </div><br>
			  	<div class="control-group">
				<center><label><h3>Rue</h3></label></center>
				<div class="controls">
				  <center><input type="text" name="rue" placeholder="Rue"></center>
				  <center><span id="error6"></span></center>
				</div>
			  </div><br>
			  	<div class="control-group">
				<center><label><h3>Numéro de téléphone</h3></label></center>
				<div class="controls">
				  <center><input type="text"  name="num" placeholder="Numéro de téléphone" onblur="queDesChiffres(this);verifNum(this)""></center>
				  <center><span id="error7"></span></center>
				</div>
			  </div><br>
			  <div class="control-group">
				 <center><button type="submit" class="shopBtn">Livrer</button></center>  
			  </div>
			  <input type="hidden" name="comID" value="<?php echo $_GET['id']; ?>">
			  <input type="hidden" name="action" value="inser">
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div>
<?php  include'assets/include/footer.php' ;?>