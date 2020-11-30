<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title><?php echo $pagetitle; ?></title>
 
    <table
         <tr align="center">
             <td>
                 <a href="http://localhost/SLAM4/TD5/index.php?action=readAll">Affiche tout</a>
             </td>
             <td>
                 <a href="http://localhost/SLAM4/TD5/index.php?action=readAll&controller=Utilisateur">Utilisateurs</a>
             </td>
             <td>
                 <a href="http://localhost/SLAM4/TD5/index.php?action=readAll&controller=Trajet">Trajets</a>
             </td>
         </tr>
    </table>
 </head>
 <body>

<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
if($controller='voiture'){
    switch ($view){
        case "list":
             $filepath = "view/voiture/list.php";
            break;
        
        case "detail":
            $filepath = "view/voiture/detail.php";
            break;
           
        case "create":
             $filepath = "view/voiture/create.php";
            break;
        
        case "created":
            $filepath = "view/voiture/created.php";
            break;
    }
    

}
require_once $filepath;
?>
 </body>
 <p style="border: 1px solid black;text-align:right;padding-right:1em;">
Site de covoiturage de Bordeaux</p>
</html>