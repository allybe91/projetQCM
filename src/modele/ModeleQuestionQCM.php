<?php
namespace projetQCM\modele;

use PDO;
use Exception;

class ModeleQuestionQCM{
	
	public $idQuestion;
	public $idQcm;
	
	public function __construct($idQuestion = null, $idQcm = null){
		if($idQuestion === null || $idQcm === null ){
			return;
		}
		$this->idQuestion = $idGroupe;
		$this->idQcm = $idQcm;
	}
	
	public function getIdQuestion(){
		 return $this->idQuestion;
	}	
	
	public function getIdQcm(){
		 return $this->idQcm;
	}

 
}

?>