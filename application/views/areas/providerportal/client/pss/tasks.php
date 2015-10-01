<?php

//Assessor Access
$hideSubmit ="style='display:none'";
$hideClarificationRequest ="style='display:none'";
$hideEditNurse ="style='display:none'";
$hideEditPhysician ="style='display:none'";
$hideAddAttachment ="style='display:none'";

if (isset($_COOKIE['locstatus']) && isset($_COOKIE['role'])){
    if ($_COOKIE['locstatus'] == "Clarification Requested For Assessor" && $_COOKIE['role'] == "assessor"){
        $hideSubmit = "";
        $hideAddAttachment = "";
    }
};

//Nurse Access
if (isset($_COOKIE['locstatus']) && isset($_COOKIE['role'])){
    if ($_COOKIE['locstatus'] == "In Progress" && $_COOKIE['role'] == "nurse" ||
        $_COOKIE['locstatus'] == "Clarification Requested For Nurse" && $_COOKIE['role'] == "nurse" ||
        $_COOKIE['locstatus'] == "Pending Nurse Review" && $_COOKIE['role'] == "nurse") {
        $hideSubmit = "";
        $hideClarificationRequest = "";
        $hideEditNurse = "";
        $hideAddAttachment = "";
    }
};
//Physician Access
if (isset($_COOKIE['locstatus']) && isset($_COOKIE['role'])){
    if ($_COOKIE['locstatus'] == "Pending Physician Review" && $_COOKIE['role'] == "physician") {
        $hideSubmit = "";
        $hideClarificationRequest = "";
        $hideEditPhysician = "";
        $hideAddAttachment = "";
    }
};

$WorkspaceHeader = '
<h3>Plans of Services and Supports &mdash; Implementation <span>Program Type: ID/DD</span> <span>PSS Type: Recertification</span></h3>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/providerclient/psshistory').'\'">Back to List</button>
    </div>

    <div class="float-right">
        <button type="button" id="requestClarification" '.$hideClarificationRequest.'>Request Clarification</button>
        <button type="button" id="submitLoc" '.$hideSubmit.'>Submit</button>
        <button id="expandCollapseAll" runat="server"></button>
    </div>

</div>
';?>
<?php
$hidePhysicianPanel ="style='display:none'";
if (isset($_COOKIE['referredToPhysician'])){
    if ($_COOKIE['referredToPhysician'] == true) {
        $hidePhysicianPanel = "";
    }
};

$Body = '
<div class="genericform-style read-only panelbar-formheader-style">
    <div class="panel">
        <div class="header">
            <h4>Overview</h4>
            <!--<div class="form-action TaskDetailLink">
                <a href="'.base_url()."index.php/providerclient/psssummary".'">View Full PSS</a>
            </div>-->
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Medications</h4>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="generalTable">
                    <caption class="caption-header">Current Medications</caption>
                    <thead>
                        <tr>
                            <th>Medication</th>
                            <th>Physician</th>
                            <th>Dosage</th>
                            <th>Frequency</th>
                            <th>Reason(s) Prescribed</th>
                            <th>Psychotropic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="editItemRow" style="display: none">
                            <td data-bind="text: Medication">Tylenol</td>
                            <td data-bind="text: Physician">Dr. Hibbert</td>
                            <td data-bind="text: Dosage">200mg</td>
                            <td data-bind="text: Frequency">Twice a day</td>
                            <td data-bind="text: ReasonsPrescribed">Migraines</td>
                            <td data-bind="yesNo: Psychotropic">Yes</td>
                        </tr>
                        <tr id="editItemRow">
                            <td data-bind="text: Medication">Tylenol</td>
                            <td data-bind="text: Physician">Dr. Hibbert</td>
                            <td data-bind="text: Dosage">50mg</td>
                            <td data-bind="text: Frequency">As needed</td>
                            <td data-bind="text: ReasonsPrescribed">Headaches</td>
                            <td data-bind="yesNo: Psychotropic">Yes</td>
                        </tr>
                    </tbody>
                </table>
                <table class="generalTable">
                    <caption class="caption-header"><span>Medication Change Requests</span><span class="TaskDetailLink"><a href="'.base_url()."index.php/providerclient/medicationchangerequestnew".'">Request Medication Change</a></span></caption>
                    <thead>
                        <tr>
                            <th>Last Modified By</th>
                            <th>Last Modified Date</th>
                            <th>Status</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Candace Kind
                            </td>
                            <td data-bind="text: Physician">
                                05/10/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Reviewed
                            </td>
                            <td data-bind="text: Frequency">
                                Is comments needed?
                            </td>
                            <td data-bind="yesNo: Psychotropic" style="display:none">
                                <a href="'.base_url()."index.php/providerclient/medicationchangerequestnew".'">Manage</a>
                                <a href="#">Submit</a>
                                <a href="#">Discard</a>
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="#">Manage</a>
                            </td>
                        </tr>
                        <tr id="editItemRow" style="display: none">
                            <td data-bind="text: Medication">
                                Candace Kind
                            </td>
                            <td data-bind="text: Physician">
                                03/30/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Submitted
                            </td>
                            <td data-bind="text: Frequency">
                                Is comments needed?
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="'.base_url()."index.php/providerclient/medicationchangerequestview".'">Manage</a>
                            </td>
                        </tr>
                        <tr style="display: none">
                            <td colspan="5" class="text-center">No data to display</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Activity Support Plans</h4>
            <div class="form-action TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
            <h5 style="background: #e4e4e4;">Details</h5>
            <div class="fieldset-container-one">
                <div class="row">
                    <div class="column-left">
                        <div class="row summary">
                            <span class="label">Start Date:</span>
                            <span class="data-element">05/01/2015</span>
                        </div>
                    </div>
                    <div class="column-left">
                        <div class="row summary">
                            <span class="label">End Date:</span>
                            <span class="data-element">04/30/2016</span>
                        </div>
                    </div>
                </div>
            </div>
                <table class="generalTable">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Last Edited By</th>
                            <th>Date of Action</th>
                            <th>Due Date</th>
                            <th>PSS Type</th>
                            <th>Status</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Dental Care
                            </td>
                            <td data-bind="text: Medication">
                                Candace Kind
                            </td>
                            <td data-bind="text: Physician">
                                05/10/2015
                            </td>
                            <td data-bind="text: Dosage">
                                05/31/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Change Request
                            </td>
                            <td data-bind="text: Dosage">
                                Pending Review
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="#" >Summary</a>
                            </td>
                        </tr>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Exercise
                            </td>
                            <td data-bind="text: Medication">

                            </td>
                            <td data-bind="text: Physician">

                            </td>
                            <td data-bind="text: Dosage">
                                05/31/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Change Request
                            </td>
                            <td data-bind="text: Dosage">
                                Not Started
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="'.base_url()."index.php/providerclient/activitysupportplandetails".'" >Summary</a>
                            </td>
                        </tr>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Grocery Delivery
                            </td>
                            <td data-bind="text: Medication">
                                Brenda Bright
                            </td>
                            <td data-bind="text: Physician">
                                05/28/2015
                            </td>
                            <td data-bind="text: Dosage">
                                06/14/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Change Request
                            </td>
                            <td data-bind="text: Dosage">
                                Clarification Requested
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="#" >Summary</a>
                            </td>
                        </tr>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Immunizations
                            </td>
                            <td data-bind="text: Medication">
                                Harold Peters
                            </td>
                            <td data-bind="text: Physician">
                                05/10/2015
                            </td>
                            <td data-bind="text: Dosage">
                                05/30/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Change Request
                            </td>
                            <td data-bind="text: Dosage">
                                <span class="icon-warning-sign"></span>In Progress (Late)
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="#" >Summary</a>
                            </td>
                        </tr>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Bathing
                            </td>
                            <td data-bind="text: Medication">
                                Candace Kind
                            </td>
                            <td data-bind="text: Physician">
                                05/10/2015
                            </td>
                            <td data-bind="text: Dosage">
                                05/30/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Change Request
                            </td>
                            <td data-bind="text: Dosage">
                                Approved
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="#" >Summary</a>
                            </td>
                        </tr>
                        <tr id="editItemRow" >
                            <td data-bind="text: Medication">
                                Eye Care
                            </td>
                            <td data-bind="text: Medication">
                                Brenda Bright
                            </td>
                            <td data-bind="text: Physician">
                                05/10/2015
                            </td>
                            <td data-bind="text: Dosage">
                                05/30/2015
                            </td>
                            <td data-bind="text: Dosage">
                                Change Request
                            </td>
                            <td data-bind="text: Dosage">
                                Locked/Inactive
                            </td>
                            <td data-bind="yesNo: Psychotropic">
                                <a href="#" >Summary</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Reportable Events</h4>
            <div class="form-action TaskDetailLink"><a href="#">Create New</a></div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="dataTable-list-style inline-dataTable">
                    <thead>
                        <tr>
                            <th width="8%">RE #</th>
                            <th>Report Submit Date</th>
                            <th>Event Date</th>
                            <th>Program Type</th>
                            <th>Intervention and Action Plan(s) Submit Date</th>
                            <th>Case Closure Date</th>
                            <th>Status</th>
                            <th width="10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
';?>
<?php
require "application/views/shared/_AttachmentDialog.php";
require "application/views/areas/levelofcare/_ClarificationDialog.php";
?>

<?php
$role ="";
if (isset($_COOKIE['role'])){
    $role = $_COOKIE['role'];
}
$nursedecision ="";
if (isset($_COOKIE['nursedecision'])){
    $nursedecision = $_COOKIE['nursedecision'];
}
$physiciandecision ="";
if (isset($_COOKIE['physiciandecision'])){
    $physiciandecision = $_COOKIE['physiciandecision'];
}

$confirmation ="";
if (isset($_COOKIE['confirmation'])){
    $confirmation = $_COOKIE['confirmation'];
}
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

            $("#requestClarification").on("click", function(){
                $( "#clarificationDialog" ).dialog({
                    modal: true,
                    height: "auto",
                    width: "auto",
                    maxHeight: 600,
                    maxWidth: 800,
                    resizable: false,
                    draggable : false,
                    fluid: true,
                    buttons: {
                        "Submit": function(){
                                if ("'.$role.'" == "nurse"){
                                            document.cookie="locstatus=Clarification Requested For Assessor";
                                            document.cookie="confirmation=Clarification Requested";
                                } else if ("'.$role.'" == "physician"){
                                    document.cookie="locstatus=Clarification Requested For Nurse";
                                    document.cookie="confirmation=Clarification Requested";
                                };

                                location.reload();
                            },
                        "Cancel": function() {
                            $(this).dialog("close");
                        }
                    }
                });
            });

        if ("'.$confirmation.'" == "Clarification Requested"){
            showSuccessMessage("Request for clarification has been submitted.");
            document.cookie="confirmation=";
        } else if ("'.$confirmation.'" == "success"){
                showSuccessMessage("Level of Care has been Submitted.");
                document.cookie="confirmation=";
            }

        $("#submitLoc").on("click", function(){
            if ("'.$role.'" == "assessor"){
                document.cookie="locstatus=Pending Nurse Review";
                document.cookie="confirmation=success";
            } else if ("'.$role.'" == "nurse" && "'.$nursedecision.'" == "Approve"){
                document.cookie="locstatus=Approved";
                document.cookie="confirmation=success";

            } else if ("'.$role.'" == "nurse" && "'.$nursedecision.'" == "Refer to Physician"){
                document.cookie="locstatus=Pending Physician Review";
                document.cookie="referredToPhysician=true";
                document.cookie="confirmation=success";

            } else if ("'.$role.'" == "physician" && "'.$physiciandecision.'" == "Approve"){
                document.cookie="locstatus=Approved";
                document.cookie="confirmation=success";

            } else if ("'.$role.'" == "physician" && "'.$physiciandecision.'" == "Deny"){
                document.cookie="locstatus=Denied";
                document.cookie="confirmation=success";

            };

            location.reload();
        });

});
    </script>
'?>