<!DOCTYPE html>
<html lang="fr">
<head>
<title>Ajout Etudiant</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset style="width:400px; margin:auto;">
<legend>Ajouter Etudiant</legend>
<table>
<tr>
<td><label></label>Nom :</label></td>
<td> <input type="text" name="nom"/></td>
</tr>
<tr>
<td><label>Ville :</label></td>
<td>
<select name="ville">
<option value="Tunis">Tunis</option>
<option value="Ariana">Ariana</option>
<option value="Bizerte">Bizerte</option>
</select>
</td>
</tr>
<tr>
<td><label>Date :</label></td>
<td><input type="date" name="date" /></td>
</tr>
<tr>
<td><input type="submit" value="Ajouter" name="btn_ajouter"/></td>
</tr>
</table>
</fieldset>		
</form>
</body>
</html>
<?php
//Compl�ter le code PHP : Appel des methodes d'ajout et d'affichage
if(isset($_POST['btn_ajouter']))
	{
	include_once('../lib/etudiant.class.php');
	$etudiant=new Etudiant('localhost','school','root','');
	$etudiant->nom=$_POST['nom'];
	$etudiant->ville=$_POST['ville'];
	$etudiant->date=$_POST['date'];
	if($etudiant->ajouter())	$etudiant->afficher();
	else echo 'echec d\'insertion';
	}
?>