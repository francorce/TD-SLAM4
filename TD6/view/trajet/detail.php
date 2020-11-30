
<?php
$tab->afficher();
$primary_value = rawurlencode($_GET['id']);
echo '<BR> <a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=trajet&action=delete&id='.$primary_value.'> Supprimmer </a>.</p> ';
echo '<a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=trajet&action=update&id='.$primary_value.'> Modifier </a>.</p>';
 ?>



