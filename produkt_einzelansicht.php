<?php
$titel = "Produkt Einzeldarstellung";
include 'includes/dbconnect.inc';
include 'includes/startmenue.inc';
include 'includes/startheader.inc';
include 'includes/mwst.inc';

$dbabfrageergebnis = mysqli_query($dbverbindung, "select * from produkte");

if(isset($_GET["datensatz"]))
{	
	$b = mysqli_query($dbverbindung, "select * from produkte where p_nummer=".$_GET["datensatz"]);
	
	$c = mysqli_fetch_array($b);

	mysqli_close($dbverbindung);



echo "Sie befinden sich hier  &rArr;  ".$c["p_sortiment"]." &rArr; ".$c["p_name"]."<hr><p/><p/>"	;

echo "<strong> ". $c["p_name"]." </strong><hr width='250' align='left'>"	;

echo "Produktbeschreibung <hr width='250' align='left'> &nbsp; &nbsp; &nbsp;".$c["p_beschreibung"]."<p>"	;



echo "netto ".$c["p_netto_preis"]." &euro;  &rArr;  ";

echo "plus ";
print mwst ($c["p_netto_preis"], 'vat', 19, 2);
echo " &euro; mwst.   &rArr; ";

echo "macht brutto ";
print mwst ($c["p_netto_preis"], 'brutto', 19, 2);
echo " &euro; <br><hr>";



if ($c["p_empfehlung"] == '') 
  {
       echo "Keine weitere Empfehlung";
   }
    
else
   { 
	echo "Dazu empfehlen wir ".$c["p_empfehlung"]."<br>";
 	} 
 


include 'includes/bewertung.php';
?>
	
<?php
}
else
{
	echo "Sie dürfen die Datei nur via"." <a href='index.php'>Produktsübersicht</a>"."  aufrufen";	
}
?>
<div style="margin-top:-380px; margin-left:400px; font-family:sans-serif; ">
<?php
include 'includes/bewertung_anzeige.php';?> </div>
</body>
</html>
