
<?php

//simpleXml.php
//first example parses contact.xml file in xml folder
include 'include/php-xml_inc.php';


$file = 'xml/beethoven.xml';


$xml = simplexml_load_file($file);


// echo '<pre>';
// var_dump($xml);
// echo '</pre>';

simpleXMLRecursive($xml);

?>