<?php
namespace projetQCM\controleur;

//require 'C:/wamp64/www/projetQCM/src/controleur/ControleurReponse.php';

class Routeur{
	
	private $controleur;
	
	public function __construct($page){
		switch($page){
			case "groupe":
				$this->controleur = new ControleurGroupe($page);
			break;
			case "notes":
				$this->controleur = new ControleurNotes($page);
			break;
			case "qcm":
				$this->controleur = new ControleurQCM($page);
			break;
			case "question":
				$this->controleur = new ControleurQuestion($page);
			break;
			case "theme":
				$this->controleur = new ControleurTheme($page);
			break;
			case "utilisateur":
				$this->controleur = new ControleurUtilisateur($page);
			break;
		}	

	}
	
}



?>