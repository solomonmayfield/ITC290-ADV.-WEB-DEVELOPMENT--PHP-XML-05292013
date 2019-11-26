
<?php

//simpleXml.php
//first example parses contact.xml file in xml folder
include 'include/php-xml_inc.php';


$file = 'xml/catalog.xml';


$xml = simplexml_load_file($file);

$zep = $xml->xPath('/catalog/cd[artist="Led Zeppelin"]'); //


// echo '<pre>';
// var_dump($zep);
// echo '</pre>';

//simpleXMLRecursive($zep);
foreach($zep as $album)

{
	echo $album->title . ', ' .$album->year . '<br />';


}
?>