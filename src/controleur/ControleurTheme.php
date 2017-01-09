<?php
namespace projetQCM\controleur;
use projetQCM\modele\ModeleTheme;

class ControleurTheme extends Controleur{
	
	public function __construct($page){
		parent::__construct();
		
		$themes = ModeleTheme::getAllTheme();
		
		$this->addData([
		'titre' => $page,
		'themes' => $themes]);
		$this->view();
	}
}
?>