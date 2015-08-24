<?php

//ACCESS CONTROL

// DDA Eligibility Application
$ddaEligibilityApplication = (object) [
    'add' => false,
    'save' => false,
    'view' => false,
    'discard' => false,
    'edit' => false,
    'manage' => false,
    'revise' => false,
    'submit' => false,
    'requestinformation' => false,
];

// Eligibility and Priority Decision Form
$eligibilityAndPriorityDecisionForm = (object) [
    'add' => false,
    'view' => false,
    'discard' => false,
    'edit' => false,
    'revise' => false,
    'submit' => false,
];
require_once "users/ccsagencysupervisor.php";
require_once "users/ccscoordinator.php";
require_once "users/ddasuperuser.php";
require_once "users/regionaldirector.php";
require_once "users/regionaleligibilitystaff.php";
require_once "users/regionaleligibilitysupervisor.php";

// DDA Eligibility Application

//Add
$addDdaEligibilityApplication = $ddaEligibilityApplication->add?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/create".'">Add</a>' : '';
//View
$viewDdaEligibilityApplication = $ddaEligibilityApplication->view?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/details".'">View</a>' : '';
//Save
$saveDdaEligibilityApplication = $ddaEligibilityApplication->save?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/save".'">Save</a>' : '';
//Submit
$submitDdaEligibilityApplication = $ddaEligibilityApplication->submit?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/submit".'">Submit</a>' : '';
//Request Information
$requestInformationDdaEligibilityApplication = $ddaEligibilityApplication->requestinformation?
    '<a href="#" id="requestInformationDdaEligibilityApplication">Request Information</a>' : '';
//Submit Request Information
$submitRequestInformationDdaEligibilityApplication = $ddaEligibilityApplication->requestinformation?
    '<button type="button" onclick="window.location.href=\''.base_url().'index.php/ddaeligibilityapplication/requestinformation\'">Submit</button>' : '';
//Revise
$reviseDdaEligibilityApplication = $ddaEligibilityApplication->revise?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/revise".'">Revise</a>' : '';
//Discard
$discardDdaEligibilityApplication = $ddaEligibilityApplication->discard?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/discard".'">Discard</a>' : '';


//Edit Applicant's Information
$editApplicantsInformation = $ddaEligibilityApplication->edit?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/applicantsinformation/edit".'">Edit</a>' : '';
//Save Applicant's Information
$saveApplicantsInformation = $ddaEligibilityApplication->save?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/applicantsinformation/save".'">Save</a>' : '';
//Save & Next Applicant's Information
$saveNextApplicantsInformation = $ddaEligibilityApplication->save?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/applicantsinformation/saveandnext".'">Save & Next</a>' : '';


//Edit Applicant's Self Assessment
$editApplicantsSelfAssessment = $ddaEligibilityApplication->edit?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/applicantsselfassessment/edit".'">Edit</a>' : '';
//Save Applicant's Self Assessment
$saveApplicantsSelfAssessment = $ddaEligibilityApplication->save?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/applicantsselfassessment/save".'">Save</a>' : '';
//Save & Next Applicant's Self Assessment
$saveNextApplicantsSelfAssessment = $ddaEligibilityApplication->save?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/applicantsselfassessment/saveandnext".'">Save & Next</a>' : '';


//Manage Documentation
$manageDocumentation = $ddaEligibilityApplication->manage?
    '<a href="'.base_url()."index.php/ddaeligibilityapplication/documentation/manage".'">Manage</a>' : '';


// Eligibility and Priority Decision Form
$addEligibilityAndPriorityDecisionForm = $eligibilityAndPriorityDecisionForm->add?
    '<a href="'.base_url()."index.php/eligibilityAndPriorityDecisionForm/create".'">Add</a>' : '';

