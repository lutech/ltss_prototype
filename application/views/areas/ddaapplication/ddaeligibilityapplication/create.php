<?php

$WorkspaceHeader = '
<h3>DDA Eligibility Application</h3>
    <div aria-label="New" class="new-form">
        <span>New</span>
    </div>
<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/ddaapplication/summary').'\'">Cancel</button>
    </div>

    <div class="float-right">
        '.$saveDdaEligibilityApplication.'
    </div>

</div>
';?>
<?php

$Body = '

<div class="genericform-style">
    <h4>Applicant&apos;s Information</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Applicant&apos;s Information</legend>
        <img src="http://placehold.it/800x300/E6E6E6?text=(Form+Placeholder)" style="width: 100%;">
    </fieldset>
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