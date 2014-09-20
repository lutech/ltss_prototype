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
        <button type="button">Save</button>
    </div>

</div>
';?>
<?php $Body = '

<div class="genericform-style">
    <h4>Nurse LOC Decision</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Decision Information</legend>
        <div class="row">
            <label for="loctype" class="complete-required">LOC Type:</label>
            <input type="text" id="loctype"/>
        </div>
        <div class="row">
            <label for="nurse-nflocdecision" class="complete-required">NF LOC Decision:</label>
            <input type="text" id="nurse-nflocdecision"/>
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