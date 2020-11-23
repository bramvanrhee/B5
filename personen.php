<?php
$xml=simplexml_load_file("personen.xml") or die("Error: Cannot create object");
print_r($xml);
?>
