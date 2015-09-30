<?php $WorkspaceHeader = '
<h3>PSS &mdash; Activity Support Plan</h3>

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
        <h4>Activity Support Plan</h4>
        <div class="tableRowEditSelected tableRowHighlight edit-mode" style="display: none"><span class="icon-pencil"></span><b> Editing Selected Item...</b></div>
        <fieldset id="addMedication" class="fieldset-container-one">
            <legend class="legend-header-one">Service Information</legend>
            <div class="row">
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Service Name:</span>
                        <span class="data-element">Dental Care</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Type:</span>
                        <span class="data-element">Initial</span>
                    </div>
                </div>
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Provider Name</span>
                        <span class="data-element">ABC Provider</span>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <label for="startDate" class="complete-required">Outcome:</label>
                <textarea id="activities" class="required readonly"></textarea>
            </div>
                <div class="text-center">
                    <button onclick="callOutcomeSelectDialog()">Select</button>
                </div>
            <br/>
            <br/>
            <div class="row">
                <label for="howoften"  class="complete-required">How Often or By When?</label>
                <select id="howoften" type="text" class="required">
                    <option value="0"></option>
                    <option value="1">Daily - Hrs 1-24</option>
                    <option value="2">Weekly - Days 1 to 7</option>
                    <option value="3">Monthly - Days 1 to 31</option>
                    <option value="4">Annually - By When?</option>
                </select>
                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Dosage" data-valmsg="Dosage is required."></span>
            </div>
            <div class="row">
                <label for="startDate" class="complete-required">Start Date:</label>
                <input type="text" id="startDate" class="date required"/>
            </div>
            <div class="row">
                <label for="endDate" class="complete-required">End Date:</label>
                <input type="text" id="endDate" class="date required"/>
            </div>
            <br/>
             <div class="row">
                <label for="activities" class="complete-required">Support Activities:</label>
                <textarea id="activities" class="required"></textarea>
                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Medication" data-valmsg="Medication is required."></span>
            </div>
            <br/>
            <div class="row">
                <label for="instructions"  class="complete-required">Support Instructions:</label>
                <textarea id="instructions" type="text" class="required"></textarea>
                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Physician" data-valmsg="Physician is required."></span>
            </div>
            <br/>
            <div class="row">
                <label for="evidenceofprogress"  class="complete-required">Evidence of Progress:</label>
                <textarea id="evidenceofprogress" type="text" class="required textbox-small"></textarea>
                <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Frequency" data-valmsg="Frequency is required."></span>
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
            <table style="table-layout: fixed;" class="inline-dataTable">
                <caption class="caption-header">
                    <span>Support Plans</span>
                </caption>
                <thead>
                    <tr>
                        <th>Outcome</th>
                        <th>Activity</th>
                        <th>Instructions</th>
                        <th>How Often or By When</th>
                        <th>Evidence of Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Clean Teeth</td>
                        <td data-bind="text: Physician">Brush Teeth</td>
                        <td data-bind="text: Dosage">Brush clients teeth with toothpaste. Do not use mouthwash.</td>
                        <td data-bind="text: Frequency">Twice a day</td>
                        <td data-bind="text: ReasonsPrescribed">Mouth is fresh daily.</td>
                        <td data-bind="yesNo: Psychotropic">
                            <a href="#" id="remove">Edit</a>
                            <span id="editRowIndicator" style="display: none;">
                                <span class="icon-pencil"></span>
                                <b>Editing...</b>
                            </span>
                        </td>
                    </tr>
                    <tr id="editItemRow">
                        <td data-bind="text: Medication">Clean Teeth</td>
                        <td data-bind="text: Physician">Brush Teeth</td>
                        <td data-bind="text: Dosage">Brush clients teeth with toothpaste. Do not use mouthwash.</td>
                        <td data-bind="text: Frequency">Twice a day</td>
                        <td data-bind="text: ReasonsPrescribed">Mouth is fresh daily.</td>
                        <td data-bind="yesNo: Psychotropic">
                            <a href="#" id="remove">Edit</a>
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


        function callOutcomeSelectDialog(){
                $("#outcomeSelectDialog").dialog({
                    width: 600,
                    minHeight: 300,
                    draggable: false,
                    resizable: false,
                    modal: true,
                    buttons: {
                    cancel : function(){
                        $(this).dialog("close");
                    },

                    select : function(){
                        $(this).dialog("close");
                    }
                }
            });
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

            //$("#activities, #instructions, #evidenceofprogress").ckeditor();
        });

    </script>
'?>

<?php include_once "application/views/areas/providerportal/client/activitysupportplan/shared/_OutcomesSelectDialogPartial.php"?>