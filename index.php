<?php	
use projetQCM\Autoloader;
use \projetQCM\controleur\Routeur;
use \projetQCM\modele\ConnexionBDD;

require 'C:/wamp64/www/projetQCM/src/Autoloader.php';
Autoloader::register();

new ConnexionBDD();

//$routeur = new Routeur('theme');
$routeur = new Routeur('question');
//$routeur = new Routeur('groupe');	
?>