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

    //DDA Director
    if ($_COOKIE['role'] == "ddadirector"){

        //View
        $ddaEmergencySituation->view = true;

        //Approve
        if (
            $ddaEmergencySituationData->status == "Pending DDA Director Review"
        ) {
            $ddaEmergencySituation->approve = true;
        }
        //Edit
        if (
            $ddaEmergencySituationData->status == "Pending DDA Director Review"
        ) {
            $ddaEmergencySituation->edit = true;
        }
        //Submit
        if (
            $ddaEmergencySituationData->status == "Pending DDA Director Review"
        ) {
            $ddaEmergencySituation->submit = true;
        }
        //Deny
        if (
            $ddaEmergencySituationData->status == "Pending DDA Director Review"
        ) {
            $ddaEmergencySituation->deny = true;
        }
    }
};