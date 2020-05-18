<?php
include 'includes/dbconnect.inc';



if(isset($_GET["datensatz"]))
{	
	$b = mysqli_query($dbverbindung, "select * from bewertung where b_nummer=".$_GET["datensatz"]) ;
// if bewertung FALSE


	$c = mysqli_fetch_array($b);	
		   echo $c["u_name"]." meinte am ".$c["b_datum"].":<hr>'";
			echo $c["u_text"]."' <br>und bekommt von mir "	;
			echo $c["u_bewertung"]." Sterne<hr>"	; 

	while($c = mysqli_fetch_array($b))
		{
			//$c["b_datum"] = date("d.m.Y",$timestamp);
			echo $c["u_name"]." meinte am ".$c["b_datum"].":<hr>'";
			echo $c["u_text"]."' <br>und vergibt <b>"	;
			echo $c["u_bewertung"]."</b> Sterne<hr>"	;
		}

	mysqli_close($dbverbindung);		

}
else
{
	echo "Bisher keine Bewertung.";	
}
?>
