<?php
class Voiture {
 
 private $marque;
 private $couleur;
 private $immatriculation;

 // un getter
 public function getcouleur() {
 return $this->couleur;
 }

 public function getMarque() {
 return $this->marque;
 }
 
 public function getimmatriculation() {
 return $this->immatriculation;
 }

 // un setter
 public function setcouleur($couleur2) {
    
 $this->couleur = $couleur2;
        
 }

 public function setMarque($marque2) {
 $this->marque = $marque2;
 }

 public function setimmatriculation($immatriculation2) {
    if(strlen($immatriculation2) < 8) {
        $this->immatriculation = substr($immatriculation2,0,8);
    }
    else{
        $this->immatriculation = $immatriculation2;
        }
 }
// La syntaxe ... = NULL signifie que l'argument est optionel
// Si un argument optionnel n'est pas fourni,
//   alors il prend la valeur par défaut, NULL dans notre cas
public function __construct($m = NULL, $c = NULL, $i = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      // Si aucun de $m, $c et $i sont nuls,
      // c'est forcement qu'on les a fournis
      // donc on retombe sur le constructeur à 3 arguments
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
    }
  }

public static function getAllVoitures(){
  $rep = Model::$pdo->query('SELECT * FROM Voiture');
  $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
  $tab_voit = $rep->fetchAll();

  foreach ($tab_voit as $key){
  $key->afficher()."<br>";
}
}

 // une methode d'affichage.
 public function afficher() {
    
    echo $this->marque."<br>";
    echo $this->couleur."<br>";
    echo $this->immatriculation."<br>";

 // À compléter dans le prochain exercice
 }
 

 public static function getVoitureByImmat($immatriculation2) {
  $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
  // Préparation de la requête
  $req_prep = Model::$pdo->prepare($sql);
  $values = array(
  "nom_tag" => $immatriculation2,
  //nomdutag => valeur, ...
  );
  // On donne les valeurs et on exécute la requête
  $req_prep->execute($values);
  // On récupère les résultats comme précédemment
  $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
  $tab_voit = $req_prep->fetchAll();
  // Attention, si il n'y a pas de résultats, on renvoie false
  if (empty($tab_voit))
  return false;
  return $tab_voit[0];
 }

public static function save($marque,$couleur,$immatriculation)
{
  
  $sql = "INSERT INTO voiture (marque, couleur, immatriculation) VALUES(:nom_tag1,:nom_tag2,:nom_tag3)";
  $req_prep = Model::$pdo->prepare($sql);
  $values = array(
    "nom_tag1" => $marque,
    "nom_tag2" => $couleur,
    "nom_tag3" => $immatriculation,
    //nomdutag => valeur, ...
    );
  $req_prep->execute($values);

}


}
?>
