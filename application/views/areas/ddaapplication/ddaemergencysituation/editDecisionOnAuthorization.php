<?php

$WorkspaceHeader = '
<h3>DDA Emergency Situation Form - Decision on Authorization of Initiation of Services</h3>
<div class="read-edit-toggle">
    <a href= \''.base_url('/index.php/ddaemergencysituation/details').'\'">View</a>
    <span>Edit</span>
</div>
<div class="workspace-header-bar">

    <div class="float-left">
    </div>

    <div class="float-right">
        '.$saveDecisionOnAuthorization.'
    </div>

</div>
';?>
<?php
$Body = '

<div class="genericform-style">
    <h4>Decision on Authorization of Initiation of Services</h4>
    <form id="decisionAuthorizationForm" method="post" name="decisionAuthorizationForm" action="'.base_url().'index.php/ddaemergencysituation/decisiononauthorization/save'.'">
    <input class="ui-hide" type="submit" value="submit" name="submit" id="submitDecisionAuthorizationForm"/>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Decision</legend>
            <div class="row">
                <label for="regionalProgramSupervisorDecision" class="submit-required">Regional Office Program Supervisor:</label>
                <select name="regionalProgramSupervisorDecision" id="regionalProgramSupervisorDecision">
                    <option value=""></option>
                    <option value="approve">Approve</option>
                    <option value="deny">Deny</option>
                </select>
            </div>
            <div class="row" id="regionalDirectorDecisionContainer" style="display: none">
                <label for="regionalDirectorDecision" class="submit-required">Regional Director:</label>
                <select name="regionalDirectorDecision" id="regionalDirectorDecision">
                    <option value=""></option>
                    <option value="approve">Approve</option>
                    <option value="deny">Deny</option>
                </select>
            </div>
            <div class="row" id="ddaDeputySecretaryDecisionContainer" style="display: none">
                <label for="ddaDeputySecretaryDecision" class="submit-required">DDA Deputy Secretary:</label>
                <select name="ddaDeputySecretaryDecision" id="ddaDeputySecretaryDecision">
                    <option value=""></option>
                    <option value="approve">Approve</option>
                    <option value="deny">Deny</option>
                </select>
            </div>
            <div class="row" id="denyReasonContainer" style="display: none">
                <label for="denyReason" class="submit-required">Reason for Denial:</label>
                <textarea name="denyReason" id="denyReason"></textarea>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-one" style="display: none">
            <legend class="legend-header-one">Authorization Summary</legend>
            <div class="header-info">
                The individual’s emergency request for initiation of services for a maximum of 15 days is <b>Approved</b>.
            </div>
        </fieldset>
    </form>
</div>

';?>
<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){
            $("#regionalProgramSupervisorDecision, #regionalDirectorDecision, #ddaDeputySecretaryDecision").on("change", function(){
                if ($(this).val() == "deny") {
                    $("#denyReasonContainer").show()
                } else {
                    $("#denyReasonContainer").hide()
                }
            })

             if ("'.$regionalProgramSupervisorDecision.'" == "approve"){
                $("#regionalProgramSupervisorDecision option[value=\'approve\']").attr("selected","selected")
            } else if ("'.$regionalProgramSupervisorDecision.'" == "deny"){
                $("#regionalProgramSupervisorDecision option[value=\'deny\']").attr("selected","selected")
                $("#denyReasonContainer").show();
            }
            if ("'.$regionalDirectorDecision.'" == "approve"){
                $("#regionalDirectorDecision option[value=\'approve\']").attr("selected","selected")
            } else if ("'.$regionalDirectorDecision.'" == "deny"){
                $("#regionalDirectorDecision option[value=\'deny\']").attr("selected","selected")
                $("#denyReasonContainer").show();
            }
            if ("'.$ddaDeputySecretaryDecision.'" == "approve"){
                $("#ddaDeputySecretaryDecision option[value=\'approve\']").attr("selected","selected")
            } else if ("'.$ddaDeputySecretaryDecision.'" == "deny"){
                $("#ddaDeputySecretaryDecision option[value=\'deny\']").attr("selected","selected")
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
                $("#regionalProgramSupervisorDecision").attr("disabled", "disabled").addClass("readonly");
            }

            if ("'.$regionalDirectorDecision.'" == "approve" &&
                "'.$ddaEmergencySituationData->status.'" != "In Progress" &&
                "'.$ddaEmergencySituationData->status.'" != "Pending Regional Director Review" ||
                "'.$regionalDirectorDecision.'" == "approve" &&
                "'.$ddaEmergencySituationData->status.'" == "Pending DDA Director Review" ){
                $("#ddaDeputySecretaryDecisionContainer").show();
                $("#regionalDirectorDecision").attr("disabled", "disabled").addClass("readonly");
            }
        });
    </script>
'?>