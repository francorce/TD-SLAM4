

 <?php
 ;
 foreach ($tab_t as $t){
     //variable temporaire
    $traj = htmlspecialchars($t->getId());
    $url = rawurlencode($t->getId());
 echo '<p> Le Trajet : <a href=http://127.0.0.1:8080/SLAM4/TD7/index.php?controller=trajet&action=read&id='.$url.'>' .$traj . '<br><a href=http://127.0.0.1:8080/SLAM4/TD7/index.php?controller=trajet&action=delete&id='.$url.'> Supprimmer </a>.</p>';
 }
 ?>


