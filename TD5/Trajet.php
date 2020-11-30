<?php

require_once 'Model.php';
require_once 'Utilisateur.php';

class Trajet {

    private $id;
    private $depart;
    private $arrivee;
    private $date;
    private $nbplaces;
    private $prix;
    private $conducteur_login;

    // Getter générique (pas expliqué en TD)
    public function get($nom_attribut) {
        if (property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    // Setter générique (pas expliqué en TD)
    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }

    // un constructeur
    public function __construct($data = array()) {
        if (!empty($data)) {
            $this->id = $data["id"];
            $this->depart = $data["depart"];
            $this->arrivee = $data["arrivee"];
            $this->date = $data["date"];
            $this->nbplaces = $data["nbplaces"];
            $this->prix = $data["prix"];
            $this->conducteur_login = $data["conducteur_login"];
        }
    }
    // une methode d'affichage.
    public function afficher() {
        echo "Ce trajet du".$this->date."partira de ".$this->depart." pour aller à ".$this->arrivee.".<br><br>";
    }

    public static function getAllTrajets() {
        try {
            $pdo = Model::$pdo;
            $sql = "SELECT * from trajet";
            $rep = $pdo->query($sql);
            $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
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
    public static function findpassager($id){
        try{
            $sql = 'select users.*,passager.trajet_id
                from passager inner join users on passager.utilisateur_login = users.login
                inner join trajet  on passager.trajet_id = trajet.id
                where trajet.id ='.$id;
            $sql = Model::$pdo->query($sql);
	while($tab_passager = $sql->fetch(PDO::FETCH_ASSOC)){
            foreach($tab_passager as $key =>$value){
		if($key=='login'){
                    $login=$value;
                }
                if($key=='nom'){
                    $nom=$value;
                }
                if($key=='prenom'){
                    $prenom=$value;
                }
                if($key == 'trajet_id'){
                    $trajet_id=$value;
                }
                
            }
            
            $passager = new Utilisateur($login,$nom,$prenom, $trajet_id);
            $passager->afficherP();
        }
        } catch (Exception $ex) {
            echo 'Erreur : ' .$ex;
                
        }
        
        
    }
    
    
    public static function deletePassager($data){
        $sql = 'DELETE FROM passager
                WHERE trajet_id = :ti_tag
                AND utilisateur_login = :ul_tag';
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);
    $value = array(
        'ti_tag'=>$data["trajet_id"],
        'ul_tag'=>$data["utilisateur_login"],

        
    //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête
    $req_prep->execute($value);
    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_ASSOC);
    $tab_DelP = $req_prep->fetch();
                
    }
}

 	

