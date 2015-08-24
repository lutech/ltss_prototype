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