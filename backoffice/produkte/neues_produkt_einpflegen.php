<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Produkt einpflegen";
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
	
?>
<form action="db_eintrag_produkt.php" method="post">
<table border='0'><tr><td width='100'>Produktname</td><td  width='200'><input type="text" name="p_name" /></td></tr>

<tr><td width='00'>Sortiment</td><td  width='200'>
<select name="sortiment_name" size="1"  style="width:200pt;">  
<?php
while($sortiment = mysqli_fetch_array($sortimentabfrage))
{
	echo "<option value='";
	echo $sortiment["sortiment_name"];
	echo "'>".$sortiment["sortiment_name"]."</option>";
}
?>
</select>
</td></tr><tr><td>Beschreibung</td><td><textarea name="p_beschreibung" cols="35" rows="4"></textarea></td>

<tr><td width='100'>Nettopreis</td><td  width='200'><input type="text" name="p_netto_preis" value="Punkt statt Komma " /></td></tr>
<!---- anfang -->

<tr><td width='200'>Kombinationsempfehlung:</td><td  width='200'>
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
</select>
 <! --ende ----->

<tr><td></td><td><p> <input type="submit" value="Produkt in Datenbank eintragen" /></td></tr>
</table></body></html>