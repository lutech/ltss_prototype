<?php $WorkspaceHeader = '
    <h3>Applications</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

        </div>
    </div>
'?>

<?php


$ddaApplicationPacketRow = $ddaApplicationPacketData->status != '' ? '
    <tr>
        <td>
            '.$ddaApplicationPacketData->date->created.'
        </td>
        <td>
            '.$ddaApplicationPacketData->createdby.'
        </td>
        <td>
            '.$ddaApplicationPacketData->programtype.'
        </td>
        <td>
            Yes
        </td>
        <td>
            DD
        </td>
        <td>
            '.$ddaApplicationPacketData->status.'
        </td>
        <td>
            '.$ddaApplicationPacketData->date->completed.'
        </td>
        <td>
            '.$ddaApplicationPacketData->active.'
        </td>
        <td>
            <a href="'.base_url()."index.php/applicationpacket/summary".'">Summary</a>
            <a href="#">Print</a>
        </td>
    </tr>
' : '';

$Body = '
<div class="panelbar-task-style">
    <div class="panel startExpanded">
        <div class="header">
            <h5>Freedom of Choice Forms</h5>
            <div class="task-action TaskDetailLink">
                <a class="TaskDetailLink" formname="FreedomOfChoice" href="#" role="tooltip" title="Add Freedom of Choice">Add</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>Last Modified Date</th>
                            <th>Last Modified By</th>
                            <th>Status</th>
                            <th>Signature Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="panel startExpanded">
        <div class="header">
            <h5>Application</h5>
            <div class="task-action TaskDetailLink">
                <a class="TaskDetailLink" href="#" role="tooltip" title="Add Freedom of Choice">Add</a><a class="TaskDetailLink" href="#" role="tooltip" title="Documentation Reminder">Documentation Reminder</a>

            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>Program Type</th>
                            <th>Last Modified Date</th>
                            <th>Last Modified By</th>
                            <th>Date Stamp on Application of Receiving Agency</th>
                            <th>Application Submit Date</th>
                            <th>Status</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="panel startExpanded">
        <div class="header">
            <h5>DDA Application Packet</h5>
            <div class="task-action TaskDetailLink">
                '.$createNewDdaApplicationPacket.'
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">

                <table class="inline-dataTable">
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
                    Level of Care Certified?
                </th>
                <th>
                    Category of Eligibility
                </th>
                <th>
                    Status
                </th>
                <th>
                    Review Completion Date
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
                    '.$ddaApplicationPacketRow.'
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
'?>


<?php require_once "shared/_CreateNew.php"?>

<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

            $("#createNewDdaApplicationPacket").on("click", function(){
                ltss.overlay.show(
                    {
                    contentSelector: "#createNewDdaApplicationPacketDialog",
                    options: {
                            modal: true,
                            helpers: {
                            overlay: {
                                    opacity: 0.3
                                    }
                            }
                    }
                });

            });

        });
    </script>
'?>