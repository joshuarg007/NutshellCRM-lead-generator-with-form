<?php

$text="Lead Information:" . "\n";
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$street = $_GET['street'];
$city= $_GET['city'];
$state = $_GET['state'];
$zip= $_GET['zip'];
$company = $_GET['company'];
//text in body of message
$text .= 'NAME: ' . $name . "\n";
$text .= 'EMAIL: ' . $email . "\n";
$text .= 'PHONE: ' . $phone . "\n";
$text .= 'STREET: ' .$street . "\n";
$text .= 'CITY: ' . $city . "\n";
$text .= 'STATE: ' . $email . "\n";
$text .= 'ZIP: ' . $email . "\n";

//Open cxonnection to API
include('./data/data.php');
$api = new NutshellApi($username, $apiKey);
newLead($text, $name, $phone, $email, $company, $street, $city, $state, $zip,  $assignee, $api, $source);
mail("josh@pristinescreens.com","Sample Lead Created::",$text);
