

 <?php
 foreach ($tab_v as $v){
        
     //variable temporaire
    $voit = htmlspecialchars($v->getImmatriculation());
    $url = rawurlencode($v->getImmatriculation());
 echo '<p> Voiture d\'immatriculation <a href=http://127.0.0.1/SLAM4/TD5/index.php?action=read&immat='.$url.'>' .$voit . '</a>.</p>';
 }
 ?>


