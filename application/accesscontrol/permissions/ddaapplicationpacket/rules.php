<?php

//ACCESS CONTROL

// DDA Application Packet
$ddaApplicationPacket = (object) [
    'createnew' => false,
    'save' => false,
    'view' => false,
    'discard' => false,
    'edit' => false,
    'submit' => false,
    'requestclarification' => false,
    'submitclarificationrequest' => false,
];

require_once "users/ccscoordinator.php";
require_once "users/dhmhadmin.php";
require_once "users/regionalstaff.php";
require_once "users/waiverunitstaff.php";


// DDA Eligibility Application

//Create New
$createNewDdaApplicationPacket = $ddaApplicationPacket->createnew?
    '<a href="#" id="createNewDdaApplicationPacket">Create New</a>' : '';
//Upload Document
$uploadDocumentDdaApplicationPacket = $ddaApplicationPacket->edit?
    '<a href="#">Upload Document</a>' : '';
//View
$viewDdaApplicationPacket = $ddaApplicationPacket->view?
    '<a href="'.base_url()."index.php/applicationpacket/details".'">View</a>' : '';
//Save
$saveDdaApplicationPacket = $ddaApplicationPacket->save?
    '<input type="submit" value="Submit" name="submit" title="Submit" />' : '';
//Submit
$submitDdaApplicationPacket = $ddaApplicationPacket->submit?
    '<a href="'.base_url()."index.php/applicationpacket/submit".'">Submit</a>' : '';
//Request Clarification
$requestClarificationDdaApplicationPacket = $ddaApplicationPacket->requestclarification?
    '<a href="#" id="requestClarificationDdaApplicationPacket">Request Clarification</a>' : '';
//Submit Clarification Request
$submitClarificationRequestDdaApplicationPacket = $ddaApplicationPacket->submitclarificationrequest?
    '<input type="submit" value="Submit" name="submit" title="Submit" />' : '';
//Discard
$discardDdaApplicationPacket = $ddaApplicationPacket->discard?
    '<a href="'.base_url()."index.php/applicationpacket/discard".'">Discard</a>' : '';