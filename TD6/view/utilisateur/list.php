

 <?php
 foreach ($tab_u as $u){
     var_dump($tab_u);
     //variable temporaire
    $user = htmlspecialchars($u->getLogin());
    $url = rawurlencode($u->getLogin());
 echo '<p> Login de l\'utilisateur <a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=utilisateur&action=read&login='.$url.'>' .$user.'<br><a href=http://127.0.0.1/SLAM4/TD6BIS/index.php?controller=utilisateur&action=delete&login='.$url.'> Supprimmer </a>.</p>';
 }
 ?>


