<?php $WorkspaceHeader = '
    <h3>Letters</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="expandCollapseAll" runat="server"></button>
        </div>
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
            <h5>DDA Letters</h5>
            <div class="TaskDetailLink">
                <a href="#">Add</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable rowgrouping">
                    <thead>
                        <tr>
                            <th>
                                Letter Name
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Letter Date
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>DDA Eligibility</td>
                                <td>Submitted</td>
                                <td>08/01/2015</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>Emergency Placement Denial</td>
                                <td>Submitted</td>
                                <td>08/01/2015</td>
                                <td><a href="#">View</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>Discard History</h5>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable rowgrouping">
                    <thead>
                        <tr>
                            <th>
                                Letter Name
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Letter Date
                            </th>
                            <th>
                                Discard Date
                            </th>
                            <th>
                                Discarded By
                            </th>
                            <th>
                                Reason
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

