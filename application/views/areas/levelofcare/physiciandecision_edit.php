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
        <button type="button" id="submitPhysicianDecision">Save</button>
    </div>

</div>
';?>
<?php $Body = '

<div class="genericform-style">
    <h4>Physician LOC Decision</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Decision Information</legend>
        <div class="row">
            <label for="physician-nflocdecision" class="complete-required">NF LOC Decision:</label>
            <select id="physician-nflocdecision">
                <option value="Approve">Approve</option>
                <option value="Deny">Deny</option>
            </select>
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

            $("#submitPhysicianDecision").on("click", function(){

                if ($("#physician-nflocdecision").val() == "Approve"){
                    document.cookie="physiciandecision=Approve";
                    document.cookie="confirmation=success";
                } else if  ($("#physician-nflocdecision").val() == "Deny"){
                    document.cookie="physiciandecision=Deny";
                    document.cookie="confirmation=success";
                };

                location.reload();
            })

        });
    </script>
'?>