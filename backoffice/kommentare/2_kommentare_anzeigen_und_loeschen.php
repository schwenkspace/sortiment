<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Kommentar wirklich löschen?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"select *
	from bewertung 
	where b_nr=".$_GET['nr']);
	
while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{
echo "Sie möchten <b>" .$datensatz["u_text"]."</b> - <p>von:<p>".$datensatz["u_name"]." wirklich löschen?<p/><hr>";	
	
echo "Dann <a href='3_kommentare_anzeigen_und_loeschen.php?nr=".$datensatz["b_nr"]."'>lösche</a>  ";
echo $datensatz["u_text"];
echo " von ";
echo " <a href='3_kommentare_anzeigen_und_loeschen.php?nr=".$datensatz["b_nr"]."'>jetzt</a>!";
}
mysqli_close($dbverbindung);
?>