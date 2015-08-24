<?php

$WorkspaceHeader = '
<h3>DDA Emergency Situation</h3>
    <div aria-label="New" class="new-form">
        <span>New</span>
    </div>
<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/ddaapplication/summary').'\'">Cancel</button>
    </div>

    <div class="float-right">
        '.$saveDdaEmergencySituation.'
    </div>

</div>
';?>
<?php

$Body = '

<div class="genericform-style">
    <h4>Emergency Situation Form</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Emergency Situation Information</legend>
        <img src="http://placehold.it/800x300/E6E6E6?text=(Form+Placeholder)" style="width: 100%;">
    </fieldset>
</div>

';?>
<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
'?>