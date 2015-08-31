<?php

// DDA Emergency Situation
if (isset($_COOKIE['role'])){

    //STATUSES_
    //In Progress
    //Pending Regional Director Review
    //Pending DDA Director Review
    //Discarded
    //Denied
    //Approved

    //Regional Supervisor
    if ($_COOKIE['role'] == "regionaleligibilitysupervisor"){

        //View
        $ddaEmergencySituation->view = true;

        //Save
        $ddaEmergencySituation->save = true;

        //Create New
        if (
            $ddaEmergencySituationData->status == "" ||
            $ddaEmergencySituationData->status == "Approved" ||
            $ddaEmergencySituationData->status == "Denied" ||
            $ddaEmergencySituationData->status == "Discarded"
        ) {
            $ddaEmergencySituation->create = true;
        }
        //Edit
        if (
            $ddaEmergencySituationData->status == "In Progress"
        ) {
            $ddaEmergencySituation->edit = true;
        }
        //Submit
        if (
            $ddaEmergencySituationData->status == "In Progress"
        ) {
            $ddaEmergencySituation->submit = true;
        }
        //Approve
        if (
            $ddaEmergencySituationData->status == "In Progress"
        ) {
            $ddaEmergencySituation->approve = true;
        }
        //Deny
        if (
            $ddaEmergencySituationData->status == "In Progress"
        ) {
            $ddaEmergencySituation->deny = true;
        }
        //Discard
        if (
            $ddaEmergencySituationData->status == "In Progress"
        ) {
            $ddaEmergencySituation->discard = true;
        }
    }
};