<?php
    require "shared/_ViewApplicantsInformationPartial.php";
    require "shared/_ViewApplicantsSelfAssessmentPartial.php";
    require "shared/_ViewDocumentationPartial.php";
?>

<?php

$WorkspaceHeader = '
<h3>DDA Eligibility Application - Summary <span>Status: '.$ddaEligibilityApplicationData->status.'</span></h3>
<div class="read-edit-toggle">
    <span>View</span>
</div>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/ddaapplication/summary').'\'">Back to List</button>
    </div>

    <div class="float-right">
        '.$requestInformationDdaEligibilityApplication.'
        '.$submitDdaEligibilityApplication.'
        '.$discardDdaEligibilityApplication.'
        <button id="expandCollapseAll" runat="server"></button>
    </div>

</div>
';?>
<?php

$Body = '

<div class="genericform-style read-only panelbar-formheader-style">
    <div class="panel">
        <div class="header">
            <h4>Applicant&apos;s Information</h4>
            <div class="TaskDetailLink">
                '.$editApplicantsInformation.'
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                '.$applicantsInformationContent.'
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Applicant&apos;s Self-Assessment</h4>
            <div class="TaskDetailLink">
                '.$editApplicantsSelfAssessment.'
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                '.$applicantsSelfAssessmentContent.'
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Documentation</h4>
            <div class="TaskDetailLink">
                '.$manageDocumentation.'
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                '.$documentationContent.'
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Workflow History</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-table noInit">
                    <thead>
                        <tr>
                            <th>
                                Application Status
                            </th>
                            <th>
                                Modified By
                            </th>
                            <th>
                                Date Modified
                            </th>
                            <th>
                                Comments
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center">No data available in table</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

';?>
<?php require_once "shared/_RequestInformation.php"?>
<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

            $("#requestInformationDdaEligibilityApplication").on("click", function(){
                ltss.overlay.show(
                    {
                    contentSelector: "#requestInformationDdaEligibilityApplicationDialog",
                    options: {
                            modal: true,
                            helpers: {
                            overlay: {
                                    opacity: 0.3
                                    }
                            }
                    }
                });

            });

        });
    </script>
'?>