<?php
include '../../includes/menue.inc';
?>
<?php
$titel = "Neue Sortimentgruppe erstellen";
include '../../includes/dbconnect.inc';
include '../../includes/header.inc';
?>

<?php
$sortimentabfrage = mysqli_query(
	$dbverbindung, 
	"select sortiment_name
	from sortimentauswahl");	
?>

<form action="db_eintrag_sortiment.php" method="post">
<table border='0'>
<tr><td width='100'>Neues Sortiment</td><td  width='200'><input type="text" name="sortiment_name" /></td></tr>


<tr><td></td><td><p> <input type="submit" value="Sortiment in Datenbank anlegen" /></td></tr>
</table>
</body></html>