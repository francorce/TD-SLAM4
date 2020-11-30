<?php
$controller= "voiture";
if($action=='update'){
    $i=$_GET['immat'];
    $attribut="readonly";
    $action="updated";
    
    foreach ($tab_voit as $k=> $values){
    
        if($k=='Marque'){
            $m=$values;
        }
        if($k=='Couleur'){
            $c=$values;
        }
       
    }
}
if($action=='create'){
    $i="";
    $m="";
    $c="";
    $attribut="required";
    $action="created";
}


?>

	<form method="post" action="index.php?action=<?php echo $action?>">
            <input type='hidden' name='action' value='updated'>
 		<fieldset>
 			<legend>Mon formulaire :
 			</legend>
 			<p>
 				<label for="immat_id">Immatriculation</label> :
                                <input type="text" value="<?php  echo $i?> " name="immatriculation" id="immat_id" <?php echo $attribut ?>/>
 				<label for="marque_id">Marque</label> :
 					<input type="text" <?php echo 'value="'.$m.'"'?> name="marque" id="marque_id" required/>
 				<label for="couleur_id">Couleur</label> :
					<input type="text" <?php echo 'value="'.$c.'"'?> name="couleur" id="couleur_id" required/>
 				<label for="Controller_id">Controller</label> :
					<input type="text" <?php echo 'value="'.$controller.'"'?> name="Controller" id="Controller_id" required/>                                
 			</p>
 			<p>
 				<input type="submit" value="Envoyer" name="envoi" />
 			</p>
 		</fieldset>
	</form>
