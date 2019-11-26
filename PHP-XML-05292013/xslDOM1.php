<?php
/*
xsl1.php - a demo file that performs a server side XSL transformation
*/

$xslDoc = new DOMDocument();
$xslDoc->load("xml/collection.xsl");//sty

$xmlDoc = new DOMDocument();
$xmlDoc->load("xml/collection.xml");

$proc = new XSLTProcessor();//
$proc->importStylesheet($xslDoc);//apply stylesheet
echo $proc->transformToXML($xmlDoc);//

?>