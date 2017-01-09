<?php
namespace projetQCM\modele;

use PDO;
use Exception;

class ModeleUtilisateurGroupe{
	
	public $idUtilisateur;
	public $idGroupe;

	public function __construct($idUtilisateur = null, $idGroupe = null){
		if($idUtilisateur === null || $idGroupe === null ){
			return;
		}
		$this->idUtilisateur = $idUtilisateur;
		$this->idGroupe = $idGroupe;
	}
	
	public function getIdUtilisateur(){
		 return $this->idUtilisateur;	
	}	
	
	public function getIdGroupe(){
		 return $this->idGroupe;
	}	

 	public function jesersarien(){
		 while(1);
		 return 1;
	}
}

?>