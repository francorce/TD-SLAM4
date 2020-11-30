<?php
require_once File::build_path('model/ModelVoiture.php'); // chargement du modèle
require_once File::build_path( 'config/Conf.php');

class ControllerVoiture{
    
    public static function readAll(){
        $controller="voiture";
        $view="list";
        $pagetitle='Liste des voitures';
        $tab_v = ModelVoiture::selectAll(); //appel au modèle pour gerer la BD
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
    }
    
     public static function read(){
        $controller="voiture";
        $view="detail";
        $pagetitle='Detail de la voitures';
        $primary_value = $_GET['immat'];
        if(ModelVoiture::select($primary_value)==true){
           $tab = ModelVoiture::select($primary_value); //appel au modèle pour gerer la BD
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
        
        }
        else{
           require_once File::build_path( 'view/voiture/error.php'); //redirige vers la vue
        }
    }
    
    public static function create(){
        $controller="voiture";
        $view="update";
        $pagetitle='création de voiture';
        $action='create';
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
    }
    
    public static function created(){
       $data = array();
        $data['Immatriculation'] = $_POST['immatriculation'];
        $data['Marque'] = $_POST['marque'];
        $data['Couleur'] = $_POST['couleur'];
        
        $voiture = new ModelVoiture($data);
        $voiture->save($data);
        
        $controller="voiture";
        $view="created";
        $pagetitle='confirmation';
        $tab_v = ModelVoiture::selectAll();   //appel au modèle pour gerer la BD      
        require_once File::build_path('view\view.php');//redirige vers la vue
    }
    

    
    public static function update(){
        
        $controller="voiture";
        $view="update";
        $pagetitle='Mise à jour de la voiture';
        $action='update';

        $primary_value = $_GET['immat'];
        if(ModelVoiture::select($primary_value)==true){
           $tab_voit = ModelVoiture::select($primary_value); //appel au modèle pour gerer la BD
        require_once File::build_path( 'view/view.php'); //redirige vers la vue
    }  
    }
    
    public static function updated(){
       $data = array();
        $data['Immatriculation'] = $_POST['immatriculation'];
        $data['Marque'] = $_POST['marque'];
        $data['Couleur'] = $_POST['couleur'];

        $voiture = new ModelVoiture($data);
        $voiture->update($data);
        
        $controller="voiture";
        $view="updated";
        $pagetitle='confirmation';
        $tab_v = ModelVoiture::selectAll();   //appel au modèle pour gerer la BD      
        require_once File::build_path('view\view.php');//redirige vers la vue
    }
}

?>
