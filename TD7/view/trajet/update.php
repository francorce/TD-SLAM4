<?php
;
$controller= "trajet";
if($action=='update'){
    $id=$_GET['id'];
    $attribut="readonly";
    $action="updated";
    
    foreach ($tab_traj as $k=> $values){
    
        if($k=='Depart'){
            $depart=$values;
        }
        if($k=='Arrivee'){
            $arrivee=$values;
        }
        if($k=='Date'){
            $date=$values;
        }
        if($k=='Nbplaces'){
            $nbplaces=$values;
        }
        if($k=='Prix'){
            $prix=$values;
        }
        if($k=='Conducteur_login'){
            $conducteur_login=$values;
        }
    }
    var_dump($tab_traj);
}
if($action=='create'){
    $id = "";
    $depart = "";
    $arrivee = "";
    $date = "";
    $nbplaces = "";
    $prix = "";
    $conducteur_login = "";
    $attribut="required";
    $action="created";
}


?>

	<form method="post" action="index.php?controller=<?php $controller?>&action=<?php echo $action?>">
            <input type='hidden' name='action' value='updated'>
 		<fieldset>
 			<legend>Mon formulaire :
 			</legend>
 			<p>
 				<label for="id">Id</label> :
                                <input type="text" value="<?php  echo $id?> " name="id" id="id" <?php echo $attribut ?>/>
                                
 				<label for="depart_id">depart</label> :
                                <input type="text" <?php echo 'value="'.$depart.'"'?> name="depart" id="depart_id" required/>
                                
 				<label for="arrivee_id">Arrivee</label> :
                                <input type="text" <?php echo 'value="'.$arrivee.'"'?> name="arrivee" id="arrivee_id" required/>
                                         				
                                <label for="date_id">Date</label> :
                                <input type="text" value="<?php  echo $date?> " name="date" id="date_id" <?php echo $attribut ?>/>
 				
                                <label for="nbplaces_id">Nombre de Places</label> :
                                <input type="text" <?php echo 'value="'.$nbplaces.'"'?> name="nbplaces" id="nbplaces_id" required/>
 				
                                <label for="prix_id">Prix</label> :
				<input type="text" <?php echo 'value="'.$prix.'"'?> name="prix" id="prix_id" required/>
                                <br/><br/>         				
                                <label for="conducteur_login_id">Login du Conducteur</label> :
				<input type="text" <?php echo 'value="'.$conducteur_login.'"'?> name="conducteur_login" id="conducteur_login_id" required/>
                             
 				<label for="Controller_id">Controller</label> :
                                <input type="text" <?php echo 'value="'.$controller.'"'?> name="Controller" id="Controller_id" required/>                                
 			</p>
 			<p>
 				<input type="submit" value="Envoyer" name="envoi" />
 			</p>
 		</fieldset>
	</form>
