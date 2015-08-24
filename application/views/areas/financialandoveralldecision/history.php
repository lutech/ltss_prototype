<?php $WorkspaceHeader = '
    <h3>Financial and Overall Decision</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
if (!isset($_COOKIE['locstatus'])) {
    setcookie('locstatus', 'In Progress');
};
$Body = '
<div class="panelbar-task-style">
    <div class="panel startExpanded">
        <div class="header">
            <h5>Financial Eligibility Determinations and Redeterminations</h5>
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
                                Last Modified By
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Program Type
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>Eligibility Worksheets</h5>
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
                                Last Modified By
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Program Type
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>Cost of Care Worksheets</h5>
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
                                Last Modified By
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Program Type
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>SRT Review</h5>
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
                                Last Modified By
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Program Type
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>MMIS Waiver Transaction</h5>
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
                                Last Modified By
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Program Type
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>Overall Decision</h5>
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
                                Last Modified By
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Program Type
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Active/Inactive
                            </th>
                            <th>
                                Acknowledged By
                            </th>
                            <th>
                                Acknowledged
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

