<?php

$titel = "Bewertung abgegeben";
include 'dbconnect.inc';
include 'startmenueincl.inc';
include 'startheader.inc';



if(!$dbverbindung)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}

$u_name = $_POST["u_name"];
$u_mailadresse = $_POST["u_mailadresse"];
$u_text = $_POST["u_text"];
$u_bewertung = $_POST["u_bewertung"];
$b_nummer = $_POST["b_nummer"];

?>
<?php
$eintragen = mysqli_query($dbverbindung,
 "INSERT INTO bewertung
 (u_name, u_mailadresse, u_text, u_bewertung, b_nummer) 
 VALUES 
 ('$u_name', '$u_mailadresse', '$u_text', '$u_bewertung', '$b_nummer')");
 
 mysqli_close($dbverbindung);
 ?>
 <?php
 echo "Danke, ".$u_name.", für Deine Bewertung, <br>sie wird wie untenstehend eingepflegt:<p/><hr>".$u_name." meint:<p/>".$u_text."<p> und bekommt von mir ".$u_bewertung." Stern(e)!";
 
 ?>
 <hr>

