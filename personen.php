<?php
$xml=simplexml_load_file("personen.xml") or die("Error: Cannot create object");
echo $xml->persoon->naam . "<br>";
echo $xml->persoon->geslacht . "<br>";
echo $xml->persoon->haarkleur . "<br>";
echo $xml->persoon->leeftijd . "<br>";
echo $xml->persoon->lichaamslengte;
?>
