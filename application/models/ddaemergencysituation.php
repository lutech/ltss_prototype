<?php

// DDA Emergency Situation
$ddaEmergencySituationData = (object) [
    'status' => '',     //In Progress
                        //Pending Regional Director Review
                        //Pending DDA Director Review
                        //Discarded
                        //Completed

    'active' => '',     //Active
                        //Inactive;

    'decision' => '',   //Approved
                        //Denied by Regional Program Supervisor;
                        //Denied by Regional Director;
                        //Denied by DDA Director;

    'lastmodifiedby' => '',
    'date'   => (object) [
                'lastmodified' => '',
                'created' => ''
            ]
];
//Status
if (isset($_COOKIE['ddaemergencysituationstatus'])) {
    $ddaEmergencySituationData->status = $_COOKIE['ddaemergencysituationstatus'];
};
//Active
if (isset($_COOKIE['ddaemergencysituationactive'])) {
    $ddaEmergencySituationData->active = $_COOKIE['ddaemergencysituationactive'];
};
//Decision
if (isset($_COOKIE['ddaemergencysituationdecision'])) {
    $ddaEmergencySituationData->decision = $_COOKIE['ddaemergencysituationdecision'];
};
//Last Modified By
if (isset($_COOKIE['ddaemergencysituationlastmodifiedby'])) {
    $ddaEmergencySituationData->lastmodifiedby = $_COOKIE['ddaemergencysituationlastmodifiedby'];
};
//Last Modified Date
if (isset($_COOKIE['ddaemergencysituationlastmodifieddate'])) {
    $ddaEmergencySituationData->date->lastmodified = $_COOKIE['ddaemergencysituationlastmodifieddate'];
};
//Date Created
if (isset($_COOKIE['ddaemergencysituationcreatedate'])) {
    $ddaEmergencySituationData->date->created = $_COOKIE['ddaemergencysituationcreatedate'];
};


//Decision on Authorization Section
$regionalProgramSupervisorDecision = "";
$regionalDirectorDecision = "";
$ddaDirectorDecision = "";
$denyReason = "";

if (isset($_COOKIE['regionalProgramSupervisorDecision'])) {
    $regionalProgramSupervisorDecision = $_COOKIE['regionalProgramSupervisorDecision'];
};
if (isset($_COOKIE['regionalDirectorDecision'])) {
    $regionalDirectorDecision = $_COOKIE['regionalDirectorDecision'];
};
if (isset($_COOKIE['ddaDirectorDecision'])) {
    $ddaDirectorDecision = $_COOKIE['ddaDirectorDecision'];
};
if (isset($_COOKIE['denyReason'])) {
    $denyReason = $_COOKIE['denyReason'];
};
