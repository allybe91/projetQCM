<?php
namespace projetQCM\controleur;
use projetQCM\modele\ModeleQuestion;

class ControleurQuestion extends Controleur{
	
	public function __construct($page){
		parent::__construct();
		
		$questions = ModeleQuestion::getAllQuestions();

		$this->addData([
		'titre' => $page,
		'questions' => $questions]);
		$this->view();
	}
}
?>
