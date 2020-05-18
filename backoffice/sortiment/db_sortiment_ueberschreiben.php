<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Sotiment umbenannt!";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>

<?php
if(isset($_POST["datensatz"]))
{
	
	$b = mysqli_query($dbverbindung, "
	update sortimentauswahl set
	
	sortiment_name='".$_POST["sortiment_name"]."'
	
	where sortiment_nummer=".$_POST["datensatz"]);	

	mysqli_close($dbverbindung);
}
else
{
	echo "Sie dürfen die Datei nicht ohne"." <a href='sortiment_bearbeiten_uebersicht.php'>Anzeige</a>"."  nutzen";	
}
?><h2>Fertig!</h2>
<a href="sortiment_bearbeiten_uebersicht.php"> zurück zur Anzeige aller Datensätze</a>
