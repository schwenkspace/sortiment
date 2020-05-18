<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Produkt wirklich löschen?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"select *
	from produkte 
	where p_nummer=".$_GET['nr']);
	
while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{
echo "Sie möchten <b>" .$datensatz["p_name"]."</b> - <p>Beschreibung:<p>".$datensatz["p_beschreibung"]." wirklich löschen?<p/><hr>";	
	
echo "Dann <a href='3_produkt_anzeigen_und_loeschen.php?nr=".$datensatz["p_nummer"]."'>lösche</a>  ";
echo $datensatz["p_name"];
echo " von ";
echo " <a href='3_produkt_anzeigen_und_loeschen.php?nr=".$datensatz["p_nummer"]."'>jetzt</a>!";
}
mysqli_close($dbverbindung);
?>