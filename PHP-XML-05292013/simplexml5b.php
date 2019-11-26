
<?php

//simpleXml.php
//first example parses contact.xml file in xml folder

$file = 'xml/contacts.xml';


$xml = simplexml_load_file($file);


// echo '<pre>';
// var_dump($xml);
// echo '</pre>';

echo 'There are ' . count($xml[0]) . ' child elements to the ' . $xml[0]->getName() . ' element<br />';




// heres how we loop through the 'children'
//
foreach($xml[0]->children() as $child)//returns element one at a time
{

	 echo '<pre>';
	 var_dump($xml);
	 echo '</pre>';
	
	
	//echo $contact->FirstLast . '<br />';
	echo '<br />';
	echo $child->getName() . ': ' . $child . ' ';
	
	

}

?>