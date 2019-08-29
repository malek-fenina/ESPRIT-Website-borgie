<?php  	include'assets/include/header.php';
		include"classe_reclamation.php";
		include"bd.php";
		include"fonction_php.php";
 ?>

	<div class="row">
	<title>Borgie Decor</title>
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
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir </a>
				<img src="assets/img/poster_9.jpg" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">Voir</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir </a>
				<img src="assets/img/poster_2.jpg" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">Voir</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir </a>
				<img src="assets/img/poster_10.jpg" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">Voir</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir </a>
				<img src="assets/img/poster_6.jpg" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">Voir</a> <span class="pull-right">TND 22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="assets/img/bootstrap_free-ecommerce.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4 style="background-color:#74c044">Store blanc cassée </h4>
                      <p><span>Trés propre ,simple d'utilisation</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="assets/img/Gazon_Artificielle.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4 style="background-color:#74c044">Gazon Artificielle</h4>
                      <p><span>Haute Qualité,20% Réduction</span></p>
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="assets/img/Revetement_jardin_enfants.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4 style="background-color:#74c044">Revêtement de sol pour jardin d'enfant</h4>
                      <p><span>Simple d'intégrer et à étendre </span></p>
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="assets/img/Posters_chambre_enfant.jpg" alt="bootstrap templates">
                <div class="carousel-caption">
                      <h4 style="background-color:#74c044">Posters Enfants</h4>
                      <p><span>Pour jeunes filles ,40% Réduction</span></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3>Nouveaux produits </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
					<a href="#" class="tag"></a>
					<a href="product_details.php"><img src="assets/img/poster_5.jpg" alt="bootstrap-ring"></a>
				</div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
					<a href="#" class="tag"></a>
					<a  href="product_details.php"><img src="assets/img/Posters_1.jpg" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
					<a href="#" class="tag"></a>
					<a  href="product_details.php"><img src="assets/img/poster_2.jpg" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
					<a  href="product_details.php"><img src="assets/img/poster_3.jpg" alt=""></a>
				  </div>
				</li>
			  </ul>
			  </div>
		   <div class="item">
		  <ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/poster_4.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/poster_6.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/poster_7.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/poster_8.jpg" alt=""></a>
			  </div>
			</li>
		  </ul>
		  </div>
		   </div>
		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir </a>
				<a href="product_details.php"><img src="assets/img/poster_10.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Posters enfants</p>
					<p><strong> TND 22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Ajouter au panier </a></h4>
					<div class="actionList">

					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span>Voir </a>
				<a href="product_details.php"><img src="assets/img/poster_2.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Posters enfants </p>
					<p><strong> TND 22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Ajouter au panier </a></h4>
					<div class="actionList">

					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a href="product_details.php"><img src="assets/img/poster_7.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Posters enfants </p>
					<p><strong> TND 22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Ajouter au panier </a></h4>
					<div class="actionList">
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	</div>
	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="grid-view.php" title="View more">Regarder plus<span class="icon-plus"></span></a> Produit à venir  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/poster_6.jpg" alt=""></a>
				<div class="caption">
				  <h5>Posters enfants </h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">TND 80.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/Posters_1.jpg" alt=""></a>
				<div class="caption">
				  <h5>Posters enfants </h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">TND 24.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir</a>
				<a  href="product_details.php"><img src="assets/img/poster_5.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Posters enfants </h5>
				  <h4>
					  <a class="defaultBtn" href="product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">TND 26.00</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>	
	</div>
	</div>
	</div>
	</div>
<?php  include'assets/include/footer.php' ;?>