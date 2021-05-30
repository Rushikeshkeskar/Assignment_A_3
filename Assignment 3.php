<?php

$xml=new DomDocument('1.0');
$xml->formatOutput=true;

// create element using createElement()
// append child to parent using appendchild

$store=$xml->createElement("CD_store")
$xml=appendChild($store);

//parent->appendChild(Child);

$Movie=$xml->CreateElement("Movie");
$store->appendChild($Movie);

$Title=$xml->createElement("Title","Raees");
$Movie->appendChild($Title);
$Release_Year=$xml->createElement("Release_Year","2016");
$Movie->appendChild($Release_Year);

$Movie=$xml->CreateElement("Movie");
$store->appendChild($Movie);

$Title=$xml->createElement("Title","Stree");
$Movie->appendChild($Title);
$Release_Year=$xml->createElement("Release_Year","2019");
$Movie->appendChild($Release_Year);

$Movie=$xml->CreateElement("Movie");
$store->appendChild($Movie);

$Title=$xml->createElement("Title","Kal Ho Na Ho");
$Movie->appendChild($Title);
$Release_Year=$xml->createElement("Release_Year","2003");
$Movie->appendChild($Release_Year);

echo "$xmp" . $xml->saveXML() . "</xmp";
?>