<?php

//ACCESS CONTROL_

// DDA Emergency Situation
$ddaEmergencySituation = (object) [
    'create' => false,
    'save' => false,
    'view' => false,
    'edit' => false,
    'submit' => false,
    'approve' => false,
    'deny' => false,
    'discard' => false
];

//USERS_
require_once "users/ddadirector.php";
require_once "users/ddasuperuser.php";
require_once "users/regionaldirector.php";
require_once "users/regionaleligibilitysupervisor.php";
require_once "users/regionalprogramsupervisor.php";

//ACTIONS_

//Create New
$createDdaEmergencySituation = $ddaEmergencySituation->create?
    '<a href="'.base_url()."index.php/ddaemergencysituation/create".'">Add</a>' : '';
//View
$viewDdaEmergencySituation = $ddaEmergencySituation->view?
    '<a href="'.base_url()."index.php/ddaemergencysituation/details".'">View</a>' : '';
//Save
$saveDdaEmergencySituation = $ddaEmergencySituation->save?
    '<a href="'.base_url()."index.php/ddaemergencysituation/save".'">Save</a>' : '';
//Submit
$submitDdaEmergencySituation = $ddaEmergencySituation->submit?
    '<a href="'.base_url()."index.php/ddaemergencysituation/submit".'">Submit</a>' : '';
//Approve
$approveDdaEmergencySituation = $ddaEmergencySituation->approve?
    '<a href="'.base_url()."index.php/ddaemergencysituation/approve".'">Submit Approve</a>' : '';
//Deny
$denyDdaEmergencySituation = $ddaEmergencySituation->deny?
    '<a href="'.base_url()."index.php/ddaemergencysituation/deny".'">Submit Deny</a>' : '';
//Discard
$discardDdaEmergencySituation = $ddaEmergencySituation->discard?
    '<a href="'.base_url()."index.php/ddaemergencysituation/discard".'">Discard</a>' : '';


//Edit Decision on Authorization
$editDecisionOnAuthorization = $ddaEmergencySituation->edit?
    '<a href="'.base_url()."index.php/ddaemergencysituation/decisiononauthorization/edit".'">Edit</a>' : '';
//Save Decision on Authorization
$saveDecisionOnAuthorization = $ddaEmergencySituation->save?
    '<a href="#" onclick=\'$("#submitDecisionAuthorizationForm").click();\'>Save</a>' : '';