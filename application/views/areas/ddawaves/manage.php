<?php

$WorkspaceHeader = '
<h3>DDA Wave - Wave Management <span>Wave Type: Crisis Funding</span><span>Fiscal Year: 2015</span></h3>
<div class="read-edit-toggle">
    <span>Manage</span>
</div>
<div class="workspace-header-bar">

    <div class="float-left">
    </div>

    <div class="float-right">
        <input type="button" id="returnToWaitingList" value="Return to Waiting List" disabled="disabled"/>
    </div>

</div>
';?>

<?php
$Body = '

<div class="LeftNav-Fixed-Workarea" style="top: 0;">
<table class="dataTable-first-column-checkbox-filter">
    <thead>
        <tr>
            <th class="checkbox">
                <label for="checkall" class="ui-hide">Check All</label>
                <input type="checkbox" id="checkall" title="Check/Uncheck All"/>
            </th>
            <th>Client ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Jurisdiction</th>
            <th>Responsible Region</th>
            <th>Eligibility Type</th>
            <th>Assigned CSS Provider</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <label for="check1" class="ui-hide">Check All</label>
                <input type="checkbox" id="check1" title="Check/Uncheck"/>
            </td>
            <td>1234567890</td>
            <td>Cicio</td>
            <td>Smith</td>
            <td>01/01/1950</td>
            <td>65</td>
            <td>Baltimore</td>
            <td>Responsible Region of Baltimore</td>
            <td></td>
            <td>CCS Provider Agency</td>
            <td>Pending</td>
        </tr>
    </tbody>
</table>
</div>
';

require "application/views/areas/waitinglist/shared/_WaveDetailsModal.php";
require "application/views/areas/waitinglist/shared/_ReturnToWaitingListModal.php";
?>

<?php
$Script = '
    <script type="text/javascript">
        function toggleDisabled(element, bool) {
            var target = element,
                isDisabled = bool;
                if (isDisabled == true) {
                    $(target).attr("disabled", "disabled")
                } else {
                    $(target).removeAttr("disabled")
                }
        }


        function disableButtons(){
            toggleDisabled("#returnToWaitingList", true);
        }
        function enableButtons(){
            toggleDisabled("#returnToWaitingList", false);
        }

        function closeDialog() {
            ltss.overlay.close();
        }

        $(document).ready(function(){
            $("[type=checkbox]").on("click", function(){
            var checkedCount = $(this).parents(".dataTable-summarylist-style-footer-filter").first().find("input:checked").length;

                if ( checkedCount > 0) {
                    enableButtons();
                } else {
                    disableButtons();
                }
            })

             $("#checkall").on("click", function(){
                var allCheckBoxes = $(this).parents(".dataTable-summarylist-style-footer-filter").first().find("[type=checkbox]");
                if ( $(this).attr("checked") == "checked") {
                    $(allCheckBoxes).attr("checked", "checked");
                    enableButtons();
                } else {
                    $(allCheckBoxes).removeAttr("checked");
                    disableButtons();
                }
             });

            $("#viewWaveDetails").on("click", function(){
                ltss.overlay.show({
                    contentSelector: "#waveDetailsModal",
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

            $("#returnToWaitingList").on("click", function(){
                ltss.overlay.show({
                    contentSelector: "#returnToWaitingListModal",
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