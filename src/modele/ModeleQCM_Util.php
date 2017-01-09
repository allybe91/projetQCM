<?php
namespace projetQCM\modele;

class ModeleQCM_Util{
	
	private $idUtilisateur;
	private $idQcm;
	private $note;
	
	
	public function __construct($idUtilisateur = null, $idQcm = null, $note = null){
		if($idUtilisateur === null){
			return;
		}
		$this->idUtilisateur = $idUtilisateur;
		$this->idQcm = $idQcm;
		$this->note = $note;
	}
	
	public static function getIdUtilisateur(){		
		return $this->idUtilisateur;
	}
	
	public static function getIdQcm(){
		return $this->idQcm;
	}
	
	public static function getNote(){
		return $this->note;
	}
}

?>