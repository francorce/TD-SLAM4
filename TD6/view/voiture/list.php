

 <?php
 foreach ($tab_v as $v){
     //variable temporaire
    $voit = htmlspecialchars($v->getImmatriculation());
    $url = rawurlencode($v->getImmatriculation());
 echo '<p> Voiture d\'immatriculation <a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=voiture&action=read&immat='.$url.'>' .$voit . '<br><a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=voiture&action=delete&immat='.$url.'> Supprimmer </a>.</p>';
 }
 ?>


