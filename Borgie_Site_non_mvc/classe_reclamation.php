<?php 

class reclamation{
	//attributs
	private $comref;
	private $num;
	private $rectext;

	//methodes

	public function getComref(){
		return $this->comref;
	}

	public function setComref($comref){
		$this->comref=$comref;
	}

	public function getNum(){
		return $this->num;
	}

	public function setNum($num){
		$this->num=$num;
	}

	public function getRectext(){
		return $this->rectext;
	}

	public function setRectext($rectext){
		$this->rectext=$rectext;
	}


function __construct($comref,$num,$rectext){
	
	$this->comref=$comref;
	$this->num=$num;
	$this->rectext=$rectext;
}

}
?>