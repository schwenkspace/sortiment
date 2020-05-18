<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Kommentar gelöscht!";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php
echo "Kommentar gelöscht!";


$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"delete from bewertung 
	where b_nr=".$_GET['nr']);
	

mysqli_close($dbverbindung);
?>
