<?php
namespace projetQCM\modele;
use PDO;
use Exception;

class ConnexionBDD{
	
	const SQL_SERVER = 'localhost';
	const SQL_LOGIN = 'root';
	const SQL_PWD = '';
	const SQL_DB = 'projetQCM';
	
	private static $bdd;
	
	public function __construct(){
		
		try{
			
			$pdo_options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
			
			self::$bdd = new PDO("mysql:host=".self::SQL_SERVER.";dbname=".self::SQL_DB.';charset=utf8', self::SQL_LOGIN, self::SQL_PWD, $pdo_options);
		}catch(Exception $e){
			print "Erreur ! : ".$e->getMessage();
		}
		
	}
	
	public static function instanceBDD(){
		return self::$bdd;
	}
	
	
	
	
	
	
}



?>