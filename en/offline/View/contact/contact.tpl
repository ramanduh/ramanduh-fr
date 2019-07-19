<div id="titre_p4">
 	 <h2>CONTACT</h2>
</div>

    <form id="formulaire" method="post" action="index.php?page=contact">
	<table>
		<caption>Veuillez remplir le formulaire ci-dessous pour me contacter.</caption>

	<tr>
		<td class="label"><label for="obj_field">Objet* :</label></td>
		<td><input type="text" name="objet" id="obj_field" /></td>
    </tr>
	<tr>
		<td class="label"><label for="mail_field">Votre e-mail* :</label></td>
		<td><input type="email" name="votremail" id="mail_field" /></td>
    </tr>
	<tr>
		<td class="label"><label for="content_fiel">Votre message* :</label></td>
		<td><textarea name="message" id="content_field"></textarea></td>
    </tr>
	<tr>
		<td class="label"> </td>
		<td><img id="captcha_im" src="images/gen_captcha.php" alt="Code de vérification" /> 
			<a href="" onclick="rechargerCaptcha();">(changer)</a></td>
    </tr>
	<tr>
		<td class="label"><label for="captcha_field">Recopiez le code* :</label></td>
		<td><input type="text" name="verif_code" id="captcha_field" /></td>
    </tr>
	<tr>
		<td class="label"> </td>
		<td><input id="b_submit" type="submit" value = "<Envoyer>"/></td>
    </tr>
	</table>
</form>
<!--Fin de mon formulaire -->
 <p id="ps">*Champs obligatoires</p>
