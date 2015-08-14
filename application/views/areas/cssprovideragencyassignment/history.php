<?php $WorkspaceHeader = '
    <h3>CSS Provider Agency Assignment</h3>
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
                    CSS Provider Agency Selection
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
        </tbody>
    </table>
'?>

