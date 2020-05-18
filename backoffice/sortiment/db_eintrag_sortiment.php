<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Neue Sortimentgruppe erstellen";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php


mysqli_query
($dbverbindung, 
	"insert into sortimentauswahl
		(sortiment_name
		)

		values (
					'".$_POST["sortiment_name"]."'
				)
	"
);



$sortiment_name = $_POST["sortiment_name"];
echo $sortiment_name;
echo "<br>wurde in die Datenbank eingetragen <p/>\o/ <p/>";


mysqli_close($dbverbindung);
?>
