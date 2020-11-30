
<?php
 
$tab->afficher();
$primary_value=rawurlencode($_GET['login']);
echo '<BR> <a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=utilisateur&action=delete&login='.$primary_value.'> Supprimmer </a>.</p> ';
echo '<a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=utilisateur&action=update&login='.$primary_value.'> Modifier </a>.</p>';
 ?>



