<?php $WorkspaceHeader = '
    <h3>CARE Assessments</h3>
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
                    08/11/2014
                </td>
                <td>
                    Casey Manajer
                </td>
                <td>
                    08/12/2014
                </td>
                <td>
                    Submitted
                </td>
                <td>
                    Active
                </td>
                <td>
                    <a href="'.base_url()."index.php/careassessment/details".'">View</a>
                    <a href="#">Discard</a>
                </td>
            </tr>
        </tbody>
    </table>
'?>
<?php $Script= '
    <script>
        $(document).ready(function () {
            initDotDotDot("div.long-description", 60);
        });
    </script>
'?>