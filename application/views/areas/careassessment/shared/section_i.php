<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $WorkspaceHeader = '
    <h3>CARE Assessment - X. Other Useful Information</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

        </div>
    </div>
'?>

<?php $Body = '
    <div class="genericform-style">
        <h4>X. Other Useful Information</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">X. Other Useful Information</legend>
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">A. Is there other useful information about this patient that you want to add?</legend>
                <div class="row">
                    <label for="txtOtherUsefulInfo">A. Is there other useful information about this patient that you want to add?</label>
                    <textarea id="txtOtherUsefulInfo" class="comments-textarea"></textarea>
                </div>
            </fieldset>
        </fieldset>

'?>