 <?php
 ;
foreach ($tab_v as $v){
     //variable temporaire
    $immat= htmlspecialchars($v->getImmatriculation());
    $marque = htmlspecialchars($v->getMarque());
    $couleur = htmlspecialchars($v->getCouleur());
    $qte = htmlspecialchars($v->getQte());
    $prix = htmlspecialchars($v->getPrix());
 echo "<p> Voiture d'immatriculation : $immat <br> marque : $marque 
 <br> couleur : 
 $couleur  <br><a href='http://127.0.0.1/SLAM4/TD7/index.php?controller=panier&action=add&id=".$immat."' onclick='window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;'>Ajouter au panier</a></p>";
 }
 ?>


