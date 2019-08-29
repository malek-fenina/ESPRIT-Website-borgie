<?php
include'fonction_php.php';


if($_POST['action'] == "livDelete"){
	supLiv();
	header("location:index.php");	
}

if($_POST['action'] == "recDelete"){
	supRec();	
	header("location:index.php");
}

if($_POST['action'] == "livMod"){
	modEtat();	
	header("location:index.php");
}

?>