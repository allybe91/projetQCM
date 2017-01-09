<?php
namespace projetQCM\modele;
use projetQCM\modele\ConnexionBDD;

class ModeleReponse{
	
	public $idRep;
	public $libelle;
	public $marqueurBonneRep;
	public $idQuestion;
	
	
	public function __construct($idRep = null, $libelle = null, $marqueurBonneRep = null, $idQuestion = null){
		if($idRep === null){
			return;
		}
		$this->idRep = $idRep;
		$this->libelle = $libelle;
		$this->marqueurBonneRep = $marqueurBonneRep;
		$this->idQuestion = $idQuestion;
	}
	
	public static function getAllReponses(){	
	
		
		$req = ConnexionBDD::instanceBDD()->prepare('SELECT * FROM reponse');
		$req->execute();
		$return = [] ;
		foreach ($req->fetchAll() as $o){
			$theme = new ModeleQuestion($o['idRep'],$o['libelle']);
			$return[] = $theme;
		}
		$req->closeCursor();		
		return $return;	
	}
	
	
	public function getIdRep(){
		 return $this->idRep;
	}
	
	public function getLibelle(){
		 return htmlspecialchars($this->libelle);
	}
	
	public function getMarqueurBonneRep(){
		 return $this->marqueurBonneRep;
	}
	
	public function getIdQuestion(){
		 return $this->idQuestion;
	}
	
}

?>