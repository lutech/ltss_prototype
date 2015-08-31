<?php

// DDA Emergency Situation
$ddaEmergencySituationData = (object) [
    'status' => '', //In Progress
                    //Pending Regional Director Review
                    //Pending DDA Director Review
                    //Discarded
                    //Denied
                    //Approved
    'active' => '', //Active
                    //Inactive;
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
$ddaDeputySecretaryDecision = "";
$denyReason = "";

if (isset($_COOKIE['regionalProgramSupervisorDecision'])) {
    $regionalProgramSupervisorDecision = $_COOKIE['regionalProgramSupervisorDecision'];
};
if (isset($_COOKIE['regionalDirectorDecision'])) {
    $regionalDirectorDecision = $_COOKIE['regionalDirectorDecision'];
};
if (isset($_COOKIE['ddaDeputySecretaryDecision'])) {
    $ddaDeputySecretaryDecision = $_COOKIE['ddaDeputySecretaryDecision'];
};
if (isset($_COOKIE['denyReason'])) {
    $denyReason = $_COOKIE['denyReason'];
};
