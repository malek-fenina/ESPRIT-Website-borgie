<?php 
//require_once('classe_reclamation.php');
//require_once('classe_commande.php');
//require_once('classe_livraison.php');
//reclamation fonctions
 function insert(){
 	if(isset($_POST['in1'])){
 	$comref=$_POST['in1'];
	$num=$_POST['in2'];
	$rectext=$_POST['in3'];

	$sql="insert into reclamation(comref,num,rectext) values ('$comref','$num','$rectext')";
	config::getInstance()->conn->query($sql);
	
 }

 }


 function verifcomID($comID){
	 return 1;
 }

function inser(){
    if(isset($_POST['comID'])){
              $comID=$_POST['comID'];
            $livDate=$_POST['days'];
            $livVille=$_POST['ville'];
            $livRue=$_POST['rue'];
            $livNum=$_POST['num'];
            //$etat_livraison= echo"ili iji hhhh";
 
        if(verifcomID($comID==1)){
          // command exist but no livraison yet
          $sql="insert into livraison(comID,livDate,livVille,livRue,livNum,etat_livraison) values ('$comID','$livDate','$livVille','$livRue','$livNum','ili iji')";
 
        }
        else if (verifcomID($comID==2)) {
          // command exit and livraison too
          // sql="update .... where comID=$_GET['id']"
        }
        else {
          // no command found with this id => error
          echo "Error no command with this id";
        }
     config::getInstance()->conn->query($sql);
    }
 }

 function affichage(){
	$sql="SELECT * FROM reclamation";
	$x = config::getInstance()->conn->prepare($sql);
	$x->execute();
	//echo $sql;
	$s = $x->fetchAll();
	//var_dump($s);
	echo"<table class='table table-striped table-hover'>";
		echo"<tr>";
		echo"<td align='center'>";echo "Les References des commandes";echo"</td>";
		echo"<td align='center'>";echo "Les Numeros de telephone";echo"</td>";
		echo"<td align='center'>";echo "Les Reclamation";echo"</td>";
		echo"</tr>";
	foreach ($s as $donne) {
		echo"<tr>";
		echo"<td align='center'>";echo $donne['comref'];echo"</td>";
		echo"<td align='center'>";echo $donne['num'];echo"</td>";
		echo"<td align='center'>";echo $donne['rectext'];echo"</td>";
		echo"</tr>";
	}
	echo"</table>";


}

function affichag(){
	$sql="SELECT * FROM commande";
	$x = config::getInstance()->conn->prepare($sql);
	$x->execute();
	//echo $sql;
	$s = $x->fetchAll();
	//var_dump($s);
	echo"<table class='table table-striped table-hover'>";
		echo"<tr>";
		echo"<td align='center'>";echo "ID commande";echo"</td>";
		echo"<td align='center'>";echo "Date commande";echo"</td>";
		echo"<td align='center'>";echo "Commande total";echo"</td>";
		echo"<td align='center'>";echo "Panier ID";echo"</td>";
		echo"<td align='center'>";echo "Commande description";echo"</td>";
		echo"<td align='center'>";echo "Livraison";echo"</td>";
		echo"</tr>";
	foreach ($s as $donne) {
		echo"<tr>";
		echo"<td align='center'>";echo $donne['comID'];echo"</td>";
		echo"<td align='center'>";echo $donne['comDate'];echo"</td>";
		echo"<td align='center'>";echo $donne['comTotal'];echo"</td>";
		echo"<td align='center'>";echo $donne['panierID'];echo"</td>";
		echo"<td align='center'>";echo $donne['comDescription'];echo"</td>";
		echo"<td align='center'>";echo "<a href=livraison.php>Livrer</a>";echo"</td>";
		echo"</tr>";
	}
	echo"</table>";


}

function affichagg(){
	$sql="SELECT * FROM commande";
	$x = config::getInstance()->conn->prepare($sql);
	$x->execute();
	//echo $sql;
	$s = $x->fetchAll();
	//var_dump($s);
	echo"<table class='table table-striped table-hover'>";
		echo"<tr>";
		echo"<td align='center'>";echo "ID commande";echo"</td>";
		echo"<td align='center'>";echo "Date commande";echo"</td>";
		echo"<td align='center'>";echo "Commande total";echo"</td>";
		echo"<td align='center'>";echo "Panier ID";echo"</td>";
		echo"<td align='center'>";echo "Commande description";echo"</td>";
		echo"</tr>";
	foreach ($s as $donne) {
		echo"<tr>";
		echo"<td align='center'>";echo $donne['comID'];echo"</td>";
		echo"<td align='center'>";echo $donne['comDate'];echo"</td>";
		echo"<td align='center'>";echo $donne['comTotal'];echo"</td>";
		echo"<td align='center'>";echo $donne['panierID'];echo"</td>";
		echo"<td align='center'>";echo $donne['comDescription'];echo"</td>";
		echo"</tr>";
	}
	echo"</table>";


}

function afficha(){
	$sql="SELECT * FROM livraison";
	$x = config::getInstance()->conn->prepare($sql);
	$x->execute();
	//echo $sql;
	$s = $x->fetchAll();
	//var_dump($s);
	echo"<table class='table table-striped table-hover'>";
		echo"<tr>";
		echo"<td align='center'>";echo "ID commande";echo"</td>";
		echo"<td align='center'>";echo "ID livraison";echo"</td>";
		echo"<td align='center'>";echo "Date livraison";echo"</td>";
		echo"<td align='center'>";echo "Ville livraison";echo"</td>";
		echo"<td align='center'>";echo "Rue livraison";echo"</td>";
		echo"<td align='center'>";echo "livraison Num téléphone";echo"</td>";
		echo"<td align='center'>";echo "livraison etat";echo"</td>";
		echo"</tr>";
	foreach ($s as $donne) {
		echo"<tr>";
		echo"<td align='center'>";echo $donne['comID'];echo"</td>";
		echo"<td align='center'>";echo $donne['livID'];echo"</td>";
		echo"<td align='center'>";echo $donne['livDate'];echo"</td>";
		echo"<td align='center'>";echo $donne['livVille'];echo"</td>";
		echo"<td align='center'>";echo $donne['livRue'];echo"</td>";
		echo"<td align='center'>";echo $donne['livNum'];echo"</td>";
		echo"<td align='center'>";echo $donne['etat_livraison'];echo"</td>";
		echo"</tr>";
	}
	echo"</table>";


}

function contact_us(){
		/*$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$sujet=$_POST['sujet'];
		$vide=$_POST['vide'];*/

		//$msg='Nom:'.$nom.'Prenom:'.$prenom.'Email:'.$email.'Sujet:'.$sujet.$vide;
		mail('malek.fenina@esprit.tn','Contactez nous','aaaaaaa','bbbbb');
}
 ?>