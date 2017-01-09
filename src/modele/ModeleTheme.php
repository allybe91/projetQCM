<?php
namespace projetQCM\modele;
use projetQCM\modele\ConnexionBDD;
use PDO;
use Exception;

class ModeleTheme{
	
	public $idTheme;
	public $libelle;

	public function __construct($idTheme = null, $libelle = null){
		if($idTheme === null){
			return;
		}
		$this->idTheme = $idTheme;
		$this->libelle = $libelle;
	}
	
	public static function getAllTheme(){		
	
		$req = ConnexionBDD::instanceBDD()->prepare('SELECT * FROM theme');
		$req->execute();
		$return = [] ;
		foreach ($req->fetchAll() as $o){
			$theme = new ModeleTheme($o['idTheme'],$o['libelle']);
			$return[] = $theme;
		}
		$req->closeCursor();		
		return $return;
	}
	
	public function getIdTheme(){
		 return $this->idTheme;
	}	
	
	public function getLibelle(){
		 return htmlspecialchars($this->libelle);
	}	

 	
}

?>