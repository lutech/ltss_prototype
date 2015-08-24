<?php

if (isset($_COOKIE['role'])){

    //CCS Cooridnator
    if ($_COOKIE['role'] == "ccsagencysupervisor"){
        // DDA Eligibility Application

        //View
        $ddaEligibilityApplication->view = true;

        //Manage
        if (
            $ddaEligibilityApplicationData->status == "Information Requested"
        ) {
            $ddaEligibilityApplication->manage = true;
        }

        //Save
        if (
            $ddaEligibilityApplicationData->status == "Information Requested"
        ) {
            $ddaEligibilityApplication->save = true;
        }

        //Submit
        if (
            $ddaEligibilityApplicationData->status == "Information Requested"
        ) {
            $ddaEligibilityApplication->submit = true;
        }

        // Eligibility and Priority Decision Form
        $eligibilityAndPriorityDecisionForm->add = true;
        $eligibilityAndPriorityDecisionForm->view = true;
        $eligibilityAndPriorityDecisionForm->discard = true;
        $eligibilityAndPriorityDecisionForm->edit = true;
        $eligibilityAndPriorityDecisionForm->revise = true;
        $eligibilityAndPriorityDecisionForm->submit = true;
    }
};