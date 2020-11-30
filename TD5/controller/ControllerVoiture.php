<?php
require_once File::build_path('model/ModelVoiture.php'); // chargement du modèle
require_once File::build_path( 'config/Conf.php');

class ControllerVoiture{
    
    public static function readAll(){
        $controller="voiture";
        $view="list";
        $pagetitle='Liste des voitures';
        $tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
    }
    
     public static function read(){
        $controller="voiture";
        $view="detail";
        $pagetitle='Detail de la voitures';
        $immat = $_GET['immat'];
        if(ModelVoiture::getVoitureByImmat($immat)==true){
           $tab_voit = ModelVoiture::getVoitureByImmat($immat); //appel au modèle pour gerer la BD
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
        
        }
        else{
           require_once File::build_path( 'view/voiture/error.php'); //redirige vers la vue
        }
    }
    
    public static function create(){
        $controller="voiture";
        $view="create";
        $pagetitle='création de voiture';
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
    }
    
    public static function created(){
        $i = $_POST['immatriculation'];
	$m = $_POST['marque'];
	$c = $_POST['couleur'];
        
        $voiture = new ModelVoiture($m, $c, $i);
        $voiture->save($i, $m, $c);
        
        $controller="voiture";
        $view="created";
        $pagetitle='confirmation';
        $tab_v = ModelVoiture::getAllVoitures();   //appel au modèle pour gerer la BD      
        require_once File::build_path('view\view.php');//redirige vers la vue
    }
    
}

?>
