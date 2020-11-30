<?php

require_once File::build_path('controller/ControllerVoiture.php');
require_once '../config/Conf.php';

// On recupère l'action passée dans l'URL
$action = $_GET['action'];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action();

?>