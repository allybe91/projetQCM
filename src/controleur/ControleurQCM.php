<?php
namespace projetQCM\controleur;
use projetQCM\modele\ModeleQCM;

class ControleurQCM extends Controleur{
	
	public function __construct($page){
		parent::__construct();
		
		$qcm = ModeleQCM::getAllQCM();

		$this->addData([
		'titre' => $page,
		'qcm' => $qcm]);
		$this->view();
	}
}
?>