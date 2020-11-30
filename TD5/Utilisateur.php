<?php

require_once 'Model.php';
require_once 'Trajet.php';

class Utilisateur {

    private $login;
    private $nom;
    private $prenom;
    private $trajet_id;


    // Getter gÃ©nÃ©rique (pas expliquÃ© en TD)
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    // Setter gÃ©nÃ©rique (pas expliquÃ© en TD)
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }

    // un constructeur
    public function __construct($login = NULL, $nom = NULL, $prenom = NULL, $trajet_id = NULL) {
        if (!is_null($login) && !is_null($nom) && !is_null($prenom) && !is_null($trajet_id)) {
            $data=null;
            $this->login = $login;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->trajet_id= $trajet_id;
        }
    }

    // une methode d'affichage.
    public function afficher() {
        echo "trajet {$this->trajet_id} <br><br>";
    }
    
    public function afficherP() {
        echo "Utilisateur {$this->prenom} {$this->nom} de login {$this->login}<br><br>";
    }

    public static function getAllUtilisateurs() {
        try {
            $pdo = Model::$pdo;
            $sql = "SELECT * from utilisateur";
            $rep = $pdo->query($sql);
            $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
            return $rep->fetchAll();
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    public static function findTrajet($login){
         try{
            $sql = 'select users.*, passager.trajet_id
                from passager inner join users on passager.utilisateur_login = users.login
                inner join trajet  on passager.trajet_id = trajet.id
                where users.login ="'.$login.'"';
            $sql = Model::$pdo->query($sql);
	while($tab_trajet = $sql->fetch(PDO::FETCH_ASSOC)){
            foreach($tab_trajet as $key =>$value){
		if($key == 'login'){
                    $login=$value;
                }
                if($key == 'nom'){
                    $nom=$value;
                }
                if($key == 'prenom'){
                    $prenom=$value;
                }
                if($key == 'trajet_id'){
                    $trajet_id=$value;
                }
            }
            
            $trajet = new Utilisateur($login,$nom,$prenom, $trajet_id);
            $trajet->afficher();
        }
        } catch (Exception $ex) {
            echo 'Erreur : ' .$ex;
               
        }        
        
    }
}
?>