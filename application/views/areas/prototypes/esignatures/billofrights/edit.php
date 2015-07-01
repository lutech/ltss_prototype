<?php $WorkspaceHeader = '
<h3>Bill of Rights <span>Status: '.((isset($_COOKIE["locstatus"])) ? $_COOKIE["locstatus"] : "In Progress" ).'</span></h3>

<div class="read-edit-toggle">
    <a href="#" onclick="window.location.href= \''.base_url('/index.php/prototypes/esignbillofrightsdetails').'\'">View</a>
    <span>Edit</span>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
    </div>
    <div class="float-right">
        <button type="button" id="saveBillOfRights">Save</button>
    </div>
</div>
';?>
<?php $Body = '
<div class="genericform-style">
 <h4>Bill of Rights</h4>
        <style>
    ol.bill, ol.bill li
    {
        list-style-type: decimal;
        margin-left: 20px;
        padding: 0;
    }
</style>
<h5 style="text-align: center; display: block;">Mississippi Division of Medicaid<br>
    Home and Community-Based Services Waiver<br>
    Bill of Rights
</h5>
<div class="fieldset-container-one" style="border-top: none;">
    <p class="row">As a participant in the Mississippi Medicaid Home and Community-Based Services Waiver, I have been informed verbally and in writing of the following participant/provider rights:</p>
    <p class="row">The participant:</p>
    <ol class="bill">
        <li>Shall participate in the development, revision and termination of the plan of services and supports, be informed of all services and be informed of  when and how services will be provided;</li>
        <li>Will be given the name, address and telephone number of designated case manager to ask questions, express complaints, report absence of workers, and seek aid in emergencies; (business cards or any other type of communication should be available);</li>
        <li>Will be given the name, address, telephone number, and function of any person or agency providing care or services to the participant;</li>
        <li>Has the right to refuse any portion of the plan of services and  supports; however, refusal of services may cause termination of waiver services;</li>
        <li>Will be instructed that he/she can exercise his/her rights to voice complaints and to seek protection from mental, physical and financial abuse, neglect and mistreatment;</li>
        <li>Will be informed both verbally and in writing of the agency’s complaint procedures;</li>
        <li>Will be informed of his/her right to review his/her case record;</li>
        <li>Will be discharged from the program according to the discharge procedures stated in the Administrative Codes;</li>
        <li>Will be shown proper and current identification by all service providers (name badges);</li>
        <li>Will have his/her wishes respected regarding their residence environment and possessions;</li>
        <li>Will be entitled to expect persons coming into their residence to exhibit appropriate standards of behavior;</li>
        <li>Will be assured of confidentiality regarding his/her case records;</li>
        <li>Will be treated with respect, consideration, and full recognition of his/her dignity and individuality;</li>
        <li>Will have the right to recommend changes in services or policy to the program staff, case management agency staff, State Office staff and the Division of Medicaid; and</li>
        <li>Will be given the freedom of choice of service providers.</li>
    </ol>
    <p class="row">The Provider:</p>
    <ol class="bill">
        <li>Will be informed of any complaints from the participant and/or family and be given the opportunity to correct any problems;</li>
        <li>Will be treated with respect, consideration and dignity;</li>
        <li>Will be entitled to expect the participant and any persons in the participant&apos;s residence to exhibit appropriate standards of behavior and conduct;</li>
        <li>Has the right to discontinue services if the participant or any persons in the participant&apos;s residence threatens, endangers, or makes inappropriate advances towards the servicing providers; and</li>
        <li>Has the right to discontinue services if the participant&apos;s environment is unsafe for the servicing providers.</li>
    </ol>
</div>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Signature:</legend>
        <div class="row">
            <label for="billOfRightsPresented" class="complete-required">Bill of Rights Presented?</label>
            <select id="billOfRightsPresented" required="required" class="required">
            <option value="0"></option>
            <option value="1">Yes</option>
            <option value="2">No</option>
            </select>
        </div>
        <div class="row">
            <label for="personsSignature" class="complete-required">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Signature:</label>
            <div class="data-element">
                <select id="personsSignature" required="required" class="required">
                <option value="0"></option>
                <option value="1">e-Signature (Person)</option>
                <option value="2">e-Signature (Representative)</option>
                <option value="3">Signed, Paper Copy on File</option>
                <option value="4">Signed by Representative, Paper Copy on File</option>
                <option value="5">Not Signed</option>
                </select>
                <span role="button" style="display: none" class="popup-info" data-qtip="default" id="personsSignaturePopupInfo" title="Electronic signature will be captured upon submission." qtipHeader="e-Signature:"><span class="ui-hide">Use Enter Key to access more information</span></span>
            </div>
        </div>
        <div class="row">
            <label for="caseManagerSignature" class="complete-required">Case Manager&apos;s Signature:</label>
            <select id="caseManagerSignature" required="required" class="required">
            <option value="0"></option>
            <option value="1">e-Signature</option>
            <option value="2">Signed, Paper Copy on File</option>
            <option value="3">Not Signed</option>
            </select>
            <span role="button" style="display: none" class="popup-info" data-qtip="default" id="caseManagerSignaturePopupInfo" title="Electronic signature will be captured upon submission." qtipHeader="e-Signature:"><span class="ui-hide">Use Enter Key to access more information</span></span>
        </div>
    </fieldset>
    </div>
</div>

';?>
<?php

$billofrightspresented ="";
$personsignature ="";
$casemanagersignature ="";
if (isset($_COOKIE['billofrightspresented'])){
    $billofrightspresented = $_COOKIE['billofrightspresented'];
}
if (isset($_COOKIE['personsignature'])){
    $personsignature = $_COOKIE['personsignature'];
}
if (isset($_COOKIE['casemanagersignature'])){
    $casemanagersignature = $_COOKIE['casemanagersignature'];
}
$Script='
<script type="text/javascript">
    $(document).ready(function(){

        if ("'.$billofrightspresented.'" != ""){
            $("#billOfRightsPresented").val("'.$billofrightspresented.'").change();
        }
         if ("'.$personsignature.'" != ""){
            $("#personsSignature").val("'.$personsignature.'").change();
        }
         if ("'.$casemanagersignature.'" != ""){
            $("#caseManagerSignature").val("'.$casemanagersignature.'").change();
        }
        $("#saveBillOfRights").on("click", function(){
            if ($("#billOfRightsPresented").val() != "") {
                var billofrightspresented = $("#billOfRightsPresented").val();
                document.cookie="billofrightspresented= "+ billofrightspresented +" ";
            }
            if ($("#personsSignature").val() != "") {
                var personsignature = $("#personsSignature").val();
                document.cookie="personsignature= "+ personsignature +" ";
                if ($("#personsSignature").val() == "1" || $("#personsSignature").val() == "2") {
                    document.cookie="personsESignatureRequired = true ";
                } else {
                    document.cookie="personsESignatureRequired = false ";
                }
            }
            if ($("#caseManagerSignature").val() != "") {
                var casemanagersignature = $("#caseManagerSignature").val();
                document.cookie="casemanagersignature= "+ casemanagersignature +" ";
                 if ($("#caseManagerSignature").val() == "1") {
                    document.cookie="casemanagerESignatureRequired = true ";
                } else {
                    document.cookie="casemanagerESignatureRequired = false ";
                }
            }
            window.location.href= \''.base_url('/index.php/prototypes/esignbillofrightsdetails').'\'
        })

            $("#personsSignature").on("change", function() {
            var target = "#personsSignaturePopupInfo";
                if ($("#personsSignature").val() == "1" || $("#personsSignature").val() == "2") {
                    $(target).show();
                    setTimeout(function(){
                        $("#personsSignaturePopupInfo").qtip("show", true);
                    },200);
                    setTimeout(function(){
                        $("#personsSignaturePopupInfo").qtip("hide", true);
                    },2500);
                } else {
                    $(target).hide();
                }
            }).change();

            $("#caseManagerSignature").on("change", function() {
            var target = "#caseManagerSignaturePopupInfo";
                if ($("#caseManagerSignature").val() == "1") {
                    $(target).show();
                    setTimeout(function(){
                        $("#caseManagerSignaturePopupInfo").qtip("show", true);
                    },200);
                    setTimeout(function(){
                        $("#caseManagerSignaturePopupInfo").qtip("hide", true);
                    },2500);
                } else {
                    $(target).hide();
                }
            }).change();

    });
</script>
'?>