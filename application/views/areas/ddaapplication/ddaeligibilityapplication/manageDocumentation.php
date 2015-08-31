<?php
require "shared/_ManageDocumentationPartial.php";
?>

<?php
$WorkspaceHeader = '
<h3>DDA Eligibility Application - Documentation</h3>
<div class="read-edit-toggle">
    <span>Manage</span>
</div>
<div class="workspace-header-bar">
    <div class="float-left">
    </div>
    <div class="float-right">
    <a href= \''.base_url('/index.php/ddaeligibilityapplication/details').'\'">Done</a>
    </div>

</div>
';?>
<?php

$Body = '

<div class="genericform-style">
    <h4>Documentation</h4>
   '.$documentationContent.'
</div>

';?>
<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){
            $("#requestClarification").on("click", function(){
                $( "#clarificationDialog" ).dialog({
                    modal: true,
                    height: "auto",
                    width: "auto",
                    maxHeight: 600,
                    maxWidth: 800,
                    resizable: false,
                    draggable : false,
                    fluid: true,
                    buttons: {
                        "Submit": function(){
                                if ("'.$role.'" == "nurse"){
                                            document.cookie="locstatus=Clarification Requested For Assessor";
                                            document.cookie="confirmation=Clarification Requested";
                                } else if ("'.$role.'" == "physician"){
                                    document.cookie="locstatus=Clarification Requested For Nurse";
                                    document.cookie="confirmation=Clarification Requested";
                                };

                                location.reload();
                            },
                        "Cancel": function() {
                            $(this).dialog("close");
                        }
                    }
                });
            });


});
    </script>
'?>