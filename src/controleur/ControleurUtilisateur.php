<?php
namespace projetQCM\controleur;
use projetQCM\modele\ModeleUtilisateur;

class ControleurUtilisateur extends Controleur{
	
	public function __construct($page){
		parent::__construct();
		
		$utilisateurs = ModeleUtilisateur::getAllUtilisateurs();

		$this->addData([
		'titre' => $page,
		'utilisateurs' => $utilisateurs]);
		$this->view();
	}
}
?>