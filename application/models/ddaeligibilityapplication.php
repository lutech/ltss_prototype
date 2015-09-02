<?php

// DDA Eligibility Application
$ddaEligibilityApplicationData = (object) [
    'status' => '', //In Progress
                    //Information Requested
                    //Abandoned
                    //Complete
                    //Discarded

    'active' => '', //Active
                    //Inactive;
    'lastmodifiedby' => '',
    'date'   => (object) [
                'lastmodified' => '',
                'application' => '',
                'completion' => '',
                'currentstatusattained' => ''
            ],
    'reset' => ''
];
//Status
if (isset($_COOKIE['ddaeligibilityapplicationstatus'])) {
    $ddaEligibilityApplicationData->status = $_COOKIE['ddaeligibilityapplicationstatus'];
};
//Active
if (isset($_COOKIE['ddaeligibilityapplicationactive'])) {
    $ddaEligibilityApplicationData->active = $_COOKIE['ddaeligibilityapplicationactive'];
};
//Last Modified By
if (isset($_COOKIE['ddaeligibilityapplicationlastmodifiedby'])) {
    $ddaEligibilityApplicationData->lastmodifiedby = $_COOKIE['ddaeligibilityapplicationlastmodifiedby'];
};
//Last Modified Date
if (isset($_COOKIE['ddaeligibilityapplicationlastmodifieddate'])) {
    $ddaEligibilityApplicationData->date->lastmodified = $_COOKIE['ddaeligibilityapplicationlastmodifieddate'];
};
//Application Date
if (isset($_COOKIE['ddaeligibilityapplicationapplicationdate'])) {
    $ddaEligibilityApplicationData->date->application = $_COOKIE['ddaeligibilityapplicationapplicationdate'];
};
//Completion Date
if (isset($_COOKIE['ddaeligibilityapplicationcompletiondate'])) {
    $ddaEligibilityApplicationData->date->completion = $_COOKIE['ddaeligibilityapplicationcompletiondate'];
};
//Date Current Status Attained
if (isset($_COOKIE['ddaeligibilityapplicationdatecurrentstatusattained'])) {
    $ddaEligibilityApplicationData->date->currentstatusattained = $_COOKIE['ddaeligibilityapplicationdatecurrentstatusattained'];
};
//Reset
if (isset($_COOKIE['ddaeligibilityapplicationreset'])) {
    $ddaEligibilityApplicationData->reset = $_COOKIE['ddaeligibilityapplicationreset'];
};

