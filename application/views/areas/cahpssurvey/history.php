<?php $WorkspaceHeader = '
    <h3>CAHPS Surveys</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
           <a href="#" class="button-style">Create New</a>
        </div>
    </div>
'?>
<?php $Body = '
    <table class="dataTable-list-style" data-afterrender="afterRenderDataTable" summary="Nurse Monitoring List">
        <thead>
            <tr>
                <th>
                    Version
                </th>
                <th>
                    Last Modified Date
                </th>
                <th>
                    Last Modified By
                </th>
                <th>
                    Submission Date
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
                    ECHO MCO Version 3.0
                </td>
                <td>
                    09/10/2014
                </td>
                <td>
                    Casey Manajer
                </td>
                <td>
                    Not Submitted
                </td>
                <td>
                    In-Progress
                </td>
                <td>
                    Inctive
                </td>
                <td>
                    <a href="'.base_url()."index.php/cahpssurvey/details".'">View</a>
                    <a href="#">Discard</a>
                </td>
            </tr>
        </tbody>
    </table>
'?>
<?php $Script = '
    <script>
        $(document).ready(function () {
            initDotDotDot("div.long-description", 60);
        });
    </script>
'?>