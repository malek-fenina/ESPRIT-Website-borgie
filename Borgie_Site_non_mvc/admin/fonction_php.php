<?php 
include'../bd.php';
function supLiv(){
	
	if(isset($_POST['livDelete'])){
 	$livID=$_POST['livDelete'];

	$sql="DELETE FROM livraison WHERE livID='$livID'";
	config::getInstance()->conn->query($sql);
 	}
}

function supRec(){
	
	if(isset($_POST['recDelete'])){
 	$comref=$_POST['recDelete'];

	$sql="DELETE FROM reclamation WHERE comref='$comref'";
	config::getInstance()->conn->query($sql);
 	}
}

function modEtat(){
	
	if(isset($_POST['livModb'])){
 	$livID=$_POST['livModb'];
 	$etat_livraison=$_POST['livModh'];

	$sql="UPDATE livraison SET etat_livraison='$etat_livraison' WHERE livID=$livID";
	config::getInstance()->conn->query($sql);
 	}
}
 ?>