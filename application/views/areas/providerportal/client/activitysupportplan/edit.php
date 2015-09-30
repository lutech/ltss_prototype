<?php
$WorkspaceHeader = '
<h3>Implementation &mdash; ASP &mdash; Exercise Service<span>Status: In Progress</span></h3>

<!-- <div class="read-edit-toggle">
    <a href="' . base_url('/index.php/providerclient/activitysupportplandetails') . '">View</a>
    <span>Edit</span>
</div> -->
<div class="workspace-header-bar">
    <div class="float-left">
        <button type="button" onclick="window.location.href= \'' . base_url('/index.php/providerclient/activitysupportplandetails') . '\'">Cancel</button>
    </div>
    <div class="float-right">
        <button type="button" id="submitLoc" onclick="window.location.href= \'' . base_url('/index.php/providerclient/activitysupportplandetails') . '\'">Save</button>
    </div>
</div>
';?>
<?php

$Body = '
<style type="text/css">
    .h4 {
        font-size: 150%;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }
    .h4 small {
        font-size: 70%;
    }
    .h5 {
        font-size: 115%;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }
    .header-info hr {
        margin: 10px 0px;
    }
</style>

<div class="genericform-style">
    <h4>Exercise Service</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Service Details</legend>
        <div class="row">
            <div class="column-left">
                <div class="row summary">
                    <span class="label">Last Edited By:</span>
                    <span class="data-element">Candace Kind</span>
                </div>
                <div class="row summary">
                    <span class="label">Date of Action:</span>
                    <span id="Stamp_LastModifiedTimeStamp" class="display-date data-element">05/30/2015</span>
                </div>
                <div class="row summary">
                    <span class="label">Due Date:</span>
                    <span id="DueDate" class="display-date data-element"> 06/01/2015</span>
                </div>
            </div>
            <div class="column-right">
                <div class="row summary">
                    <span class="label">PSS Type:</span>
                    <span class="data-element">Change Request</span>
                </div>
                <div class="row summary">
                    <span class="label">Service Provider:</span>
                    <span class="data-element">MEMORIAL HOSPITAL AT GULFPORT</span>
                </div>
                <div class="row summary">
                    <span class="label">Effective Dates:</span>
                    <span class="data-element">09/23/2015 – 12/31/9999</span>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Outcomes</legend>
        <div class="panelbar-formheader-style">
            <div class="panel">
                <div class="header sub-panel-header-one">
                    <h5>Clean teeth.</h5>
                    <div class="form-action TaskDetailLink">
                    </div>
                </div>
                <div class="body">
                    <div class="panelbar-content">
                        <br/>
                        <div class="fieldset-container-one">
                            <div class="add-button">
                                <a href="#" onclick="addOutcomeActivity(this); return false">Add Activity</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="header sub-panel-header-one">
                    <h5>Curabitur feugiat vel nibh feugiat iaculis.</h5>
                    <div class="form-action TaskDetailLink">
                    </div>
                </div>
                <div class="body">
                    <div class="panelbar-content">
                        <br/>
                        <div class="fieldset-container-one">
                            <div class="add-button">
                                <a href="#" onclick="addOutcomeActivity(this); return false">Add Activity</a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <div class="panel">
                <div class="header sub-panel-header-one">
                    <h5>Quisque vitae odio mi. Aenean non massa interdum dolor hendrerit dictum varius non dui. Aenean nec arcu eget nisi cursus lobortis.</h5>
                    <div class="form-action TaskDetailLink">
                    </div>
                </div>
                <div class="body">
                    <div class="panelbar-content">
                        <br/>
                        <div class="fieldset-container-one">
                            <div class="add-button">
                                <a href="#" onclick="addOutcomeActivity(this); return false">Add Activity</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </fieldset>
</div>

<div id="aspFormTemplate" style="display: none;">
    <fieldset class="fieldset-container-four">
        <legend class="legend-header-four">Activity</legend>
        <div class="header-link">
            <a href="#" onclick="removeOutcomeActivity(this); return false">Delete</a>
        </div>
        <br/>
         <div class="row">
            <label for="activities" class="submit-required">Activity:</label>
            <input type="text" id="activities" class=""/>
            <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Medication" data-valmsg="Medication is required."></span>
        </div>
        <br/>
        <div class="row">
            <label for="startDate" class="submit-required">Activity Start Date:</label>
            <input type="text" id="startDate" class="date"/>
        </div>
        <div class="row">
            <label for="endDate"">Activity End Date:</label>
            <input type="text" id="endDate" class="date"/>
        </div>
        <div class="row">
            <label for="howoften"  class="submit-required">How Often or By When?</label>
            <select id="howoften" type="text">
                <option value="0"></option>
                <option value="1">Daily</option>
                <option value="2">Weekly</option>
                <option value="3">Monthly</option>
                <option value="4">Annually</option>
            </select>
            <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Dosage" data-valmsg="Dosage is required."></span>
        </div>
         <div class="fieldset-container-three" id="howoftenFrequency" style="display: none">
                <div class="row" id="dailyFrequency" style="display: none">
                    <label for="" class="submit-required">Frequency:</label>
                    <input type="text" class="extension"/>
                    <span class="data-element label-info" style="display: inline-block !important"># of hours a day (Max 24)</span>
                </div>
                <div class="row" id="weeklyFrequency" style="display: none">
                    <label for="" class="submit-required">Frequency:</label>
                    <input type="text" class="extension"/>
                    <span class="data-element label-info" style="display: inline-block !important"># of times a week (Max 7)</span>
                </div>
                <div class="row" id="monthlyFrequency" style="display: none">
                    <label for="" class="submit-required">Frequency:</label>
                    <input type="text" class="extension"/>
                    <span class="data-element label-info" style="display: inline-block !important"># of times a month (Max 31)</span>
                </div>
                <div class="row" id="annualFrequency" style="display: none">
                    <label for="" class="submit-required">By When?</label>
                    <input type="text" class="extension date"/>
                </div>
            </div>
        <br/>
        <div class="row">
            <label for="instructions"  class="submit-required">Support Instructions:</label>
            <textarea id="instructions" type="text" class=""></textarea>
            <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Physician" data-valmsg="Physician is required."></span>
        </div>
        <br/>
        <div class="row">
            <label for="evidenceofprogress"  class="submit-required">Evidence of Progress:</label>
            <textarea id="evidenceofprogress" type="text"></textarea>
            <span class="field-validation-valid" data-valmsg-replace="true" data-valmsg-for="Medication_Frequency" data-valmsg="Frequency is required."></span>
        </div>
    </fieldset>
</div>
</div>
';?>

<?php
$Script = '
    <script type="text/javascript">


        function addOutcomeActivity(element){
            var activityForm = $("#aspFormTemplate").children().clone();
            var self = $(element).parent();
            $(self).before(activityForm);
        }

        function removeOutcomeActivity(element){
            var self =  $(element).parents("fieldset").first();
            $(self).remove();
        }
        $(document).ready(function(){

            $("[onclick*=addOutcomeActivity]").each(function(){
                $(this).click();
                $(this).parent().prev().find(".header-link").remove();
            });

            $("#howoften").on("change", function(){
                var self = $(this),
                    value = self.val(),
                    container = $("#howoftenFrequency"),
                    hideAllFrequency = function(){
                        container.hide();
                        container.find(".row").hide();
                    },
                    showFrequency = function(target) {
                        hideAllFrequency();
                        container.show();
                        $(target).show();
                    };

                if (value == "1") {
                    showFrequency("#dailyFrequency");
                } else if (value == "2") {
                    showFrequency("#weeklyFrequency");
                } else if (value == "3") {
                    showFrequency("#monthlyFrequency");
                } else if (value == "4") {
                    showFrequency("#annualFrequency");
                } else {
                    hideAllFrequency();
                }
            });
        });
    </script>
'?>