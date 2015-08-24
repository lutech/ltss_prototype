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
            ]
];
if (isset($_COOKIE['ddaeligibilityapplicationstatus'])) {
    $ddaEligibilityApplicationData->status = $_COOKIE['ddaeligibilityapplicationstatus'];
};
if (isset($_COOKIE['ddaeligibilityapplicationactive'])) {
    $ddaEligibilityApplicationData->active = $_COOKIE['ddaeligibilityapplicationactive'];
};
if (isset($_COOKIE['ddaeligibilityapplicationlastmodifiedby'])) {
    $ddaEligibilityApplicationData->lastmodifiedby = $_COOKIE['ddaeligibilityapplicationlastmodifiedby'];
};
if (isset($_COOKIE['ddaeligibilityapplicationlastmodifieddate'])) {
    $ddaEligibilityApplicationData->date->lastmodified = $_COOKIE['ddaeligibilityapplicationlastmodifieddate'];
};
if (isset($_COOKIE['ddaeligibilityapplicationapplicationdate'])) {
    $ddaEligibilityApplicationData->date->application = $_COOKIE['ddaeligibilityapplicationapplicationdate'];
};
if (isset($_COOKIE['ddaeligibilityapplicationcompletiondate'])) {
    $ddaEligibilityApplicationData->date->completion = $_COOKIE['ddaeligibilityapplicationcompletiondate'];
};
if (isset($_COOKIE['ddaeligibilityapplicationdatecurrentstatusattained'])) {
    $ddaEligibilityApplicationData->date->currentstatusattained = $_COOKIE['ddaeligibilityapplicationdatecurrentstatusattained'];
};

