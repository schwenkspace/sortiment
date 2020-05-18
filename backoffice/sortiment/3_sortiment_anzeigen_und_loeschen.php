<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Sortiment gelöscht!";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php
echo "Sortiment gelöscht!<br>
Bitte denken Sie daran, den Artikeln aus dem gelöschten Sortiment eine neue Sortimentruppe zuzuweisen";


$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"delete from sortimentauswahl 
	where sortiment_nummer=".$_GET['nr']);
	

mysqli_close($dbverbindung);
?>
