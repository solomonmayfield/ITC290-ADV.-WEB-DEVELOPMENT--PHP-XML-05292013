
<?php

//simpleXml.php
//first example parses contact.xml file in xml folder

$file = 'xml/contacts.xml';


$xml = simplexml_load_file($file);


// echo '<pre>';
// var_dump($xml);
// echo '</pre>';

echo 'There are ' . count($xml[0]) . ' child elements to the ' . $xml[0]->getName() . ' element<br />';



//grab the simplest part 
// heres how we loop through the contacts return
foreach($xml[0] as $contact)
{
	//echo $contact->FirstLast . '<br />';
	echo $contact->attributes()->Date . '<br />';


}

?>