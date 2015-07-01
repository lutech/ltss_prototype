<?php
$WorkspaceHeader = '
<h3>PSS - Activity Support Plan <span>Status: In Progress</span></h3>

<div class="read-edit-toggle">
    <span>View</span>
    <a href="'.base_url('/index.php/providerclient/activitysupportplanedit').'">Edit</a>
</div>
<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/providerclient/psstasks').'\'">Back to List</button>
    </div>
    <div class="float-right">
        <button type="button" id="submitLoc">Submit</button>
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