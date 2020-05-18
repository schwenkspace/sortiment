<hr><?php echo $titel." fürs Produkt <strong>".$c["p_name"]."</strong>"; 

$b_nummer = $c["p_nummer"] ;
?> 

<hr>
<p/>

<form action="includes/bewertung_abgeben.php" method="post">
Name <p/><input type="text" name="u_name" /><p/>
Email <p/><input type="email" name="u_mailadresse" /><p/>
<table><tr><td>
Bewertung <p/><input type="text"  style="width: 200px; height:150px;" name="u_text" /></td><td valign="top"><p>&nbsp;<p/>
<input type="radio" id="1" name="u_bewertung" value="1"><label for="1">1</label><br>
<input type="radio" id="2" name="u_bewertung" value="2"><label for="2">2</label><br>
<input type="radio" id="3" name="u_bewertung" value="3"><label for="3">3</label><br>
<input type="radio" id="4" name="u_bewertung" value="4"><label for="4">4</label><br>
<input type="radio" id="5" name="u_bewertung" value="5"><label for="5">5</label></td></tr></table>

<input type="hidden" name="b_nummer" value="<?php echo $b_nummer ; ?>" /><p/>
<input type="submit" value="Bewertung absenden"/>

</form>




