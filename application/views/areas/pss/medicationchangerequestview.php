<?php $WorkspaceHeader = '
<h3>PSS - Medication Change Request<span>Status: Reviewed</span></h3>

<div class="read-edit-toggle">
    <span>View</span>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \'' . base_url('/index.php/pss/summary') . '\'">Back to Summary</button>
    </div>
</div>
';?>
<?php $Body = '
 <div class="genericform-style read-only">
        <h4>Medication Change Request</h4>
         <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Medication Change Information</legend>


        <table class="generalTable" id="medicationInfosTable" noinit="true">
                <caption class="caption-header">
                    <span>Previous Medications List</span>
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
                    <span>Medication Change Requests</span>
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
                        <td id="advilAddedStatus">Reviewed</td>
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
                        <td  id="tylenolRemovedStatus">Reviewed</td>
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
                        <td id="tylenolUpdatedStatus">Accepted</td>
                    </tr>
                </tbody>
            </table>
<br/>
            <table class="generalTable" id="medicationInfosTable" noinit="true">
                <caption class="caption-header">
                    <span>Updated Medications List</span>
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
                        <td data-bind="text: Dosage">50mg</td>
                        <td data-bind="text: Frequency">As needed</td>
                        <td data-bind="text: ReasonsPrescribed">Headaches</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
<script type="text/javascript">


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
        });

    </script>
'?>