<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Sortimentgruppen anzeigen und löschen";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"select *
	from sortimentauswahl 
	order by sortiment_nummer");
	
while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{
echo "<a href='2_sortiment_anzeigen_und_loeschen.php?nr=".$datensatz["sortiment_nummer"]."'>Lösche  </a> || ";
// echo $datensatz["P_Nr"];
// echo " ";
echo "<b>".$datensatz["sortiment_name"]."</b> <p/>  ";


}
mysqli_close($dbverbindung);
?>