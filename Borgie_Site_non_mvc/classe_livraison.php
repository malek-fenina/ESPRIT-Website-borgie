<?php 

class livraison{
  //attributs
  //private $comID;
  private $livID;
  private $livDate;
  private $livVille;
  private $livRue;
  private $livNum;
  private $etat_livraison;
  //methodes

  /*public function getcomID(){
    return $this->comID;
  }

  public function setcpùID($comID){
    $this->comID=$comID;
  }*/
//
  public function getclivID(){
    return $this->livID;
  }

  public function setlivID($livID){
    $this->livID=$livID;
  }

//
  public function getlivDate(){
    return $this->livDate;
  }

  public function setlivDate($livDate){
    $this->livDate=$livDate;
  }
//

  public function getlivVille(){
    return $this->livVille;
  }

  public function setlivVille($livVille){
    $this->livVille=$livVille;
  }


  public function getlivRue(){
    return $this->livRue;
  }

  public function setlivRue($livRue){
    $this->livRue=$livRue;
  }

//
  public function getlivNum(){
    return $this->livNum;
  }

  public function setlivNum($livNum){
    $this->livNum=$livNum;
  }
//
  public function getEtatliv(){
    return $this->etat_livraison;
  }

  public function setEtatliv($etat_livraison){
    $this->etat_livraison=$etat_livraison;
  }

function __construct(/*$comID,*/$livID,$livDate,$livVille,$livRue,$livNum,$etat_livraison){
  
  //$this->comID=$comID;
  $this->livID=$livID;
  $this->livDate=$livDate;
  $this->livVille=$livVille;
  $this->livRue=$livRue;
  $this->livNum=$livNum;
  $this->etat_livraison=$etat_livraison;
}

}
?>
