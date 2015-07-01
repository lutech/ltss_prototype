<?php
$WorkspaceHeader = '
<h3>Activity Support Plan - Summary</h3>

<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/activitysupportplan/history').'\'">Back to List</button>
    </div>
    <div class="float-right">
    </div>
</div>
';?>

<?php

$Body = '
<style type="text/css">
    .h4 {
        font-size: 150%;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }
    .h4 small {
        font-size: 70%;
    }
    .h5 {
        font-size: 115%;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }
    .header-info hr {
        margin: 10px 0px;
    }
</style>
 <div class="genericform-style read-only">
    <h4>
        Activity Support Plans
    </h4>
    <div class="form-action TaskDetailLink">
    </div>
'. require "application/views/areas/providerportal/client/activitysupportplan/shared/_DetailsContent.php" .'
</div>

';

;?>

<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
'?>