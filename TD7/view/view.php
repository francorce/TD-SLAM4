<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title><?php echo $pagetitle; ?></title>
 
    <table
         <tr align="center">
             <td>
                 <a href="index.php?action=readAll&controller=voiture">Voiture</a>
             </td>
             <td>
                 <a href="index.php?action=readAll&controller=utilisateur">Utilisateurs</a>
             </td>
             <td>
                 <a href="index.php?action=readAll&controller=trajet">Trajets</a>
             </td>
             <td>
                 <a href="preference.html">Preference</a>
             </td>
             <td>
                 <a href="panier/panier.php">Panier</a>
             </td>
         </tr>
    </table>
 </head>
 <body>

<?php

    switch ($view){
        case "list":
             $filepath = "view/$controller/list.php";
            break;
        
        case "detail":
            $filepath = "view/$controller/detail.php";
            break;
        
        case "created":
            $filepath = "view/$controller/created.php";
            break;
        
        case "deleted":
            $filepath = "view/$controller/deleted.php";
            break;
        
        case "update":
            $filepath = "view/$controller/update.php";
            break;        
        
        case "updated":
            $filepath = "view/$controller/updated.php";
            break;  
        case "catalogue":
            $filepath = "view/$controller/catalogue.php";
        break;  
    }
    
require_once $filepath;
?>
 </body>
 <p style="border: 1px solid black;text-align:right;padding-right:1em;">
Site de covoiturage de Bordeaux</p>
</html>