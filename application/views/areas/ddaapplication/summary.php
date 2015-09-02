<?php $WorkspaceHeader = '
    <h3>DDA Eligibility</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php

$ddaEligibilityApplicationRow = $ddaEligibilityApplicationData->status != '' ? '
    <tr>
        <td>'.$ddaEligibilityApplicationData->date->lastmodified.'</td>
        <td>'.$ddaEligibilityApplicationData->lastmodifiedby.'</td>
        <td>Responsible Region Staff Person</td>
        <td>CCS Coordinator</td>
        <td>'.$ddaEligibilityApplicationData->date->application.'</td>
        <td>'.$ddaEligibilityApplicationData->date->completion.'</td>
        <td>'.$ddaEligibilityApplicationData->status.'</td>
        <td>'.$ddaEligibilityApplicationData->date->currentstatusattained.'</td>
        <td>'.$ddaEligibilityApplicationData->active.'</td>
        <td>
            '.$viewDdaEligibilityApplication.'
            '.$reviseDdaEligibilityApplication.'
            <a href="#">Print</a>
        </td>
    </tr>
' : '';

$ddaEligibilityAndPriorityDecisionRow = $ddaEligibilityApplicationData->status == 'Complete' ? '
    <tr>
        <td>
            '.$ddaEligibilityApplicationData->date->completion.'
        </td>
        <td>
            '.$ddaEligibilityApplicationData->lastmodifiedby.'
        </td>
        <td>
            Comprehensive Assessment
        </td>
        <td>
            In Progress
        </td>
        <td>
            <a href="#">View</a>
        </td>
    </tr>
' : '';

$ddaEmergencySituationRow = $ddaEmergencySituationData->status != '' ? '
    <tr>
        <td>'.$ddaEmergencySituationData->date->created.'</td>
        <td>'.$ddaEmergencySituationData->date->lastmodified.'</td>
        <td>'.$ddaEmergencySituationData->lastmodifiedby.'</td>
        <td>'.$ddaEmergencySituationData->decision.'</td>
        <td>'.$ddaEmergencySituationData->status.'</td>
        <td>'.$ddaEmergencySituationData->active.'</td>
        <td>
            '.$viewDdaEmergencySituation.'
        </td>
    </tr>
' : '';

$Body = '
<div class="panelbar-task-style">
    <div class="panel">
        <div class="header">
            <h5>DDA Eligibility Application</h5>
            <div class="TaskDetailLink">
                '.$addDdaEligibilityApplication.'
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Last Modified By
                            </th>
                            <th>
                                Assigned Regional Eligibility Staff
                            </th>
                            <th>
                                Assigned CCS Coordinator
                            </th>
                            <th>
                                Application Date
                            </th>
                            <th>
                                Application Completion Date
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Date Current Status Attained
                            </th>
                            <th>
                                Active/Inactive
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    '.$ddaEligibilityApplicationRow.'
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>Eligibility and Priority Decision Form</h5>
            <div class="TaskDetailLink">

            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Create Date
                            </th>
                            <th>
                                Created By
                            </th>
                            <th>
                               Type
                            </th>
                            <th>
                               Status
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        '.$ddaEligibilityAndPriorityDecisionRow.'
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>Emergency Situation Form</h5>
            <div class="TaskDetailLink">
                '.$createDdaEmergencySituation.'
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Create Date
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Last Modified By
                            </th>
                            <th>
                                Decision
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Active/Inactive
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        '.$ddaEmergencySituationRow.'
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
'?>

