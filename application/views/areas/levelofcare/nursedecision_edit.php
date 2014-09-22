<?php $WorkspaceHeader = '
<h3>Level of Care - Summary</h3>
<div class="read-edit-toggle">
    <a href="#" onclick="window.location.href= \''.base_url('/index.php/levelofcare/details').'\'">View</a>
    <span>Edit</span>
</div>
<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/levelofcare/details').'\'">Back to Summary</button>
    </div>

    <div class="float-right">
        <button type="button" id="submitNurseDecision">Save</button>
    </div>

</div>
';?>
<?php $Body = '

<div class="genericform-style">
    <h4>Nurse LOC Decision</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Decision Information</legend>
        <div class="row">
            <label for="nurseloctype" class="complete-required">LOC Type:</label>
            <input type="text" id="nurseloctype"/>

        </div>
        <div class="row">
            <label for="nurse-nflocdecision" class="complete-required">NF LOC Decision:</label>
             <select id="nurse-nflocdecision">
                <option value="Approve">Approve</option>
                <option value="Refer to Physician">Refer to Physician</option>
            </select>
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

';?>
<?php

$confirmation ="";
if (isset($_COOKIE['confirmation'])){
    $confirmation = $_COOKIE['confirmation'];
}
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

            if ("'.$confirmation.'" == "success"){
                showSuccessMessage("Document has been saved.");
                document.cookie="confirmation=";
            }

            $("#submitNurseDecision").on("click", function(){

                if ($("#nurse-nflocdecision").val() == "Approve"){
                    document.cookie="nursedecision=Approve";
                    document.cookie="confirmation=success";
                } else if  ($("#nurse-nflocdecision").val() == "Refer to Physician"){
                    document.cookie="nursedecision=Refer to Physician";
                    document.cookie="referredToPhysician=true";
                    document.cookie="confirmation=success";
                };

                location.reload();
            })

        });
    </script>
'?>