<?php
namespace projetQCM\modele;

class ModeleGroupe{
	
	private $idGroupe;
	private $libelle;
	
	
	
	public function __construct($idGroupe = null, $libelle = null){
		if($idGroupe === null){
			return;
		}
		$this->idGroupe = $idGroupe;
		$this->libelle = $libelle;
	}
		
	public function getIdGroupe(){
		return $this->idGroupe;
	}
	
	public function getLibelle(){
		return htmlspecialchars($this->libelle);
	}
}

?>