<?php

$WorkspaceHeader = '
<h3>DDA Emergency Situation<span>Status: '.$ddaEmergencySituationData->status.'</span></h3>
<div class="read-edit-toggle">
    <span>View</span>
</div>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/ddaapplication/summary').'\'">Back to List</button>
    </div>

    <div class="float-right">
        '.$approveDdaEmergencySituation.'
        '.$denyDdaEmergencySituation.'
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
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">General Information</legend>
                    <img src="http://placehold.it/800x300/cccccc?text=(Form+Placeholder)" style="width: 100%;">
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

        });
    </script>
'?>