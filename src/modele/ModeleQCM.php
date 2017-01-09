<?php
namespace projetQCM\modele;

class ModeleQCM{
	
	private $idQcm;
	private $libelle;
	private $totalPoints;
	
	
	public function __construct($idQcm = null, $libelle = null, $totalPoints = null){
		if($idQcm === null){
			return;
		}
		$this->idQcm = $idQcm;
		$this->libelle = $libelle;
		$this->totalPoints = $totalPoints;
	}
	
	public static function getIdQcm(){		
		return $this->idQcm;
	}
	
	public static function getLibelle(){
		return htmlspecialchars($this->libelle);
	}
	
	public static function getTotalPoints(){
		return $this->totalPoints;
	}
}

?>