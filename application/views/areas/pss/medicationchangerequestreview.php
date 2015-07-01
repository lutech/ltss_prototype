<?php $WorkspaceHeader = '
<h3>PSS - Medication Change Request</h3>

<div class="read-edit-toggle">
    <span>Manage</span>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \'' . base_url('/index.php/pss/summary') . '\'">Back to Summary</button>
    </div>
    <div class="float-right">
        <button id="applyChanges">Complete</button>
    </div>
</div>
';?>
<?php $Body = '
 <div class="genericform-style">
        <h4>Medication Change Request</h4>
         <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Medication Change Information</legend>
            <div class="row" style="display: none;">
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Last Modified By:</span>
                        <span class="data-element">Cicio Smith</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Last Modified Date:</span>
                        <span class="data-element">05/10/2015</span>
                    </div>
                </div>
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Status:</span>
                        <span class="data-element">Submitted</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Date Submitted:</span>
                        <span class="data-element">05/11/2015</span>
                    </div>
                </div>
            </div>

        <table class="generalTable" id="medicationInfosTable" noinit="true">
                <caption class="caption-header">
                    <span>Current Medications</span>
                </caption>
                <thead>
                    <tr>
                        <th>Medication</th>
                        <th>Physician</th>
                        <th>Dosage</th>
                        <th>Frequency</th>
                        <th>Reason(s) Prescribed</th>
                        <th>Psychotropic</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Tylenol</td>
                        <td data-bind="text: Physician">Dr. Hibbert</td>
                        <td data-bind="text: Dosage">200mg</td>
                        <td data-bind="text: Frequency">Twice a day</td>
                        <td data-bind="text: ReasonsPrescribed">Migraines</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                    </tr>
                </tbody>
            </table>
<br/>
        <table class="inline-dataTable rowgrouping" id="medicationInfosTable">
                <caption class="caption-header">
                    <span>Medication Changes</span>
                </caption>
                <thead>
                    <tr>
                        <th>Medication</th>
                        <th>Physician</th>
                        <th>Dosage</th>
                        <th>Frequency</th>
                        <th>Reason(s) Prescribed</th>
                        <th>Psychotropic</th>
                        <th>Requested By</th>
                        <th>Change Made</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Advil</td>
                        <td data-bind="text: Physician">Dr. Hibbert</td>
                        <td data-bind="text: Dosage">50mg</td>
                        <td data-bind="text: Frequency">As needed</td>
                        <td data-bind="text: ReasonsPrescribed">Headaches</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                        <td data-bind="text: Medication">Good Health Services</td>
                        <td data-bind="yesNo: Psychotropic">Added</td>
                        <td id="advilAddedStatus">Pending</td>
                        <td data-bind="yesNo: Psychotropic">
                             <a href="#" id="acceptAdvilAdded" onclick="acceptAdvilAdded()">Accept</a>
                             <a href="#" id="undoAdvilAdded" onclick="undoAdvilAdded()" style="display: none">Undo</a>
                        </td>
                    </tr>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Tylenol</td>
                        <td data-bind="text: Physician">Dr. Hibbert</td>
                        <td data-bind="text: Dosage">200mg</td>
                        <td data-bind="text: Frequency">Twice a day</td>
                        <td data-bind="text: ReasonsPrescribed">Migraines</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                        <td data-bind="text: Medication">Good Health Services</td>
                        <td data-bind="yesNo: Psychotropic">Removed</td>
                        <td  id="tylenolRemovedStatus">Pending</td>
                        <td data-bind="yesNo: Psychotropic">
                             <a href="#" id="acceptTylenolRemoved" onclick="acceptTylenolRemoved()">Accept</a>
                             <a href="#" id="undoTylenolRemoved" onclick="undoTylenolRemoved()" style="display: none">Undo</a>
                        </td>
                    </tr>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Tylenol</td>
                        <td data-bind="text: Physician">Dr. Hibbert</td>
                        <td data-bind="text: Dosage">50mg</td>
                        <td data-bind="text: Frequency">As needed</td>
                        <td data-bind="text: ReasonsPrescribed">Headaches</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                        <td data-bind="text: Medication">Sunny Day Adult Care</td>
                        <td data-bind="yesNo: Psychotropic">Updated</td>
                        <td id="tylenolUpdatedStatus">Pending</td>
                        <td data-bind="yesNo: Psychotropic">
                             <a href="#" id="acceptTylenolUpdated" onclick="acceptTylenolUpdated()">Accept</a>
                             <a href="#" id="undoTylenolUpdated" onclick="undoTylenolUpdated()" style="display: none">Undo</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
            <div class="add-to-table">
                <table class="generalTable" id="medicationInfosTable" noinit="true">
                        <caption class="caption-header">
                            <span>Updated Medications (Preview)</span>
                        </caption>
                        <thead>
                            <tr>
                                <th>Medication</th>
                                <th>Physician</th>
                                <th>Dosage</th>
                                <th>Frequency</th>
                                <th>Reason(s) Prescribed</th>
                                <th>Psychotropic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  id="tylenolRemovedRow">
                                <td data-bind="text: Medication">Tylenol</td>
                                <td data-bind="text: Physician">Dr. Hibbert</td>
                                <td data-bind="text: Dosage">200mg</td>
                                <td data-bind="text: Frequency">Twice a day</td>
                                <td data-bind="text: ReasonsPrescribed">Migraines</td>
                                <td data-bind="yesNo: Psychotropic">Yes</td>
                            </tr>
                            <tr  id="tylenolUpdatedRow" style="display: none">
                                <td data-bind="text: Medication">Tylenol</td>
                                <td data-bind="text: Physician">Dr. Hibbert</td>
                                <td data-bind="text: Dosage">20mg</td>
                                <td data-bind="text: Frequency">As needed</td>
                                <td data-bind="text: ReasonsPrescribed">Headaches</td>
                                <td data-bind="yesNo: Psychotropic">Yes</td>
                            </tr>
                            <tr id="advilAddedRow" style="display: none">
                                <td data-bind="text: Medication">Advil</td>
                                <td data-bind="text: Physician">Dr. Hibbert</td>
                                <td data-bind="text: Dosage">20mg</td>
                                <td data-bind="text: Frequency">As needed</td>
                                <td data-bind="text: ReasonsPrescribed">Headaches</td>
                                <td data-bind="yesNo: Psychotropic">Yes</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
    </div>
    <div id="submitConfirm" title="Submit Confirmation" style="display: none">
        <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Are you sure you would like to commit the changes?</legend>
            <div class="header-info">Note: Changes will be updated to the PSS Medications immediately.</div>
        </fieldset>
    </div>
<script type="text/javascript">


        function acceptAdvilAdded(){
            $("#advilAddedRow, #undoAdvilAdded").show();
             $("#acceptAdvilAdded").hide();
             $("#advilAddedStatus").html("Accepted")
             return false;
        }
        function undoAdvilAdded(){
            $("#advilAddedRow, #undoAdvilAdded").hide();
             $("#acceptAdvilAdded").show();
             $("#advilAddedStatus").html("Pending")
             return false;
        }
        function acceptTylenolRemoved() {
            $("#undoTylenolRemoved").show();
             $("#tylenolRemovedRow, #acceptTylenolRemoved, #acceptTylenolUpdated").hide();
             $("#tylenolRemovedStatus").html("Accepted")
             $("#tylenolUpdatedStatus").html("Reviewed")
             return false;
        }
        function undoTylenolRemoved() {
            $("#undoTylenolRemoved").hide();
             $("#tylenolRemovedRow, #acceptTylenolRemoved, #acceptTylenolUpdated").show();
             $("#tylenolRemovedStatus").html("Pending")
             $("#tylenolUpdatedStatus").html("Pending")
             return false;
        }
        function acceptTylenolUpdated() {
            $("#tylenolUpdatedRow, #undoTylenolUpdated").show();
             $("#tylenolRemovedRow, #acceptTylenolRemoved, #acceptTylenolUpdated").hide();
             $("#tylenolRemovedStatus").html("Reviewed")
             $("#tylenolUpdatedStatus").html("Accepted")
             return false;
        }
        function undoTylenolUpdated() {
            $("#tylenolUpdatedRow, #undoTylenolUpdated").hide();
             $("#tylenolRemovedRow, #acceptTylenolRemoved, #acceptTylenolUpdated").show();
             $("#tylenolRemovedStatus").html("Pending")
             $("#tylenolUpdatedStatus").html("Pending")
             return false;
        }

</script>

';?>

<?php $Script = '
    <script type="text/javascript">


        function enableEditMedication(){
            $(".edit-mode, #editMedication, #editRowIndicator").show()
            $("#addMedication, #edit").hide();
            $("#editItemRow").addClass("tableRowHighlight");
        }

        function disableEditMedication(){
            $(".edit-mode, #editMedication, #editRowIndicator").hide()
            $("#addMedication, #edit").show();
            $("#editItemRow").removeClass("tableRowHighlight");
        }

        $(document).ready(function(){
            $("#edit").on("click", function(){
                enableEditMedication();
            });
            $("#save").on("click", function(){
                disableEditMedication();
            });
            $("#cancel").on("click", function(){
                disableEditMedication();
            });

            $("#applyChanges").on("click", function(){
                $("#submitConfirm").dialog({
                    minWidth: 500,
                    height: "auto",
                    draggable: false,
                    resizable: false,
                    modal: true,
                    buttons: {
                        Cancel : function(){
                            $(this).dialog("close");
                        },
                       Continue : function(){
                            $(this).dialog("close");
                        }
                    }
                });
            });
        });

    </script>
'?>