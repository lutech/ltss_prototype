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
<h3>Plans of Services and Supports - PSS Overview</h3>
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
<div class="panelbar-task-style">
    <div class="panel">
        <div class="header">
            <h4>Overview</h4>
            <div class="form-action TaskDetailLink">
                <a href="'.base_url()."index.php/providerclient/psssummary".'">View Full PSS</a>
            </div>
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
                    <h5>Current Medications</h5>
                    <div class="fieldset-container-one">

                                <table class="generalTable">
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
                                        <tr id="editItemRow">
                                            <td data-bind="text: Medication">Tylenol</td>
                                            <td data-bind="text: Physician">Dr. Hibbert</td>
                                            <td data-bind="text: Dosage">250mg</td>
                                            <td data-bind="text: Frequency">Once a day</td>
                                            <td data-bind="text: ReasonsPrescribed">Migraines</td>
                                            <td data-bind="yesNo: Psychotropic">Yes</td>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
<br/>
                    <h5>Medication Change Request</h5>
                    <div class="fieldset-container-one">
                        <div class="header-link" id="inprogressButtons">
                            <a href="'.base_url()."index.php/providerclient/medicationchangerequestnew".'">Discard</a>
                            <a href="'.base_url()."index.php/providerclient/medicationchangerequestnew".'">Manage</a>
                            <a href="#" onclick="submitRequest()">Submit</a>
                        </div>
                        <div class="header-link" id="submittedButtons" style="display: none">
                            <a href="'.base_url()."index.php/providerclient/medicationchangerequestview".'">View</a>
                        </div>
                        <div class="header-link" id="submittedButtons" style="display: none">
                            <a href="'.base_url()."index.php/providerclient/medicationchangerequestview".'">Re-Open</a>
                        </div>
                        <div class="row">
                            <div class="column-left">
                                <div class="row summary">
                                    <span class="label">Last Modified By:</span>
                                    <span class="data-element">Candace Kind</span>
                                </div>
                                <div class="row summary">
                                    <span class="label">Status:</span>
                                    <span class="data-element">Pending Review</span>
                                </div>
                            </div>
                            <div class="column-left">
                                <div class="row summary">
                                    <span class="label">Last Modified Date:</span>
                                    <span class="data-element">05/10/2015</span>
                                </div>
                            </div>
                        </div>
                        <table class="generalTable" id="medicationInfosTable" noinit="true">
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
                        <br/>
                        <table class="generalTable">
                        <caption class="caption-header">
                            Previous Change Requests
                        </caption>
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
                                                <a href="#">View</a>
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
                                                <a href="'.base_url()."index.php/providerclient/medicationchangerequestview".'">View</a>
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
    </div>
    <div class="panel">
        <div class="header">
            <h4>Activity Support Plans</h4>
            <div class="form-action TaskDetailLink">

            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
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

    function submitRequest(){
        $("#inprogressButtons").hide();
        $("#submittedButtons").show();
    }
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