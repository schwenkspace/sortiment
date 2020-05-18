<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Welchen Kommentar löschen?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php


$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"select *
	from bewertung 
	order by b_nr");
	
while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{
echo "<a href='2_kommentare_anzeigen_und_loeschen.php?nr=".$datensatz["b_nr"]."'>Lösche  </a> || ";
echo $datensatz["u_text"];
//$datensatz["b_datum"] = date("d.m.Y",$timestamp);
echo " von ".$datensatz["u_name"]." am ".$datensatz["b_datum"]." <p/>  ";


}
mysqli_close($dbverbindung);
?>