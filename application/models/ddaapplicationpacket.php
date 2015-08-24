<?php

// DDA Application Packet
$ddaApplicationPacketData = (object) [
    'status' => '', //In Progress
                    //Pending Regional Staff Review
                    //Pending Waiver Unit Staff Review
                    //Clarification Requested by Regional Staff
                    //Clarification Requested by Waiver Unit
                    //Discarded
                    //Complete

    'active' => '', //Active
                    //Inactive

    'programtype' => '',
    'createdby' => '',
    'date'   => (object) [
            'created' => '',
            'application' => '',
            'completed' => '',
            'currentstatusattained' => ''
        ]
];
if (isset($_COOKIE['ddaapplicationpacketstatus'])) {
    $ddaApplicationPacketData->status = $_COOKIE['ddaapplicationpacketstatus'];
};
if (isset($_COOKIE['ddaapplicationpacketactive'])) {
    $ddaApplicationPacketData->active = $_COOKIE['ddaapplicationpacketactive'];
};
if (isset($_COOKIE['ddaapplicationpacketprogramtype'])) {
    $ddaApplicationPacketData->programtype = $_COOKIE['ddaapplicationpacketprogramtype'];
};
if (isset($_COOKIE['ddaapplicationpacketcreatedby'])) {
    $ddaApplicationPacketData->createdby = $_COOKIE['ddaapplicationpacketcreatedby'];
};
if (isset($_COOKIE['ddaapplicationpacketcreatedate'])) {
    $ddaApplicationPacketData->date->created = $_COOKIE['ddaapplicationpacketcreatedate'];
};
if (isset($_COOKIE['ddaapplicationpacketcompletedate'])) {
    $ddaApplicationPacketData->date->completed = $_COOKIE['ddaapplicationpacketcompletedate'];
};