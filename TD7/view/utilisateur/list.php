

 <?php
 ;
 foreach ($tab_u as $u){
     //variable temporaire
    $user = htmlspecialchars($u->getLogin());
    $url = rawurlencode($u->getLogin());
 echo '<p> Login de l\'utilisateur <a href=http://127.0.0.1:8080/SLAM4/TD7/index.php?controller=utilisateur&action=read&login='.$url.'>' .$user.'<br><a href=http://127.0.0.1:8080/SLAM4/TD7/index.php?controller=utilisateur&action=delete&login='.$url.'> Supprimmer </a>.</p>';
 }
 ?>


