<?php $WorkspaceHeader = '
    <h3>ATP</h3>
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
                    Effective Date
                </th>
                <th>
                    Expiration Date
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

                </td>
                <td>

                </td>
                <td>
                    '.((isset($_COOKIE["locstatus"])) ? $_COOKIE["locstatus"] : "In Progress" ).'
                </td>
                <td>
                    Inactive
                </td>
                <td>
                    <a href="'.base_url()."index.php/levelofcare/details".'">View</a>
                    <a href="#">Print</a>
                </td>
            </tr>
        </tbody>
    </table>
'?>

