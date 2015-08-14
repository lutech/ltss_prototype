<?php $WorkspaceHeader = '
    <h3>DDA Application</h3>
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
            <h5>DDA Application</h5>
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
    <div class="panel">
        <div class="header">
            <h5>Eligibility and Priority Decision Form</h5>
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

