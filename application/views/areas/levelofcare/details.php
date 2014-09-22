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
<h3>Level of Care - Summary <span>Status: '.((isset($_COOKIE["locstatus"])) ? $_COOKIE["locstatus"] : "In Progress" ).'</span></h3>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/levelofcare/history').'\'">Back to List</button>
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
            <h4>Level of Care Information</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">General Information</legend>
                    <div class="column-left">
                        <p class="row summary">
                            <span class="label">LOC Recommended?</span>
                            <span class="data-element">Yes</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">LOC Source:</span>
                            <span class="data-element">InterRAI</span>
                        </p>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Nurse LOC Decision</h4>
            <div class="TaskDetailLink">
                <a href="#" onclick="window.location.href= \''.base_url('/index.php/levelofcare/nursedecision_edit').'\'" '.$hideEditNurse.'>Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Decision Information</legend>
                    <div class="row">
                        <label for="loctype" class="complete-required">LOC Type:</label>
                        <input type="text" id="loctype"/>
                    </div>
                    <div class="row">
                        <label for="nurse-nflocdecision" class="complete-required">NF LOC Decision:</label>
                        <input type="text" id="nurse-nflocdecision" value="'.((isset($_COOKIE["nursedecision"])) ? $_COOKIE["nursedecision"] : "" ).'"/>
                    </div>
                    <div class="row">
                        <label for="nurse-loceffectivedate" class="complete-required">Effective Date:</label>
                        <input type="text" id="nurse-loceffectivedate" class="date"/>
                    </div>
                    <div class="row">
                        <label for="nurse-locdecisiondate" class="complete-required">Decision Date:</label>
                        <input type="text" id="nurse-locdecisiondate" class="date"/>
                    </div>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Signature</legend>
                    <div class="row">
                        <input type="checkbox" id="nurse-locdecisionsignature"/>
                        <label for="nurse-locdecisionsignature" class="complete-required">Signature Captured on File:</label>
                    </div>
                    </fieldset>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel" '.$hidePhysicianPanel.'>
        <div class="header">
            <h4>Physician LOC Decision</h4>
            <div class="TaskDetailLink">
                <a href="#" onclick="window.location.href= \''.base_url('/index.php/levelofcare/physiciandecision_edit').'\'" '.$hideEditPhysician.'>Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Decision Information</legend>
                    <div class="row">
                        <label for="physician-nflocdecision" class="complete-required">NF LOC Decision:</label>
                        <input type="text" id="physician-nflocdecision" value="'.((isset($_COOKIE["physiciandecision"])) ? $_COOKIE["physiciandecision"] : "" ).'"/>
                    </div>
                    <div class="row">
                        <label for="physician-loceffectivedate" class="complete-required">Effective Date:</label>
                        <input type="text" id="physician-loceffectivedate" class="date"/>
                    </div>
                    <div class="row">
                        <label for="physician-locdecisiondate" class="complete-required">Decision Date:</label>
                        <input type="text" id="physician-locdecisiondate" class="date"/>
                    </div>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Signature</legend>
                    <div class="row">
                        <input type="checkbox" id="physician-locdecisionsignature"/>
                        <label for="physician-locdecisionsignature" class="complete-required">Signature Captured on File:</label>
                    </div>
                    </fieldset>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Workflow History</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-table noInit">
                    <thead>
                        <tr>
                            <th>
                                Last Modified By
                            </th>
                            <th>
                                Date Modified
                            </th>
                            <th>
                                Preivous Status
                            </th>
                            <th>
                                New Status
                            </th>
                            <th>
                                Comments
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Assessor
                            </td>
                            <td>
                                09/02/2014
                            </td>
                            <td>
                                Clarification Requested For Assessor
                            </td>
                            <td>
                                Pending Nurse Review
                            </td>
                            <td>
                                I have attached a document that explains...
                            </td>
                            <td>
                                <a href="#">Quick View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nurse
                            </td>
                            <td>
                                09/01/2014
                            </td>
                            <td>
                                In Progress
                            </td>
                            <td>
                                Clarification Requested For Assessor
                            </td>
                            <td>
                                I need further information regarding...
                            </td>
                            <td>
                                <a href="#">Quick View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="header">
            <h4>Attachments</h4>
            <div class="TaskDetailLink">
                <a href="#" onclick="addAttachment();" '.$hideAddAttachment.'>Add</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-table noInit">
                    <thead>
                        <tr>
                            <th>
                                Attachment Name
                            </th>
                            <th>
                                Attachment Type
                            </th>
                            <th>
                                Added By
                            </th>
                            <th>
                                Date Added
                            </th>
                            <th>
                                Comments
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Explanation.PDF
                            </td>
                            <td>
                                Medical
                            </td>
                            <td>
                                Assessor
                            </td>
                            <td>
                                09/02/2014
                            </td>
                            <td>
                                Medical History...
                            </td>
                            <td>
                                <a href="#">View</a>
                            </td>
                        </tr>
                    </tbody>
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