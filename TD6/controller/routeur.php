<?php

require_once File::build_path('controller/ControllerVoiture.php');
require_once File::build_path('controller/ControllerUtilisateur.php');
require_once File::build_path('controller/ControllerTrajet.php');

//verifier si le controller est rentrée dans l'url
if (isset($_GET['controller'])){
    // On recupère le controller passée dans l'URL
    $controller = $_GET['controller'];

}
//valeur du controller par default
else{
        $controller = 'voiture';
}

//Création du nom de la classe en fonction du $controller
switch ($controller) {
    
    case 'voiture':
        
        $controller_class = 'ControllerVoiture';
        break;
    
    case 'utilisateur':
        
        $controller_class = 'ControllerUtilisateur';        
        break;
        
    case 'trajet':

        $controller_class = 'ControllerTrajet';
        break;
}

if (class_exists($controller_class)){
    

    //verifier si l'action est rentrée dans l'url
    if (isset($_GET['action'])){
        // On recupère l'action passée dans l'URL
        $action = $_GET['action'];

    }
    //valeur de l'action par default
    else{
        
        $action ='readAll';
    }

    //Verification de l'action appartenant au controller
    $class_methods = get_class_methods($controller_class);
    foreach($class_methods as $method_name){
        if(in_array($action, $class_methods)){
            // Appel de la méthode statique $action de Controller
            $controller_class::$action();
        }
        else{
            // Appel de la méthode statique error de Controller
            $controller_class::error();
        }
    }
}
else{
          // Appel de la méthode statique error de Controller
        $controller_class::error();  
}

?>