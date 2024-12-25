<!DOCTYPE html>
<html lang="fr">
<head>
<title>Modification Etudiant</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset style="width:400px; margin:auto;">
<legend>Modification Etudiant</legend>
<table>
<tr>
<td><label></label>ID :</label></td>
<td> <input type="text" name="id"/></td>
</tr>
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
<td><input type="submit" value="Modifier" name="btn_modifier"/></td>
</tr>
</table>
</fieldset>		
</form>
</body>
</html>
<?php
//Compl�ter le code PHP : Appel des methodes de modification et d'affichage
if(isset($_POST['btn_modifier']))
	{
    include_once('../lib/etudiant.class.php');
    $etudiant=new Etudiant('localhost','school','root','');
	$etudiant->id=$_POST['id'];
	$etudiant->nom=$_POST['nom'];
	$etudiant->ville=$_POST['ville'];
	$etudiant->date=$_POST['date'];
	if($etudiant->modifier())	$etudiant->afficher();
	else echo 'echec d\'insertion';
	}
?>
