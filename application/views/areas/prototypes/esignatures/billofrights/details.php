<?php $WorkspaceHeader = '
<h3>Bill of Rights <span>Status: '.((isset($_COOKIE["billOfRightsStatus"])) ? $_COOKIE["billOfRightsStatus"] : "In Progress" ).'</span></h3>

<div class="read-edit-toggle">
    <span>View</span>
    <a href="#" id="billOfRightsEdit" onclick="window.location.href= \''.base_url('/index.php/prototypes/esignbillofrightsedit').'\'">Edit</a>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
    </div>
    <div class="float-right">
        <button type="button" id="submitBillOfRights">Submit</button>
        <button type="button" id="resetDemo" style="display: none">Reset Demo</button>
    </div>
</div>
';?>
<?php
$billofrightspresented ="";
$personsignature ="";
$casemanagersignature ="";
$personsESignature ="";
$casemanagerESignature ="";
$personsESignatureRequired ="false";
$casemanagerESignatureRequired ="false";
$billOfRightsStatus ="";
$successMessage ="false";
$personsSignatureDate="";
$caseManagerSignatureDate="";
if (isset($_COOKIE['billofrightspresented'])){
    $billofrightspresented = $_COOKIE['billofrightspresented'];
}
if (isset($_COOKIE['personsignature'])){
    $personsignature = $_COOKIE['personsignature'];
}
if (isset($_COOKIE['casemanagersignature'])){
    $casemanagersignature = $_COOKIE['casemanagersignature'];
}
if (isset($_COOKIE['personsESignature'])){
    $personsESignature = $_COOKIE['personsESignature'];
}
if (isset($_COOKIE['casemanagerESignature'])){
    $casemanagerESignature = $_COOKIE['casemanagerESignature'];
}
if (isset($_COOKIE['personsESignatureRequired'])){
    $personsESignatureRequired = $_COOKIE['personsESignatureRequired'];
}
if (isset($_COOKIE['casemanagerESignatureRequired'])){
    $casemanagerESignatureRequired = $_COOKIE['casemanagerESignatureRequired'];
}
if (isset($_COOKIE['billOfRightsStatus'])){
    $billOfRightsStatus = $_COOKIE['billOfRightsStatus'];
}
if (isset($_COOKIE['successMessage'])){
    $successMessage = $_COOKIE['successMessage'];
}
if (isset($_COOKIE['personsSignatureDate'])){
    $personsSignatureDate = $_COOKIE['personsSignatureDate'];
}
if (isset($_COOKIE['caseManagerSignatureDate'])){
    $caseManagerSignatureDate = $_COOKIE['caseManagerSignatureDate'];
}
$Body = '
<div class="genericform-style read-only">
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
            <input type="text" id="billOfRightsPresented" class="readonly" readonly="readonly"/>
        </div>
        <div class="row">
            <label for="personsSignature" class="complete-required">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Signature:</label>
            <input type="text" id="personsSignature" class="readonly" readonly="readonly"/>
            <span role="button" style="display: none" class="popup-info show-in-read" data-qtip="default" id="personsSignaturePopupInfo" title="Electronic signature will be captured upon submission." qtipHeader="e-Signature:"><span class="ui-hide">Use Enter Key to access more information</span></span>
            <div id="personSignatureInfo" class="signature">
                <div id="personsESignature" class="data-element"></div>
                <div class="signatureLine">
                </div>
            </div>
        </div>
        <div class="row">
            <label for="caseManagerSignature" class="complete-required">Case Manager&apos;s Signature:</label>
            <input type="text" id="caseManagerSignature" class="readonly" readonly="readonly"/>
            <span role="button" style="display: none" class="popup-info show-in-read" data-qtip="default" id="caseManagerSignaturePopupInfo" title="Electronic signature will be captured upon submission." qtipHeader="e-Signature:"><span class="ui-hide">Use Enter Key to access more information</span></span>
            <div id="caseManagerSignatureInfo" class="signature">
                <div id="casemanagerESignature" class="data-element"></div>
                <div class="signatureLine">
                </div>
            </div>
        </div>
    </fieldset>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        if ("'.$billofrightspresented.'" == "1"){
            $("#billOfRightsPresented").val("Yes").change();
        } else if ("'.$billofrightspresented.'" == "2"){
            $("#billOfRightsPresented").val("No").change();
        }

         if ("'.$personsignature.'" == "1"){
            $("#personsSignature").val("e-Signature (Person)");
            if ("'.$caseManagerSignatureDate.'" != "") {
                $("#personSignatureInfo .signatureLine").html("<span>Cicio Smith - '.$caseManagerSignatureDate.'</span>");
            }
             $("#personsSignaturePopupInfo").show();
        } else if ("'.$personsignature.'" == "2"){
            $("#personsSignature").val("e-Signature (Representative)");
            if ("'.$caseManagerSignatureDate.'" != "") {
                $("#personSignatureInfo .signatureLine").html("<span>Representative - '.$caseManagerSignatureDate.'</span>");
            }
             $("#personsSignaturePopupInfo").show();
        } else  if ("'.$personsignature.'" == "3"){
            $("#personsSignature").val("Signed, Paper Copy on File");
        } else  if ("'.$personsignature.'" == "4"){
            $("#personsSignature").val("Signed by Representative, Paper Copy on File");
        } else  if ("'.$personsignature.'" == "5"){
            $("#personsSignature").val("Not Signed");
        }

         if ("'.$casemanagersignature.'" == "1"){
            $("#caseManagerSignature").val("e-Signature");
            if ("'.$caseManagerSignatureDate.'" != "") {
                $("#caseManagerSignatureInfo .signatureLine").html("<span>Case Manager - '.$caseManagerSignatureDate.'</span>");
            }
             $("#caseManagerSignaturePopupInfo").show();
        } else if ("'.$casemanagersignature.'" == "2"){
            $("#caseManagerSignature").val("Signed, Paper Copy on File");
        } else if ("'.$casemanagersignature.'" == "3"){
            $("#caseManagerSignature").val("Not Signed");
        }

        if (localStorage.getItem("personsESignature")) {
            var personsESignature = localStorage.getItem("personsESignature");
        }
         if (localStorage.getItem("casemanagerESignature")) {
            var casemanagerESignature = localStorage.getItem("casemanagerESignature");
        }
         if (personsESignature != null){
            var datapair = JSON.parse(personsESignature);
                                var i = new Image();
                                i.src = "data:" + datapair[0] + "," + datapair[1];
             $(i).prependTo($("#personsESignature"));
             $("#personSignatureInfo").css("display", "inline-block");
            $("#personsSignature, #personsSignaturePopupInfo").hide();
        }

        if (casemanagerESignature != null){
            var datapair = JSON.parse(casemanagerESignature);
                                var i = new Image();
                                i.src = "data:" + datapair[0] + "," + datapair[1];
             $(i).prependTo($("#casemanagerESignature"));
             $("#caseManagerSignatureInfo").css("display", "inline-block");
            $("#caseManagerSignature, #caseManagerSignaturePopupInfo").hide();
        }
    });
</script>
';

require "application/views/shared/_signatureDialog.php";
?>
<?php $Script='
    <script type="text/javascript">
        var personsESignatureRequired = '.$personsESignatureRequired.';
        var casemanagerESignatureRequired = '.$casemanagerESignatureRequired.';
        function checkESignature() {
            if (personsESignatureRequired == true) {
                    $( "#signatureDialog" ).dialog({
                    modal: true,
                    height: 400,
                    width: 800,
                    resizable: false,
                    draggable : false,
                    fluid: true,
                    buttons: {

                        "Cancel": function() {
                            $("#signaturePanel").jSignature("reset");
                            localStorage.setItem("personsESignature","");
                            localStorage.setItem("casemanagerESignature","");
                           if ($("#caseManagerSignature").val() == "1") {
                                document.cookie="casemanagerESignatureRequired = true ";
                           }
                            $(this).dialog("close");
                        },
                        "Clear Signature" : function() {
                            $("#signaturePanel").jSignature("reset");
                        },
                        "Continue": function(){
                                var datapair = $("#signaturePanel").jSignature("getData", "svgbase64");
                                var signatureData = JSON.stringify(datapair);
                                var i = new Image();
                                var newDate = new Date(),
                                    date =  (newDate.getMonth() + 1).padLeft() + "/" + newDate.getDate().padLeft() + "/" + newDate.getFullYear();
                                i.src = "data:" + datapair[0] + "," + datapair[1];
                                localStorage.setItem("personsESignature", signatureData);

                                 if ("'.$personsignature.'" == "1"){
                                    document.cookie="personsSignatureDate="+ date +"";
                                    $("#personSignatureInfo .signatureLine").html("<span>Cicio Smith - " + date + "</span>");
                                } else if ("'.$personsignature.'" == "2"){
                                    $("#personSignatureInfo .signatureLine").html("<span>Representative - " + date + "</span>");
                                }

//                                $("#personsSignature, #personsSignaturePopupInfo").hide();
//                                $(i).prependTo($("#personsESignature")); // append the image (SVG) to DOM.
//                                $("#personSignatureInfo").css("display", "inline-block");
                                $(this).dialog("close");
                                $("#signaturePanel").jSignature("reset");
                                personsESignatureRequired = false;
                                checkESignature();
                            }
                    },
                    open: function(){
                     if ("'.$casemanagersignature.'" == "1" && ("'.$personsignature.'" == "1" || "'.$personsignature.'" == "2")){
                        $(".ui-dialog-title").html("Bill of Rights - Signature (1 of 2)");
                     } else if  ("'.$casemanagersignature.'" != "1" && ("'.$personsignature.'" == "1" || "'.$personsignature.'" == "2")) {
                        $(".ui-dialog-title").html("Bill of Rights - Signature (1 of 1)");
                     }
                        $("#signatureHeader").html("'.$_COOKIE["CommonLabel_Clients_Ownership"].' Signature:")
                        $(window).resize();
                    }
                });
            } else if (casemanagerESignatureRequired == true) {
                    $( "#signatureDialog" ).dialog({
                    modal: true,
                    height: 400,
                    width: 800,
                    resizable: false,
                    draggable : false,
                    fluid: true,
                    buttons: {

                        "Cancel": function() {
                            $("#signaturePanel").jSignature("reset");
                            localStorage.setItem("personsESignature","");
                            localStorage.setItem("casemanagerESignature","");
                           if ("'.$personsignature.'" == "1" || "'.$personsignature.'" == "2") {
                                document.cookie="personsESignatureRequired = true ";
                            }
                            $(this).dialog("close");
                        },
                        "Clear Signature" : function() {
                            $("#signaturePanel").jSignature("reset");
                        },
                        "Continue": function(){
                                var datapair = $("#signaturePanel").jSignature("getData", "svgbase64");
                                var signatureData = JSON.stringify(datapair);
                                var i = new Image();
                                var newDate = new Date(),
                                    date =  (newDate.getMonth() + 1).padLeft() + "/" + newDate.getDate().padLeft() + "/" + newDate.getFullYear();
                                i.src = "data:" + datapair[0] + "," + datapair[1];
                                localStorage.setItem("casemanagerESignature", signatureData);

                                 if ("'.$casemanagersignature.'" == "1"){
                                    document.cookie="caseManagerSignatureDate="+ date +"";
                                    $("#caseManagerSignatureInfo .signatureLine").html("<span>Case Manager - " + date + "</span>");
                                }

                                //$("#caseManagerSignature, #caseManagerSignaturePopupInfo").hide();
                                //$(i).prependTo($("#casemanagerESignature"));
                                //$("#caseManagerSignatureInfo").css("display", "inline-block");
                                $(this).dialog("close");
                                $("#signaturePanel").jSignature("reset");
                                casemanagerESignatureRequired = false;
                                checkESignature();
                            }
                    },
                    open: function(){
                        $("#signatureHeader").html("Case Manager&apos;s Signature:")
                        $(window).resize();
                        if ("'.$casemanagersignature.'" == "1" && ("'.$personsignature.'" == "1" || "'.$personsignature.'" == "2")){
                            $(".ui-dialog-title").html("Bill of Rights - Signature (2 of 2)");
                         } else if  ("'.$casemanagersignature.'" == "1" && "'.$personsignature.'" != "1" && "'.$personsignature.'" != "2") {
                            $(".ui-dialog-title").html("Bill of Rights - Signature (1 of 1)");
                         }
                    }
                });
            } else {
                document.cookie="billOfRightsStatus=Submitted";
                 document.cookie="successMessage=true";
                location.reload();

            }
        }


        function submitBillOfRights() {
             if ($("#billOfRightsPresented").val() == "" || $("#personsSignature").val() == "" || $("#caseManagerSignature").val() == "") {
                showErrorMessage("Required fields missing.");
            } else {
             checkESignature();
            }
        }
        $(document).ready(function(){

            $("#signaturePanel").jSignature();

            $("#submitBillOfRights").on("click", function(){
               submitBillOfRights();
            });

             $("#resetDemo").on("click", function(){
                localStorage.setItem("personsESignature", "");
                localStorage.setItem("casemanagerESignature", "");
               document.cookie="billOfRightsStatus=In Progress";
               document.cookie="billofrightspresented=";
               document.cookie="personsignature=";
               document.cookie="casemanagersignature=";
               document.cookie="personsESignature=";
               document.cookie="casemanagerESignature=";
               document.cookie="personsESignatureRequired=false";
               document.cookie="casemanagerESignatureRequired=false";
               document.cookie="successMessage=false";
                location.reload();
            });

            if ("'.$billOfRightsStatus.'" == "Submitted") {
                $("#submitBillOfRights, #billOfRightsEdit").hide();
                $("#resetDemo").show();
            }
             if ("'.$successMessage.'" == "true") {
               document.cookie="successMessage=false";
                showSuccessMessage("Bill of Rights has been submitted.");
            }

        });
    </script>
'?>