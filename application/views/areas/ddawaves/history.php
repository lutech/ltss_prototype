<?php

$WorkspaceHeader = '
<h3>DDA Waves</h3>
<div class="workspace-header-bar">

    <div class="float-left">
    </div>

    <div class="float-right">
    </div>

</div>
';?>

<?php
$Body = '

<div class="js-workarea-panel">
    <fieldset class="fieldset-container-searcharea">
        <legend>QCR Letters</legend>
         <div>
                <div class="row stacked">
                    <label class="filter-required">Wave Type:</label>
                    <select class="required" required="required">
                        <option value="0">All</option>
                        <option value="1">Court Funding</option>
                        <option value="2">Crisis Funding</option>
                        <option value="3">Deinstitutionalization Funding</option>
                        <option value="4">Emergency Funding</option>
                        <option value="5">Money Follows the Person (MFP)</option>
                        <option value="6">Transitional Youth Funding</option>
                        <option value="7">Waiting List Equity Funding</option>
                    </select>
                </div>
                <div class="row stacked">
                    <label>Wave Fiscal Year:</label>
                    <input type="text" class="date"/>&nbsp;to
                </div>
                <div class="row stacked">
                    <label</label>
                    <input type="text" class="date"/>
                </div>
                <div class="row stacked">
                    <label class="filter-required">Status:</label>
                    <select class="required" required="required">
                        <option value="0">All</option>
                        <option value="1">Open</option>
                        <option value="2">Closed</option>
                    </select>
                </div>
            </div>
            <div class="searchspace-footer-bar">
                <div class="float-left">
                    <input type="button" value="Filter"/>
                </div>
                <div class="float-right">
                </div>
            </div>
    </fieldset>
</div>
<div class="LeftNav-Fixed-Workarea">
        <table class="dataTable">
            <thead>
                <tr>
                    <th>Wave Type</th>
                    <th>Wave Fiscal Year</th>
                    <th>Number of Individuals</th>
                    <th>Maximum Capacity</th>
                    <th>Status</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Crisis Funding</td>
                    <td>2015</td>
                    <td>99</td>
                    <td>100</td>
                    <td>Active</td>
                    <td>
                        <a href="#" id="viewWaveDetails">View Details</a>
                        <a href="'.base_url()."index.php/ddawaves/manage".'">Manage</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
';

require "application/views/areas/waitinglist/shared/_WaveDetailsModal.php";
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
            toggleDisabled("#addToWave, #resume", true);
        }
        function enableButtons(){
            toggleDisabled("#addToWave, #resume", false);
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

        });


    </script>
'?>