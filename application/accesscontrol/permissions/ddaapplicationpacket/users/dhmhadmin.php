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

    //DHMH Admin Permissions
    if ($_COOKIE['role'] == "dhmhadmin"){

        //View
        $ddaApplicationPacket->view = true;

        //Save
        $ddaApplicationPacket->save = true;

        //Create New
        if (
            $ddaApplicationPacketData->status == "" ||
            $ddaApplicationPacketData->status == "Complete" ||
            $ddaApplicationPacketData->status == "Discarded"
        ) {
            $ddaApplicationPacket->createnew = true;
        }
        //Edit
        if (
            $ddaApplicationPacketData->status == "In Progress" ||
            $ddaApplicationPacketData->status == "Pending Regional Staff Review" ||
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Regional Staff" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Waiver Unit"
        ) {
            $ddaApplicationPacket->edit = true;
        }
        //Submit
        if (
            $ddaApplicationPacketData->status == "In Progress" ||
            $ddaApplicationPacketData->status == "Pending Regional Staff Review" ||
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Regional Staff" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Waiver Unit"
        ) {
            $ddaApplicationPacket->submit = true;
        }
        //Request Clarification (Dialog)
        if (
            $ddaApplicationPacketData->status == "Pending Regional Staff Review" ||
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review"
        ) {
            $ddaApplicationPacket->requestclarification = true;
        }
        //Submit Clarification Request (Dialog)
        if (
            $ddaApplicationPacketData->status == "Pending Regional Staff Review" ||
            $ddaApplicationPacketData->status == "Pending Waiver Unit Staff Review"
        ) {
            $ddaApplicationPacket->submitclarificationrequest = true;
        }
        //Discard
        if (
            $ddaApplicationPacketData->status == "In Progress"
        ) {
            $ddaApplicationPacket->discard = true;
        }
    }
};