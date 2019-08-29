<?php  include'assets/include/header.php'; ?>
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
	</div>
	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.php">Acceuil</a> <span class="divider">/</span></li>
		<li class="active">Panier</li>
    </ul>
	<div class="well well-small">
		<h1>Panier<small class="pull-right"> 2 Produits sont dans le panier </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Produit</th>
                  <th>Description</th>
				  <th>	Ref. </th>
                  <th>Dispo.</th>
                  <th>Prix Unitaire</th>
                  <th>Quantité </th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                  <td><img width="100" src="assets/img/img.jpg" alt=""></td>
                  <td>Papier Peint<br><br></td>
                  <td> - </td>
                  <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                  <td>50.00DT</td>
                  <td>
					<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="2">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				</td>
                  <td>100.00DT</td>
                </tr>
				<tr>
                  <td><img width="100" src="assets/img/img1.jpg" alt=""></td>
                  <td>Papier Peint<br><br></td>
                  <td> - </td>
                  <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                  <td>348.42DT</td>
                  <td>
				  <input class="span1" style="max-width:34px" placeholder="1" size="16" type="text">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button">+</button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				  </td>
                  <td>348.42DT</td>
                </tr>
               
                </tr>
				 <tr>
                  <td colspan="6" class="alignR">Totale :	</td>
                  <td class="label label-primary">448.42DT</td>
                </tr>
				</tbody>
            </table><br/>
			
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-inline">
				  <label style="min-width:159px">Code de pormotion: </label> 
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="shopBtn"> Ajouter</button>
				</form>
				</td>
                </tr>
				
			</tbody>
				</table>		
	<a href="products.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span></a>
	<a href="livraison.php" class="shopBtn btn-large pull-right">Suivant <span class="icon-arrow-right"></span></a>

</div>
</div>
</div>
<?php  include'assets/include/footer.php' ;?>
