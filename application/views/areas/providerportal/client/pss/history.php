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
                    Create Date
                </th>
                <th>
                    Program
                </th>
                <th>
                    PSS Type
                </th>
                <th>
                    Effective Date
                </th>
                <th>
                    End Date
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
                    09/23/2015
                </td>
                <td>
                    ID/DD
                </td>
                <td>
                    Recertification
                </td>
                <td>
                    04/25/2015
                </td>
                <td>
                    05/15/2016
                </td>
                <td>
                    Active
                </td>
                <td>
                    <a href="'.base_url()."index.php/providerclient/psssummary".'">Summary</a>
                    <a href="'.base_url()."index.php/providerclient/psstasks".'">Implementation</a>
                </td>
            </tr>
            <tr>
                <td>
                    09/28/2014
                </td>
                <td>
                    ID/DD
                </td>
                <td>
                    Initial
                </td>
                <td>
                    05/15/2014
                </td>
                <td>
                    04/24/2015
                </td>
                <td>
                    Inactive
                </td>
                <td>
                    <a href="#">Summary</a>

                </td>
            </tr>
        </tbody>
    </table>
'?>

