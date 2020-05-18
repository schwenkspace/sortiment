<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Produkt eingetragen";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php


mysqli_query
($dbverbindung, 
	"insert into produkte
		(p_sortiment, p_name, p_beschreibung, p_netto_preis, p_empfehlung 
		)

		values (
					'".$_POST["sortiment_name"]."',
					'".$_POST["p_name"]."',
					'".$_POST["p_beschreibung"]."',
					'".$_POST["p_netto_preis"]."',
					'".$_POST["p_empfehlung"]."'
				)
	"
);

echo "<b>Produktname</b><br>";
$p_name = $_POST["p_name"];
echo $p_name."</b>
<br><b>Beschreibung: </b><p/>";

$p_beschreibung = $_POST["p_beschreibung"];
echo $p_beschreibung;
echo "<br>wurde in die Datenbank eingetragen <p/>\o/ <p/>";


mysqli_close($dbverbindung);
?>
