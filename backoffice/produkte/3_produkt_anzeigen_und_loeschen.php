<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Produkt gelöscht!";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php
echo "Produkt gelöscht!";


$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"delete from produkte 
	where p_nummer=".$_GET['nr']);
	

mysqli_close($dbverbindung);
?>
