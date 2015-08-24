<?php

// DDA Application Packet
if (isset($_COOKIE['role'])){

    //STATUSES_
    //In Progress
    //Pending Regional Staff Review
    //Pending Waiver Unit Staff Review
    //Clarification Requested by Regional Staff
    //Clarification Requested by Waiver Unit
    //Discarded
    //Complete

    //Waiver Unit Staff Permissions
    if ($_COOKIE['role'] == "waiverunitsupervisor"){

        //View
        $ddaApplicationPacket->view = true;

        //Submit
        if (
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review"
        ) {
            $ddaApplicationPacket->submit = true;
        }
        //Request Clarification (Dialog)
        if (
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review"
        ) {
            $ddaApplicationPacket->requestclarification = true;
        }
        //Submit Clarification Request (Dialog)
        if (
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review"
        ) {
            $ddaApplicationPacket->submitclarificationrequest = true;
        }
    }
};