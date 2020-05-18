
<?php
$titel = "Unsere Produktpalette";
include 'includes/dbconnect.inc';
include 'includes/startmenue.inc';
include 'includes/startheader.inc';
include 'includes/mwst.inc';





echo "<table border='0'><tr><td><strong>Sortiment</strong></td><td><strong>
Produktnamen</strong></td><!-- <td><strong>Beschreibung</strong></td>--><td><strong>Netto</strong></td><td><strong>Mwst</strong></td><td><strong>Brutto</strong></td></tr><tr><td colspan='4'></td></tr>";

$dbanfrageergebnis = mysqli_query($dbverbindung, "select *from produkte order by p_sortiment");	

while($datensatz = mysqli_fetch_array($dbanfrageergebnis))
{	

	echo "<td width='110' valign=top>".$datensatz["p_sortiment"]."</td>";

	echo "<td width='130' valign=top><a href='produkt_einzelansicht.php?datensatz="
	.$datensatz["p_nummer"]."'>".$datensatz["p_name"]."</a></td>";

	echo "<td width='70' valign=top>".$datensatz["p_netto_preis"]." &euro;</td>";
 
	echo "<td width='100' valign=top>";
	print mwst ($datensatz["p_netto_preis"], 'vat', 19, 2);
	echo " &euro;</td>";

	echo "<td width='100' valign=top>";
	print mwst ($datensatz["p_netto_preis"], 'brutto', 19, 2);
	echo " &euro;</td></tr><tr><td colspan='5'></td></tr>"; 
}
echo "</table>";





mysqli_close($dbverbindung);

?>
</body>
</html>