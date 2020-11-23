<?php
$xml=simplexml_load_file("personen.xml") or die("Error: Cannot create object");
foreach($xml->persoon as $persoon) {
    echo $persoon->naam;
    echo $persoon->geslacht;
    echo $persoon->haarkleur;
    echo $persoon->leeftijd;
    echo $persoon->lichaamslengte;
}
?>
