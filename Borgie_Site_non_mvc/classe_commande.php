<?php 

class commande{
	//attributs
	private $comID;
	private $comDate;
	private $comTotal;
	private $panierID;
	private $comDescription;
	//methodes

	public function getcomID(){
		return $this->comID;
	}

	public function setcomID($comID){
		$this->comID=$comID;
	}


	public function getcomDate(){
		return $this->comDate;
	}

	public function setcomDate($comDate){
		$this->comDate=$comDate;
	}



	public function getcomTotal(){
		return $this->comTotal;
	}

	public function setcomTotal($comTotal){
		$this->comTotal=$comTotal;
	}


	public function getpanierID(){
		return $this->panierID;
	}

	public function setpanierID($panierID){
		$this->panierID=$panierID;
	}


	public function getcomDescription(){
		return $this->comDescription;
	}

	public function setcomDescription($comDescription){
		$this->comDescription=$comDescription;
	}


function __construct($comID,$comDate,$comTotal,$panierID,$comDescription){
	
	$this->comID=$comID;
	$this->comDate=$comDate;
	$this->comTotal=$comTotal;
	$this->panierID=$panierID;
	$this->comDescription=$comDescription;
}

}
?>