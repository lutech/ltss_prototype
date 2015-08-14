<?php $WorkspaceHeader = '
    <h3>Authorization to Participate</h3>
    <div class="workspace-header-bar">
    </div>
'?>

<?php
if (!isset($_COOKIE['locstatus'])) {
    setcookie('locstatus', 'In Progress');
};
$Body = '
<div class="panelbar-task-style">
    <div class="panel">
        <div class="header">
            <h5>ATP Questionnanires</h5>
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
                                Program Type
                            </th>
                            <th>
                                ATP Type
                            </th>
                            <th>
                                Last Modified Date
                            </th>
                            <th>
                                Last Modified By
                            </th>
                            <th>
                                Date Alerted
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
</div>
'?>

