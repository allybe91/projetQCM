<?php
namespace projetQCM\modele;

class ModeleUtilisateur{
	
	private $idUtilisateur;
	private $nom;
	private $prenom;
	private $login;
	private $mdp;
	private $role;
	private $adresseMail;
	
	public function __construct($idUtilisateur = null, $nom = null, $prenom = null, $login = null, $mdp = null, $role = null, $adresseMail = null){
		if($idUtilisateur === null){
			return;
		}
		$this->idUtilisateur = $idUtilisateur;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->login = $login;
		$this->mdp = $mdp;
		$this->role = $role;
		$this->adresseMail = $adresseMail;
	}
	
	public static function getIdUtilisateur(){		
		return $this->idUtilisateur;
	}
	
	public static function getNom(){		
		return $this->nom;
	}
	
	public static function getPrenom(){		
		return $this->prenom;
	}
	
	public static function getLogin(){		
		return $this->login;
	}
	
	public static function getMdp(){		
		return $this->mdp;
	}
	
	public static function getRole(){		
		return $this->role;
	}
	
	public static function getAdresseMail(){		
		return $this->adresseMail;
	}
	
	
	
}

?>