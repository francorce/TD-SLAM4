<?php
$controller= "utilisateur";
if($action=='update'){
    $login=$_GET['login'];
    $attribut="readonly";
    $action="updated";
    
    foreach ($tab_user as $k=> $values){
    
        if($k=='Nom'){
            $nom=$values;
        }
        if($k=='Prenom'){
            $prenom=$values;
        }
       
    }
}
if($action=='create'){
    $login="";
    $nom="";
    $prenom="";
    $attribut="required";
    $action="created";
}


?>

	<form method="post" action="index.php?controller=<?php echo $controller?>&action=<?php echo $action?>">
            <input type='hidden' name='action' value='updated'>
 		<fieldset>
 			<legend>Mon formulaire :
 			</legend>
 			<p>
 				<label for="login_id">Login</label> :
                                <input type="text" value="<?php  echo $login?> " name="login" id="login_id" <?php echo $attribut ?>/>
 				<label for="nom_id">Nom</label> :
 					<input type="text" <?php echo 'value="'.$nom.'"'?> name="nom" id="nom_id" required/>
 				<label for="prenom_id">Prenom</label> :
					<input type="text" <?php echo 'value="'.$prenom.'"'?> name="prenom" id="prenom_id" required/>
 				<label for="Controller_id">Controller</label> :
					<input type="text" <?php echo 'value="'.$controller.'"'?> name="Controller" id="Controller_id" required/>                                
 			</p>
 			<p>
 				<input type="submit" value="Envoyer" name="envoi" />
 			</p>
 		</fieldset>
	</form>
