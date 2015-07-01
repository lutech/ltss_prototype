<?php $WorkspaceHeader = '
    <h3>Activity Support Plan</h3>
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
                    Type
                </th>
                <th>
                    Effective Start Date
                </th>
                <th>
                    Effective End Date
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
                    Recertification
                </td>
                <td>
                    06/01/2015
                </td>
                <td>
                    05/31/2016
                </td>
                <td>
                    Active
                </td>
                <td>
                    <a href="'.base_url()."index.php/activitysupportplan/summary".'">View</a>
                </td>
            </tr>
            <tr>
                <td>
                    Initial
                </td>
                <td>
                    06/01/2014
                </td>
                <td>
                    05/31/2015
                </td>
                <td>
                    Inactive
                </td>
                <td>
                    <a href="'.base_url()."index.php/activitysupportplan/summary".'">View</a>
                </td>
            </tr>
        </tbody>
    </table>
'?>

