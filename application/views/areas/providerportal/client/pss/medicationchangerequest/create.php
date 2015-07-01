<?php $WorkspaceHeader = '
<h3>PSS - Medication Change Request</h3>

<div class="read-edit-toggle">
    <span>Manage</span>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/providerclient/psstasks').'\'">Back</button>
    </div>
</div>
';?>
<?php $Body = '
 <div class="genericform-style">
        <h4>Medication Change Request</h4>
        <div class="tableRowEditSelected tableRowHighlight edit-mode" style="display: none"><span class="icon-pencil"></span><b> Editing Selected Item...</b></div>
        <fieldset id="addMedication" class="fieldset-container-one">
            <legend class="legend-header-one">Medication</legend>
             <div class="row">
                    <label for="Medication_Medication" class="complete-required">Medications Required:</label>
                    <input id="Medication_Medication" type="text" class="required" name="Medication_Medication" data-bind="value: selectedMedicationInfo().Medication"/>
                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Medication" data-valmsg="Medication is required."></span>
                </div>
                <div class="row">
                    <label for="Medication_Physician"  class="complete-required">Physician:</label>
                    <input id="Medication_Physician" type="text" class="required" name="Medication_Physician" data-bind="value: selectedMedicationInfo().Physician"/>
                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Physician" data-valmsg="Physician is required."></span>
                </div>
                <div class="row">
                    <label for="Medication_Dosage"  class="complete-required">Dosage:</label>
                    <input id="Medication_Dosage" type="text" class="required textbox-small" name="Medication_Dosage" data-bind="value: selectedMedicationInfo().Dosage"/>
                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Dosage" data-valmsg="Dosage is required."></span>
                </div>
                <div class="row">
                    <label for="Medication_Frequency"  class="complete-required">Frequency:</label>
                    <input id="Medication_Frequency" type="text" class="required textbox-small" name="Medication_Frequency" data-bind="value: selectedMedicationInfo().Frequency"/>
                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Frequency" data-valmsg="Frequency is required."></span>
                </div>
                <div class="row">
                    <label for="Reason_prescribed"  class="complete-required">Reason(s) Prescribed</label>
                    <input id="Reason_prescribed" type="text" class="required" name="Reason_prescribed"  data-bind="value: selectedMedicationInfo().ReasonsPrescribed"/>
                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Reason_prescribed" data-valmsg="Prescribed is required."></span>
                </div>
             <div class="row">
             <fieldset class="grouped-radiobuttons">
                 <legend class="complete-required">Pyschotropic</legend>

                    <input type="radio" name="Medication_Psychotropic" id="Medication_Psychotropic_Yes" value="true" class="grouped-radiobuttons required"  data-bind="checked: selectedMedicationInfo().Psychotropic.Selected" />
                        <label for="Medication_Psychotropic_Yes" class="grouped-radiobuttons-label auto-width">Yes</label>
                    <input type="radio" name="Medication_Psychotropic" id="Medication_Psychotropic_No" value="false" class="grouped-radiobuttons required"  data-bind="checked: selectedMedicationInfo().Psychotropic.Selected" />
                        <label for="Medication_Psychotropic_No" class="grouped-radiobuttons-label auto-width">No</label>
                    <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Psychotropic" data-valmsg="Psychotropic is required."></span>
                </fieldset>
          </div>
        </fieldset>
        <style>
            .genericform-style .column-left label,
            .genericform-style .column-left .label,
             .grouped-radiobuttons > legend{
                width: 42%;
            }
        </style>
        <div id="editMedication" style="display: none;">
        <div class="column-left">
         <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Current Medication</legend>
                    <div class="row summary">
                        <span class="label">Medications Required:</span>
                        <span class="data-element">Tylenol</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Physician:</span>
                        <span class="data-element">Dr. Hibbert</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Dosage:</span>
                        <span class="data-element">200mg</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Frequency:</span>
                        <span class="data-element">Twice a day</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Reason(s) Prescribed</span>
                        <span class="data-element">Migraines</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Pyschotropic</span>
                        <span class="data-element">Yes</span>
                    </div>
            </fieldset>
        </div>
        <div class="column-left">
         <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Edit Medication</legend>
                    <div class="row">
                        <label for="Medication_Medication">Medications Required:</label>
                        <input id="Medication_Medication" type="text" name="Medication_Medication" readonly="readonly" data-bind="value: selectedMedicationInfo().Medication" value="Tylenol"/>
                    </div>
                    <div class="row">
                        <label for="Medication_Physician"  class="complete-required" >Physician:</label>
                        <input id="Medication_Physician" type="text" name="Medication_Physician" class="required" data-bind="value: selectedMedicationInfo().Physician" value="Dr. Hibbert"/>
                    </div>
                    <div class="row">
                        <label for="Medication_Dosage"  class="complete-required">Dosage:</label>
                        <input id="Medication_Dosage" type="text" class="required textbox-small" name="Medication_Dosage" data-bind="value: selectedMedicationInfo().Dosage" value="50mg"/>
                    </div>
                    <div class="row">
                        <label for="Medication_Frequency"  class="complete-required">Frequency:</label>
                        <input id="Medication_Frequency" type="text" class="required textbox-small" name="Medication_Frequency" data-bind="value: selectedMedicationInfo().Frequency" value="As needed"/>
                    </div>
                    <div class="row">
                        <label for="Reason_prescribed"  class="complete-required">Reason(s) Prescribed</label>
                        <input id="Reason_prescribed" type="text" class="required" name="Reason_prescribed"  data-bind="value: selectedMedicationInfo().ReasonsPrescribed" value="Headaches"/>
                    </div>
                     <div class="row">
                     <fieldset class="grouped-radiobuttons">
                         <legend class="complete-required">Pyschotropic</legend>

                            <input type="radio" name="Medication_Psychotropic" id="Medication_Psychotropic_Yes" value="true" class="grouped-radiobuttons required" checked="checked" data-bind="checked: selectedMedicationInfo().Psychotropic.Selected" />
                                <label for="Medication_Psychotropic_Yes" class="grouped-radiobuttons-label auto-width">Yes</label>
                            <input type="radio" name="Medication_Psychotropic" id="Medication_Psychotropic_No" value="false" class="grouped-radiobuttons required" data-bind="checked: selectedMedicationInfo().Psychotropic.Selected" />
                                <label for="Medication_Psychotropic_No" class="grouped-radiobuttons-label auto-width">No</label>
                            <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Psychotropic" data-valmsg="Psychotropic is required."></span>
                        </fieldset>
                  </div>
            </fieldset>
        </div>
        </div>

        <div class="add-to-table">
            <div class="center">
                <span class="addTo-button">
                    <a href="#" id="save">Save</a>
                </span>
                <span class="CancelEdit-link">
                    <a href="#" id="cancel">Cancel</a>
                </span>
            </div>
            <table style="table-layout: fixed;" class="generalTable" id="medicationInfosTable" noinit="true">
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
                        <th>Actions</th>
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
                        <td data-bind="yesNo: Psychotropic">
                            <a href="#" id="remove">Undo Removal</a>
                            <span id="editRowIndicator" style="display: none;">
                                <span class="icon-pencil"></span>
                                <b>Editing...</b>
                            </span>
                        </td>
                    </tr>
                    <tr id="editItemRow" style="display: none;">
                        <td data-bind="text: Medication">Tylenol</td>
                        <td data-bind="text: Physician">Dr. Hibbert</td>
                        <td data-bind="text: Dosage">50mg</td>
                        <td data-bind="text: Frequency">As needed</td>
                        <td data-bind="text: ReasonsPrescribed">Headaches</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                        <td data-bind="yesNo: Psychotropic">
                            <a href="#" id="edit">Update</a>
                            <a href="#" id="remove">Remove</a>
                            <span id="editRowIndicator" style="display: none;">
                                <span class="icon-pencil"></span>
                                <b>Editing...</b>
                            </span>
                        </td>
                    </tr>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Advil</td>
                        <td data-bind="text: Physician">Dr. Hibbert</td>
                        <td data-bind="text: Dosage">50mg</td>
                        <td data-bind="text: Frequency">As Needed</td>
                        <td data-bind="text: ReasonsPrescribed">Headaches</td>
                        <td data-bind="yesNo: Psychotropic">Yes</td>
                        <td data-bind="yesNo: Psychotropic">
                            <a href="#" id="edit">Edit</a>
                            <a href="#" id="remove">Delete</a>
                            <span id="editRowIndicator" style="display: none;">
                                <span class="icon-pencil"></span>
                                <b>Editing...</b>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<script type="text/javascript">


</script>

';?>

<?php $Script='
    <script type="text/javascript">

        function enableEditMedication(){
            $(".edit-mode, #editMedication, #editRowIndicator").show()
            $("#addMedication, #edit, #remove").hide();
            $("#editItemRow").addClass("tableRowHighlight");
        }

        function disableEditMedication(){
            $(".edit-mode, #editMedication, #editRowIndicator").hide()
            $("#addMedication, #edit, #remove").show();
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