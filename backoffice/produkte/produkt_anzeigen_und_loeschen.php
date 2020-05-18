<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Welches Produkt löschen?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbanfrageergebnis = mysqli_query(
	$dbverbindung, 
	"select *
	from produkte 
	order by p_nummer");
	
while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{
echo "<a href='2_produkt_anzeigen_und_loeschen.php?nr=".$datensatz["p_nummer"]."'>Lösche  </a> || ";
// echo $datensatz["P_Nr"];
// echo " ";
echo "<b>".$datensatz["p_name"]."</b> <p/>  ";


}
mysqli_close($dbverbindung);
?>