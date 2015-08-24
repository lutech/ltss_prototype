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

    //CCS Coordinator Permissions
    if ($_COOKIE['role'] == "ccsagencysupervisor"){
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
            $ddaApplicationPacketData->status == "Clarification Requested by Regional Staff" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Waiver Unit"
        ) {
            $ddaApplicationPacket->edit = true;
        }
        //Submit
        if (
            $ddaApplicationPacketData->status == "In Progress" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Regional Staff" ||
            $ddaApplicationPacketData->status == "Clarification Requested by Waiver Unit"
        ) {
            $ddaApplicationPacket->submit = true;
        }
        //Discard
        if (
            $ddaApplicationPacketData->status == "In Progress"
        ) {
            $ddaApplicationPacket->discard = true;
        }
    }
};