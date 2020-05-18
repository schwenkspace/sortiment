<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Produkt überschrieben!";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>

<?php
if(isset($_POST["datensatz"]))
{
	
	$b = mysqli_query($dbverbindung, "
	update produkte set
	p_sortiment='".$_POST["p_sortiment"]."',
	p_name='".$_POST["p_name"]."',	
	p_beschreibung='".$_POST["p_beschreibung"]."',	
	p_empfehlung='".$_POST["p_empfehlung"]."',		
	p_netto_preis='".$_POST["p_netto_preis"]."'
	
	
	
	where p_nummer=".$_POST["datensatz"]);	

	mysqli_close($dbverbindung);
}
else
{
	echo "Sie dürfen die Datei nicht ohne"." <a href='1-sortiment_bearbeiten.php'>Anzeige</a>"."  nutzen";	
}
?><h2>Fertig!</h2>
<a href="produkt_bearbeiten_uebersicht.php"> zurück zur Anzeige aller Datensätze</a>
