<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Welches Sortiment bearbeiten?";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php

$dbabfrageergebnis = mysqli_query($dbverbindung, "select * from sortimentauswahl");
echo "<table>";
while($datensatz = mysqli_fetch_array($dbabfrageergebnis))
{
//	echo "<tr><td = width='10'>".$datensatz["sortiment_nummer"]."</td>";
	echo "<td = width='200'>".$datensatz["sortiment_name"]."</td>";
	echo "<td><a href='sortiment_ueberschreiben.php?datensatz=".$datensatz["sortiment_nummer"]."'>Bearbeiten</a></td></tr>";
}
mysqli_close($dbverbindung);
echo "</table>";

?>
</body>
</html>