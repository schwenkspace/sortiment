<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Welches Produkt bearbeiten?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbabfrageergebnis = mysqli_query($dbverbindung, "select * from produkte");
echo "<table>";
while($datensatz = mysqli_fetch_array($dbabfrageergebnis))
{
//	echo "<tr><td = width='10'>".$datensatz["p_nummer"]."</td>";
	echo "<td = width='200'>".$datensatz["p_name"]."</td>";
	echo "<td><a href='produkt_ueberschreiben.php?datensatz=".$datensatz["p_nummer"]."'>Bearbeiten</a></td></tr>";
}
mysqli_close($dbverbindung);
echo "</table>";

?>
</body>
</html>