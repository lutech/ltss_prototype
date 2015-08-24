<?php $WorkspaceHeader = '
    <h3>DDA Application</h3>
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
                        </tr>' : '';
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
                '.$addEligibilityAndPriorityDecisionForm.'
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Column 1
                            </th>
                            <th>
                                Column 2
                            </th>
                            <th>
                                Column 3
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>Emergency Situation</h5>
            <div class="TaskDetailLink">
                <a href="#">Add</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Column 1
                            </th>
                            <th>
                                Column 2
                            </th>
                            <th>
                                Column 3
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
'?>

