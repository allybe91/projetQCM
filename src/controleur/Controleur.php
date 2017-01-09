<?php
namespace projetQCM\controleur;

class Controleur{
	
	private $data;

	public function __construct(){
		$this->data=[];
	}
	
	public function view(){
		ob_start();
		extract($this->data);
		$controleur = get_class($this);
		$vueAGenerer = '/Vue'.str_replace(__NAMESPACE__.'\\Controleur','',$controleur);
		require 'C:/wamp64/www/projetQCM/src/vue'.$vueAGenerer.'.php';
		ob_end_flush();
        exit();
	}
	
	public function addData($data){
        $this->data +=  $data;
    }

	public function getData(){
        return $this->data ;
    }
	
}


?>