<?php

if (isset($_COOKIE['role'])){

    //Regional Director
    if ($_COOKIE['role'] == "regionaldirector"){
        // DDA Eligibility Application
        $ddaEligibilityApplication->view = true;
        $ddaEligibilityApplication->save = true;

        //Add
        if (
            $ddaEligibilityApplicationData->status != "In Progress" &&
            $ddaEligibilityApplicationData->status != "Information Requested"
        ) {
            $ddaEligibilityApplication->add = true;
        }
        //Discard
        if (
            $ddaEligibilityApplicationData->status == "In Progress"
        ) {
            $ddaEligibilityApplication->discard = true;
        }
        //Edit
        if (
            $ddaEligibilityApplicationData->status == "In Progress"
        ) {
            $ddaEligibilityApplication->edit = true;
        }
        //Submit
        if (
            $ddaEligibilityApplicationData->status == "In Progress"
        ) {
            $ddaEligibilityApplication->submit = true;
        }
        //Request Information
        if (
            $ddaEligibilityApplicationData->status == "In Progress"
        ) {
            $ddaEligibilityApplication->requestinformation = true;
        }
        //Revise
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