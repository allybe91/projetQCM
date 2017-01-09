<?php
namespace projetQCM\modele;
use projetQCM\modele\ConnexionBDD;

class ModeleQuestion{
	
	public $idQuestion;
	public $intitule;
	public $notation;
	public $idTheme;
	public $idUtilisateur;
	
	
	public function __construct($idQuestion = null, $intitule = null, $notation = null, $idTheme = null, $idUtilisateur = null){
		if($idRep === null){
			return;
		}
		$this->idQuestion = $idQuestion;
		$this->intitule = $intitule;
		$this->notation = $notation;
		$this->idTheme = $idTheme;
		$this->idUtilisateur = $idUtilisateur;
	}
	
	public static function getAllQuestions(){	
		$req = ConnexionBDD::instanceBDD()->query('SELECT question.idQuestion, question.intitule, reponse.libelle, theme.libelle 
													 FROM question, reponse, theme
													 WHERE question.idQuestion = reponse.idQuestion 
													 AND question.idTheme = theme.idTheme');
		$req->execute();
		$return = [] ;
		foreach ($req->fetchAll() as $o){
			$question = new ModeleQuestion($o['idQuestion'],$o['intitule'],$o['notation'],$o['idTheme'],$o['idUtilisateur']);
			$return[] = $question;
		}
		$req->closeCursor();		
		return $return;	
	}
	
	
	public function getIdQuestion(){
		 return $this->idQuestion;
	}
	
	public function getIntitule(){
		 return htmlspecialchars($this->intitule);
	}
	
	public function getNotation(){
		 return $this->notation;
	}
	
	public function getIdTheme(){
		 return $this->idTheme;
	}
	
	public function getIdUtilisateur(){
		 return $this->idUtilisateur;
	}
	
	
	
}

?>