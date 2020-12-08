
<?php
var_dump($tab);
$tab->afficher();
$primary_value = rawurlencode($_GET['marque']);
echo '<BR> <a href=http://127.0.0.1/SLAM4/TD7/index.php?controller=voiture&action=delete&immat='.$primary_value.'> Supprimmer </a>.</p> ';
echo '<a href=http://127.0.0.1/SLAM4/TD7/index.php?controller=voiture&action=update&immat='.$primary_value.'> Modifier </a>.</p>';
 ?>



