

	<form method="post" action="index.php?action=created">
 		<fieldset>
 			<legend>Mon formulaire :
 			</legend>
 			<p>
 				<label for="immat_id">Immatriculation</label> :
 					<input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
 				<label for="marque_id">Marque</label> :
 					<input type="text" placeholder="Ex : Renault" name="marque" id="marque_id" required/>
 				<label for="couleur_id">Couleur</label> :
					<input type="text" placeholder="Ex : Bleu" name="couleur" id="couleur_id" required/>
 			</p>
 			<p>
 				<input type="submit" value="Envoyer" name="envoi" />
 			</p>
 		</fieldset>
	</form>
