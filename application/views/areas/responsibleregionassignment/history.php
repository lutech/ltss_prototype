<?php $WorkspaceHeader = '
    <h3>Responsible Region Assignment</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button>New Assignment</button>
        </div>
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
                    Create Date
                </th>
                <th>
                    Initiated By
                </th>
                <th>
                    Effective Date
                </th>
                <th>
                    Expiration Date
                </th>
                <th>
                    Responsible Region Selection
                </th>
                <th>
                   Selection Status
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>07/01/2015</td>
                <td>Regional Staff</td>
                <td>07/01/2015</td>
                <td></td>
                <td>Responsible Region of Baltimore</td>
                <td>Active</td>
                <td><a href="#">View</a></td>
            </tr>
        </tbody>
    </table>
'?>

