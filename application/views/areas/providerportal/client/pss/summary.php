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
<h3>PSS - Summary <span>Status: Approved</span></h3>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/providerclient/psstasks').'\'">Back to List</button>
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
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Part I. Essential Information</h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Contact Information
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>

                <div class="panel" id="idddWaiverSupports">
                    <div class="header sub-panel-header-one">
                        <h5>
                            ID/DD Waiver Supports
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                    </div>
                </div>

                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            ID/DD Community Supports Program
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Natural Supports
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Physician Information
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>Medications
                        </h5>
                        <div class="form-action TaskDetailLink">

                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                            <h5>Original Medications</h5>
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
                                            <td data-bind="text: Dosage">200mg</td>
                                            <td data-bind="text: Frequency">Twice a day</td>
                                            <td data-bind="text: ReasonsPrescribed">Migraines</td>
                                            <td data-bind="yesNo: Psychotropic">Yes</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>Recent Physical & Health Conditions
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Medical & MH Support Needs
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>


                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Communication & Equip/Tech
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Risk Assessment
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel" style="page-break-before: always">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Back-up and Emergency Plans
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel" style="page-break-before: always">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Family & Current Living
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Education
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Employment
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Volunteer Activities
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div><div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Behavior Supports
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Serious Incidents
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Evaluation
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panelbar-formheader-style no-auto-expand">
                <div class="panel">
                    <div class="header sub-panel-header-one">
                        <h5>
                            Essential Information Completed By
                        </h5>
                        <div class="form-action TaskDetailLink">
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-panelbar-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Part II. Personal Profile</h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Part III. Person Centeredness</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Part IV. Shared Planning</h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Attachments</h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Decision and Clarification Requests</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Workflow History</h4>
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