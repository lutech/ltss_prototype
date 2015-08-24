<?php

if (isset($_COOKIE['role'])){

    //CCS Cooridnator Permissions
    if ($_COOKIE['role'] == "ccscoordinator"){
        // DDA Eligibility Application
        $ddaEligibilityApplication->view = true;

        if (
            $ddaEligibilityApplicationData->status == "Information Requested"
        ) {
            $ddaEligibilityApplication->ccssubmit = true;
            $ddaEligibilityApplication->edit = true;
            $ddaEligibilityApplication->save = true;
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