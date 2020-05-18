<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Produkt überschreiben";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php
$sortimentabfrage = mysqli_query(
	$dbverbindung, 
	"select sortiment_name
	from sortimentauswahl");
	
$empfehlung = mysqli_query(
$dbverbindung, 
"select p_name
from produkte");


// isset — Prüft, ob eine Variable existiert und ob sie nicht NULL ist
if(isset($_GET["datensatz"]))
{	
	$b = mysqli_query($dbverbindung, "select * from produkte where p_nummer=".$_GET["datensatz"]);
	
	$c = mysqli_fetch_array($b);

	mysqli_close($dbverbindung);
	?>

<form action="db_produkt_ueberschreiben.php" method="post">
Sortiment bisher: <br><i>
<?php echo $c["p_sortiment"]?></i><p/>

Sortiment neu auswählen<br>
<select name="p_sortiment" size="1"   style="width:100pt;">  
<option value= ""> </option>
<?php
while($sortiment = mysqli_fetch_array($sortimentabfrage))
{
	echo "<option value='";
	echo $sortiment["sortiment_name"];
	echo "'>".$sortiment["sortiment_name"]."</option>";
}
?>
</select><p/>

Produktname <p/><input type="text" name="p_name" 
value ="<?php echo $c["p_name"]?>" /><p/>

Bisherige Produktbeschreibung <br>
<?php echo $c["p_beschreibung"]?><p>
neu: <i>(c&p)</i><br>
<textarea name="p_beschreibung" cols="35" rows="4" value="
<?php echo $c["p_beschreibung"]?>
" /></textarea><p/>
<!--- ????will nicht :(
<?php
echo "<textarea name='p_beschreibung' cols='35' rows='4' value='".
$c["p_beschreibung"]." '></textarea><p/>"
?>
-->
Nettopreis <p/><input type="text" name="p_netto_preis" 
value="<?php echo $c["p_netto_preis"]?>" /><p>


Empfehlung bisher: <br><i>
<?php echo $c["p_empfehlung"]?></i><p/>

Empfehlung neu auswählen<br>
<select name="p_empfehlung" size="1"  style="width:200pt;">
<option value=''> </option>  
<?php
while($p_name = mysqli_fetch_array($empfehlung))
{
	echo "<option value='";
	echo $p_name["p_name"];
	echo "'>".$p_name["p_name"]."</option>";
}
?>
</select><p/>






<input type="hidden" name="datensatz" value="<?php echo $_GET["datensatz"]?>" /><p/>
<input type="submit" value="Datensatz überschreiben"/>




</form>	



<p>Falschen Datensatz erwischt?<br>
Dann -> 
<a href="produkt_bearbeiten_uebersicht.php"> zurück zur Anzeige aller Datensätze</a>
	
	<?php
}
else
{
	echo "Sie dürfen die Datei nur via"." <a href='1-sortiment_bearbeiten.php'>Sortimentsübersicht</a>"."  nutzen";	
}
?>
</body>
</html>
