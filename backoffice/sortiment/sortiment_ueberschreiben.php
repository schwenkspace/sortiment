<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Sortiment überschreiben";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>
<?php
$sortimentabfrage = mysqli_query(
	$dbverbindung, 
	"select sortiment_name
	from sortimentauswahl");


// isset — Prüft, ob eine Variable existiert und ob sie nicht NULL ist
if(isset($_GET["datensatz"]))
{	
	$b = mysqli_query($dbverbindung, "select * from sortimentauswahl where sortiment_nummer=".$_GET["datensatz"]);
	
	$c = mysqli_fetch_array($b);

	mysqli_close($dbverbindung);
	?>

<form action="db_sortiment_ueberschreiben.php" method="post">
Sortiment bisher: <br><i>
<?php echo $c["sortiment_name"]?></i><p/>

<!-- Sortiment neu auswählen<br>
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
</select><p/> -->

Neuer Sortimentname <p/><input type="text" name="sortiment_name" 
value ="<?php echo $c["sortiment_name"]?>" /><p/>





<input type="hidden" name="datensatz" value="<?php echo $_GET["datensatz"]?>" /><p/>
<input type="submit" value="Datensatz überschreiben"/>




</form>	



<p>Falschen Datensatz erwischt?<br>
Dann -> 
<a href="sortiment_bearbeiten_uebersicht.php"> zurück zur Anzeige aller Datensätze</a>
	
	<?php
}
else
{
	echo "Sie dürfen die Datei nur via"." <a href='sortiment_bearbeiten_uebersicht.php'>Sortimentsübersicht</a>"."  nutzen";	
}
?>
</body>
</html>
