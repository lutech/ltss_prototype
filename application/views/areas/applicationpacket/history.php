<?php $WorkspaceHeader = '
    <h3>Application Packet</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            '.$createNewDdaApplicationPacket.'
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
<table class="dataTable-list-style">
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