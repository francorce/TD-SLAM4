<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
 <title> Mon premier php </title>
 </head>

 <body>
     <h2>EXERCICE 2</h2>
 Voici le résultat du script PHP :
 <?php
 // Ceci est un commentaire PHP sur une ligne
 /* Ceci est le 2ème type de commentaire PHP
 sur plusieurs lignes */

 // On met la chaine de caractères "hello" dans la variable 'texte'
 // Les noms de variable commencent par $ en PHP
 $texte = "hello world !";
 // On écrit le contenu de la variable 'texte' dans la page Web
 echo $texte;
?>

<br><hr>

<h2>Le echo here document</h2>
<?php
$prenom="Helmut";
echo <<< EOT
Texte à afficher
sur plusieurs lignes
avec caractères spéciaux \t \n
et remplacement de variables $prenom
les caractères suivants passent : " ' $ / \ ;
EOT;
?>

<br><hr>


<?php
$marque="Peugeot";
$couleur="Bleu";
$immatriculation="EZ-420-MB";
echo "<h2>EXERCICE 4</h2>"."Voiture ".$immatriculation." de marque ".$marque." (couleur ".$couleur." )"
 ?>
 
 <hr>
 <h2>Utilisation du var_dump pour afficher les données d'un tableau</h2>
 <?php
 $Voiture = array (
    'marque' => 'Peugeot',
    'couleur' => 'Bleu' ,
    'immatriculation' => 'EZ-420-MB' ,);

    var_dump($Voiture);


    echo "<hr><h2>Affichage avec l'array </h2>"."Voiture ".$Voiture['immatriculation']." de marque ".$Voiture['marque']." (couleur ".$Voiture['couleur']." )"
 ?><hr><h2>Affichage avec plusieurs "voiture-tableaux"</h2>
 <?php
 $Voitures = array (
     array("immatriculation"=>"OZ-320-JF", "marque"=>"Porsche",  "couleur"=>"Blanc"),
     array("immatriculation"=>"KE-278-UJ", "marque"=>"Ferrari", "couleur"=>"Jaune"),
     array("immatriculation"=>"KD-593-JA", "marque"=>"Kia", "couleur"=>"Rouge" ), 
);

for ($i = 0; $i < 3; $i++) {
    echo "<ul><li>"."Voiture ".$Voitures[$i]["immatriculation"]." de marque ".$Voitures[$i]["marque"]." (couleur ".$Voitures[$i]["couleur"]." )</li></ul><br>";
}

print_r($Voitures);
 ?>
 </body>
</html>
