<?php

	class Vue{
		
		private $fichier;
		private $titre;
		
		public function __construct($action){
			if($action == 'reponse'){
				$this->fichier = 'C:/wamp64/www/projetQCM/vue/VueReponse.php';
			}
			//$this->fichier = $action.'.php';
		}
		
		public function generer($donnees){
			$contenu = $this->genererFichier($this->fichier, $donnees);
			$vue = $this->genererFichier('C:/wamp64/www/projetQCM/vue/header.php', array('titre' => $this->titre, 'contenu' => $contenu));
			
			echo $vue;
		}
		
		private function genererFichier($fichier, $donnees){
			if(file_exists($fichier)){
				extract($donnees);
				ob_start();
				require $fichier;
				
				return ob_get_clean();
			}else{
				throw new Exception("fichier '$fichier' introuvable");
			}
		}
	}

?>