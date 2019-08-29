<?php  include'assets/include/header.php'; ?>	
  <title>Reclamation</title>
     <ul class="breadcrumb">
    <li><a href="index.php">Acceuil</a> <span class="divider">/</span></li>
    <li class="active">Livraison</li>
    </ul>
  <hr class="soften">
	<div class="well well-small">
	<center><h1>Est-ce qu'il y a un problème ?</h1></center>
	<hr class="soften"/>	
		<center><h4>Réclamation </h4></center>
		<form name="f" action="main.php" method="post" class="form-horizontal" onsubmit="return validervide();">
        <fieldset class="fieldset">
   		   <div class="control-group">
              <input type="text" placeholder="Numéro de Commande" class="input-xlarge" name="in1" onblur="queDesChiffres(this);"/>
              <br>
              <span id="error3"></span>
          </div>
          <div class="control-group">
           
              <input type="text" placeholder="Numéro de téléphone" class="input-xlarge" name="in2" onblur="queDesChiffres(this);verifNum(this)"/>
              <br>
              <span id="error1"></span>
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge" name="in3" ></textarea>
              <br>
              <span id="error2"></span>
          </div>
            <button class="shopBtn" type="submit" >Envoyer votre réclamation</button>
            <input type="hidden" name="action" value="insert">
        </fieldset>
      </form>


	
</div>
<?php  include'assets/include/footer.php' ;?>
