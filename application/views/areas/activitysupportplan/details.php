<?php
$WorkspaceHeader = '
<h3>PSS - Activity Support Plan <span>Status: Pending Review</span></h3>

<div class="read-edit-toggle">
    <span>View</span>
</div>
<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/pss/summary').'\'">Back to List</button>
    </div>
    <div class="float-right">
        <button type="button" id="submitLoc">Request Clarification</button>
        <button type="button" id="submitLoc">Approve</button>
    </div>
</div>
';?>

<?php
ob_start();
require_once "application/views/areas/providerportal/client/activitysupportplan/shared/_DetailsContent.php";
$content = ob_get_clean();

$Body = $content;

;?>

<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
'?>