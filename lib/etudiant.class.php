<?php
 class Etudiant{
	public   $id;
	public   $nom;
	public   $ville;
	public   $date;
 	private  $serveur     = '',
             $bdd         = '',
             $identifiant = '',
             $mdp         = '',
		     $cnx         = '';
/* Constructeur de la classe*/ 
    public function __construct($serveur = 'localhost', $bdd = 'school', $identifiant = 'root', $mdp = ''){
		$this->serveur     = $serveur;
        $this->bdd         = $bdd;
        $this->identifiant = $identifiant;
        $this->mdp         = $mdp;
        try{
			$this->cnx = new PDO('mysql:host='.$this->serveur .';dbname='.$this->bdd, $this->identifiant, $this->mdp);
           } 
		catch (PDOException $e){
			print "Erreur ! :" . $e->getMessage() . "<br/>";
			die();
		} 
    }
// � completer
	function ajouter(){
		$sql="insert into etudiant
		values('',
		'$this->nom',
		'$this->ville',
		'$this->date'
		)";
$res=$this->cnx->exec($sql);
if($res) return true;
else return false; 
}		 
	function Modifier(){
		$sql="update etudiant set nom='$this->nom',ville='$this->ville',
		date='$this->date' where id=$this->id";
		$res=$this->cnx->exec($sql);
		if($res) return true;
		else return false;	
	}
	function afficher(){
		$sql="select * from etudiant ";
		$etudiants=$this->cnx->query($sql);
		$etudiants->setFetchMode(PDO::FETCH_ASSOC);
		if($etudiants){
     	echo '<table  border-"1" cellspacing="0" style="width:650px; margin:auto;">';
		echo'<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Ville</th>
				<th>Date</th>
			</tr>';
	 	foreach($etudiants as $etudiant):
			echo'<tr>'; 
				echo '<td>'.$etudiant['id'].'</td>';
				echo '<td>'.$etudiant['nom'].'</td>';
				echo '<td>'.$etudiant['ville'].'</td>';
				echo '<td>'.$etudiant['date'].'</td>';
			echo '</tr>';
	 	endforeach;
	 	echo'</table>';
		}
		else print 'Table vide ';
	}
	

	function afficher_jQuery(){
		$sql="select * from etudiant ";
		$etudiants=$this->cnx->query($sql);
		$etudiants->setFetchMode(PDO::FETCH_ASSOC);
		if($etudiants){
			echo '<ul id="paragraphe">';
			   
			foreach($etudiants as $etudiant):
				echo'<li>';
					echo '<h2>'.$etudiant['nom'].'</h2>'; 
					echo '<span>+</span>'; 
					echo '<p>Ville : '.$etudiant['ville'].'</p>';
					echo '<p>Date : '.$etudiant['date'].'</p>';
				echo '</li>';
			endforeach;
				echo'</ul>';
			}
			else print 'Table vide ';
	}
 }	 

?>