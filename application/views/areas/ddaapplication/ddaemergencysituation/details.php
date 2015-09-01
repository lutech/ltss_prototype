<?php

$WorkspaceHeader = '
<h3>DDA Emergency Situation Form<span>Status: '.$ddaEmergencySituationData->status.'</span><span id="decisionStatus">Decision: '.$ddaEmergencySituationData->decision.'</span></h3>
<div class="read-edit-toggle">
    <span>View</span>
</div>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/ddaapplication/summary').'\'">Back to List</button>
    </div>

    <div class="float-right">
        '.$submitDdaEmergencySituation.'
        '.$discardDdaEmergencySituation.'
        <button id="expandCollapseAll" runat="server"></button>
    </div>

</div>
';?>
<?php
$Body = '

<div class="genericform-style read-only panelbar-formheader-style">
    <div class="panel">
        <div class="header">
            <h4>Emergency Situation</h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                 <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Emergency Situation Information</legend>
                    <img src="http://placehold.it/800x300/cccccc?text=(Form+Placeholder)" style="width: 100%;">
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Emergency Request</legend>
                    <img src="http://placehold.it/800x300/cccccc?text=(Form+Placeholder)" style="width: 100%;">
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Determinations</legend>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Eligbility For DDA Services</legend>
                        <img src="http://placehold.it/800x300/cccccc?text=(Form+Placeholder)" style="width: 100%;">
                    </fieldset>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Emergency Situations</legend>
                        <img src="http://placehold.it/800x300/cccccc?text=(Form+Placeholder)" style="width: 100%;">
                    </fieldset>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Decision on Authorization of Initiation of Services</h4>
            <div class="TaskDetailLink">
                '.$editDecisionOnAuthorization.'
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Decision</legend>

                    <div class="row">
                        <label for="regionalProgramSupervisorDecision" class="submit-required">Regional Office Program Supervisor:</label>
                        <input type="text" name="regionalProgramSupervisorDecision" id="regionalProgramSupervisorDecision"/>
                    </div>
                    <div class="row" id="regionalDirectorDecisionContainer" style="display:none">
                        <label for="regionalDirectorDecision" class="submit-required">Regional Director:</label>
                        <input type="text" name="regionalDirectorDecision" id="regionalDirectorDecision"/>
                    </div>
                    <div class="row" id="ddaDirectorDecisionContainer" style="display:none">
                        <label for="ddaDirectorDecision" class="submit-required">DDA Director:</label>
                        <input type="text" name="ddaDirectorDecision" id="ddaDirectorDecision"/>
                    </div>
                    <div class="row" id="denyReasonContainer" style="display: none">
                        <label for="denyReason" class="submit-required">Reason for Denial:</label>
                        <textarea name="denyReason" id="denyReason"></textarea>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Authorization Summary</legend>
                    <div class="header-info" id="authorizationInfo">
                        Pending final decision on authorization.
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

</div>

';?>
<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){
            if ("'.$regionalProgramSupervisorDecision.'" == "approve"){
                $("#regionalProgramSupervisorDecision").val("Approve");
            } else if ("'.$regionalProgramSupervisorDecision.'" == "deny"){
                $("#regionalProgramSupervisorDecision").val("Deny");
                $("#denyReasonContainer").show();
            }
            if ("'.$regionalDirectorDecision.'" == "approve"){
                $("#regionalDirectorDecision").val("Approve");
            } else if ("'.$regionalDirectorDecision.'" == "deny"){
                $("#regionalDirectorDecision").val("Deny");
                $("#denyReasonContainer").show();
            }
            if ("'.$ddaDirectorDecision.'" == "approve"){
                $("#ddaDirectorDecision").val("Approve");
            } else if ("'.$ddaDirectorDecision.'" == "deny"){
                $("#ddaDirectorDecision").val("Deny");
                $("#denyReasonContainer").show();
            }

            if ("'.$denyReason.'" != ""){
                $("#denyReason").val("'.$denyReason.'");
            }

            if ("'.$regionalProgramSupervisorDecision.'" == "approve" &&
                "'.$ddaEmergencySituationData->status.'" != "In Progress" ||
                "'.$regionalProgramSupervisorDecision.'" == "approve" &&
                "'.$ddaEmergencySituationData->status.'" == "Pending Regional Director Review" ) {
                $("#regionalDirectorDecisionContainer").show();
            }

            if ("'.$regionalDirectorDecision.'" == "approve" &&
                "'.$ddaEmergencySituationData->status.'" != "In Progress" &&
                "'.$ddaEmergencySituationData->status.'" != "Pending Regional Director Review" ||
                "'.$regionalDirectorDecision.'" == "approve" &&
                "'.$ddaEmergencySituationData->status.'" == "Pending DDA Director Review" ){
                $("#ddaDirectorDecisionContainer").show();
            }

            var authorizationMsg = "The individual’s emergency request for initiation of services for a maximum of 15 days is";
            if ( "'.$ddaEmergencySituationData->decision.'" == "Approved") {
                $("#authorizationInfo").html(authorizationMsg+" <b>Approved</b>.");
            } else if ( "'.$ddaEmergencySituationData->decision.'" != "" &&
                         "'.$ddaEmergencySituationData->decision.'" != "Approved")  {
                $("#authorizationInfo").html(authorizationMsg+" <b>Denied</b>.");
            }

            if ( "'.$ddaEmergencySituationData->decision.'" != "") {
                $("#decisionStatus").show();
            } else {
                $("#decisionStatus").hide();
            }
        });
    </script>
'?>