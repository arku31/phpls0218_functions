<?php
$file = file_get_contents('example.xml');
$xml =new SimpleXMLElement($file);
print_r($xml->to->__toString());
die();