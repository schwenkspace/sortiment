<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Sortiment wirklich löschen?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"select *
	from sortimentauswahl 
	where sortiment_nummer=".$_GET['nr']);
	
while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{
echo "Sie möchten <b>" .$datensatz["sortiment_name"]."</b> - <p>Beschreibung:<p>".$datensatz["p_beschreibung"]." wirklich löschen?<p/><hr>";	
	
echo "Dann <a href='3_sortiment_anzeigen_und_loeschen.php?nr=".$datensatz["sortiment_nummer"]."'>lösche</a>  ";
echo $datensatz["sortiment_name"];
echo " von ";
echo " <a href='3_sortiment_anzeigen_und_loeschen.php?nr=".$datensatz["sortiment_nummer"]."'>jetzt</a>!";
}
mysqli_close($dbverbindung);
?>