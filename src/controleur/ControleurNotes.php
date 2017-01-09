<?php
namespace projetQCM\controleur;
use projetQCM\modele\ModeleNotes;

class ControleurNotes extends Controleur{
	
	public function __construct($page){
		parent::__construct();
		
		$notes = ModeleNotes::getAllNotes();

		$this->addData([
		'titre' => $page,
		'notes' => $notes]);
		$this->view();
	}
}
?>