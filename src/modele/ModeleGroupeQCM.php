<?php
namespace projetQCM\modele;

use PDO;
use Exception;

class ModeleGroupeQCM{
	
	public $idGroupe;
	public $idQcm;
	public $acces;

	public function __construct($idGroupe = null, $idQcm = null, $acces = null){
		if($idGroupe === null || $idQcm === null ){
			return;
		}
		$this->idGroupe = $idGroupe;
		$this->idQcm = $idQcm;
		$this->acces = $acces;
	}
	
	public function getIdGroupe(){
		 return $this->idGroupe;
	}	
	
	public function getIdQcm(){
		 return $this->idQcm;
	}

	public function getAcces(){
		 return $this->acces;
	}

 	
}

?>