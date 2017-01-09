<?php
namespace projetQCM\controleur;
use projetQCM\modele\ModeleGroupe;

class ControleurGroupe extends Controleur{
	
	public function __construct($page){
		parent::__construct();
		
		$groupes = ModeleGroupe::getAllGroupes();

		$this->addData([
		'titre' => $page,
		'groupes' => $groupes]);
		$this->view();
	}
}
?>