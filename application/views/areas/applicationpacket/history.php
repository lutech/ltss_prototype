<?php $WorkspaceHeader = '
    <h3>Application Packet</h3>
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
                    Create Date
                </th>
                <th>
                    Created By
                </th>
                <th>
                    Program Type
                </th>
                <th>
                    Eligbility Type
                </th>
                <th>
                    Application Type
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
                    09/15/2014
                </td>
                <td>
                    Adam Samuels
                </td>
                <td>
                    DDA
                </td>
                <td>
                    N/A
                </td>
                <td>
                    Initial
                </td>
                <td>
                    In-Progress
                </td>
                <td>
                    <a href="'.base_url()."index.php/applicationpacket/summary".'">Summary</a>
                    <a href="#">Print</a>
                </td>
            </tr>
        </tbody>
    </table>
'?>

