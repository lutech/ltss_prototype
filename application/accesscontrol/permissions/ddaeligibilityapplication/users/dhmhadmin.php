<?php

if (isset($_COOKIE['role'])){

    //DHMH Admin
    if ($_COOKIE['role'] == "dhmhadmin"){
        // DDA Eligibility Application
        $ddaEligibilityApplication->view = true;
        $ddaEligibilityApplication->save = true;

        if (
            $ddaEligibilityApplicationData->status != "In Progress" &&
            $ddaEligibilityApplicationData->status != "Information Requested"
        ) {
            $ddaEligibilityApplication->add = true;
        }
        if (
            $ddaEligibilityApplicationData->status == "In Progress"
        ) {
            $ddaEligibilityApplication->discard = true;
        }
        if (
            $ddaEligibilityApplicationData->status == "In Progress" ||
            $ddaEligibilityApplicationData->status == "Information Requested"
        ) {
            $ddaEligibilityApplication->edit = true;
        }
        if (
            $ddaEligibilityApplicationData->status == "Information Requested"
        ) {
            $ddaEligibilityApplication->ccssubmit = true;
        }
        if (
            $ddaEligibilityApplicationData->status == "In Progress"
        ) {
            $ddaEligibilityApplication->requestinformation = true;
            $ddaEligibilityApplication->submit = true;
        }
        if (
            $ddaEligibilityApplicationData->status == "Abandoned" ||
            $ddaEligibilityApplicationData->status == "Complete"
        ) {
            $ddaEligibilityApplication->revise = true;
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