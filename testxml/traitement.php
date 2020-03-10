<?php
require '../vendor/autoload.php';

use App\Models\Property;

$dbman = new Property();

$dom = new DOMDocument('1.0', 'utf-8');
$contain = $dom->createElement('contain');
$dom->appendChild($contain);
$result = $dbman->selectSpecific("SELECT * FROM `property` WHERE date_create BETWEEN '" .  $_POST['datebegin'] . "' and '" . $_POST['dateend'] . "'");

var_dump($result);

foreach ($result as $key) {
    foreach ($key as $key2 => $value) {
        if ($key2 == 'date_create') {
            $element = $dom->createElement('datecreate', $value);
            $contain->appendChild($element);
        } elseif ($key2 == 'id') {
            $element = $dom->createElement('path', "/property/$value");
            $contain->appendChild($element);
        }
    }
}

$getelement = $dom->saveXML();

file_put_contents('test.xml', $getelement);
