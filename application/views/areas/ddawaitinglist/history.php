<?php

$WorkspaceHeader = '
<h3>DDA Waiting List & Future Needs Registry</h3>
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
                    <label class="filter-required"> Classification:</label>
                    <select class="required" required="required">
                        <option value="0">Waiting List</option>
                        <option value="1">Future Needs Registry</option>
                    </select>
                </div>
                <div class="row stacked">
                    <label class="filter-required">Priority Category:</label>
                    <select class="required js-multiselect" required="required">
                        <option value="0">All</option>
                        <option value="1">Crisis Resolution</option>
                        <option value="2">Crisis Prevention</option>
                        <option value="3">Current Needs</option>
                    </select>
                </div>
                <div class="row stacked">
                    <label>Eligibility Type:</label>
                    <select>
                        <option value="0">All</option>
                        <option value="1">DD</option>
                        <option value="2">SO</option>
                    </select>
                </div>
                <div class="row stacked">
                    <label>Priority Date:</label>
                    <input type="text" class="date"/>&nbsp;to
                </div>
                <div class="row stacked">
                    <label</label>
                    <input type="text" class="date"/>
                </div>
            </div>
            <div>
                <div class="row stacked">
                    <label>First Name:</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>Last Name:</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label class="filter-required">Responsible Region:</label>
                    <select class="required" required="required">
                        <option value="0">All</option>
                        <option value="1">Unassigned</option>
                        <option value="2">Regional Office 1</option>
                        <option value="3">Regional Office 2</option>
                    </select>
                </div>
                <div class="row stacked">
                    <label class="filter-required">Status:</label>
                    <select class="required" required="required">
                        <option value="0">All</option>
                        <option value="1">Active</option>
                        <option value="2">On Hold</option>
                        <option value="3">On Wave</option>
                    </select>
                </div>
            </div>
            <div class="searchspace-footer-bar">
                <div class="float-left">
                    <input type="button" value="Filter"/>
                </div>
                <div class="float-right">
                    <input type="button" id="addToWave" value="Add to Wave" disabled="disabled"/>
                    <input type="button" id="resume" value="Resume" disabled="disabled"/>
                </div>
            </div>
    </fieldset>
</div>
<div class="LeftNav-Fixed-Workarea">
        <table class="dataTable-first-column-checkbox-filter">
            <thead>
                <tr>
                    <th class="checkbox" >
                        <label for="checkall" class="ui-hide">Check All</label>
                        <input type="checkbox" id="checkall" title="Check/Uncheck All"/>
                    </th>
                    <th>Classification</th>
                    <th>Ranking</th>
                    <th>Client ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Client Age</th>
                    <th>Jurisdicton</th>
                    <th>Date Added</th>
                    <th>Responsible Region</th>
                    <th>Priority Date</th>
                    <th>Priority Category</th>
                    <th>Eligibility Type</th>
                    <th>Wave Name</th>
                    <th>Status</th>
                    <th>Age of Primary Caregiver</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label for="check1" class="ui-hide">Check All</label>
                        <input type="checkbox" id="check1" title="Check/Uncheck"/>
                    </td>
                    <td>DDA Waiting List</td>
                    <td>1</td>
                    <td>123456</td>
                    <td>Adam</td>
                    <td>Banks</td>
                    <td>60</td>
                    <td>Baltimore</td>
                    <td>07/04/2015</td>
                    <td>CMRO</td>
                    <td>07/04/2015</td>
                    <td>Crisis Resolution</td>
                    <td>DD</td>
                    <td></td>
                    <td>Active</td>
                    <td>84</td>
                    <td>
                        <a href="#">View</a>
                        <a href="#" id="addToHold">Hold</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
';

require "application/views/areas/waitinglist/shared/_AddToWaveDialog.php";
require "application/views/areas/waitinglist/shared/_AddToHoldDialog.php";
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

            $("#addToWave").on("click", function(){
                ltss.overlay.show({
                    contentSelector: "#addToWaveDialog",
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

            $("#addToHold").on("click", function(){
                ltss.overlay.show(
                    {
                    contentSelector: "#addToHoldDialog",
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