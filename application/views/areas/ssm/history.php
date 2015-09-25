<?php $WorkspaceHeader = '
    <h3>Plans of Services and Supports</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
if (!isset($_COOKIE['locstatus'])){
    setcookie('locstatus', 'In Progress');
};
$Body = '
<table class="dataTable-list-style" data-afterrender="afterRenderDataTable" summary="Nurse Monitoring List">
        <thead>
            <tr>
                <th>
                    Created By
                </th>
                <th>
                    Create Date
                </th>
                <th>
                    Date of Contact
                </th>
                <th>
                    Program Type
                </th>
                <th>
                    Type of Contact
                </th>
                <th>
                    Status
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Support Coordinator
                </td>
                <td>
                    09/21/15
                </td>
                <td>
                    09/21/2015
                </td>
                <td>
                    ID/DD
                </td>
                <td>
                    Monthly
                </td>
                <td>
                    In Progress
                </td>
                <td>
                    <a href="'.base_url()."index.php/ssm/summary".'">Summary</a>
                </td>
            </tr>

        </tbody>
    </table>
'?>

