<?php
include"classe_reclamation.php";
include"bd.php";
include"fonction_php.php";


if($_POST['action'] == "insert"){
	insert();
	header("location:index.php");
}

if($_POST['action'] == "inser"){
	inser();
	header("location:index.php");
}

if($_POST['action'] == "contact"){
	contact_us();
}

?>