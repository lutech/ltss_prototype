<?php $WorkspaceHeader = '
    <h3>Individual Plan</h3>
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
                    Program
                </th>
                <th>
                    PSS Type
                </th>
                <th>
                    IP Cost
                </th>
                <th>
                    Cost Neutrality
                </th>
                <th>
                    Effective Date
                </th>
                <th>
                    End Date
                </th>
                <th>
                   Status
                </th>
                <th>
                    Active/Inactive
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
                    DDA
                </td>
                <td>
                    Initial
                </td>
                <td>
                    $18,000.00
                </td>
                <td>
                    $20,000.00
                </td>
                <td>
                    07/20/2015
                </td>
                <td>

                </td>
                <td>
                    Approved
                </td>
                <td>
                    Active
                </td>
                <td>
                    <a href="'.base_url()."index.php/individualplan/summary".'">View</a>
                    <a href="#">Print</a>
                </td>
            </tr>
        </tbody>
    </table>
'?>

