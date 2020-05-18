<html>
<head>
<meta charset="UTF-8" />
<title>
<?php 
echo $titel;
?>
</title>




<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//susanneschwenk.de/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '10']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->




</head>
<body>
<?php
if(!$dbverbindung)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>

<div style="margin-top:-400px; margin-left:250px; font-family:sans-serif; width: 1000px">
<?php
echo "<h2 style='font-family: sans-serif;'>$titel</h2>";
?>


