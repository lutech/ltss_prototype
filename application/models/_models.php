<?php

// Confirmations
$confirmation ="";
if (isset($_COOKIE['confirmation'])){
    $confirmation = $_COOKIE['confirmation'];
}
$confirmationmsg ="";
if (isset($_COOKIE['confirmationmsg'])){
    $confirmationmsg = $_COOKIE['confirmationmsg'];
}


// DDA Eligibility Application
require_once "ddaeligibilityapplication.php";

// DDA Application Packet
require_once "ddaapplicationpacket.php";