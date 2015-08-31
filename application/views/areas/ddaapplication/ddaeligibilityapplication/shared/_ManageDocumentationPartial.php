<?php
$documentationContent = '
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Documentation</legend>
    <div class="row">
        <label for="documentCategory">Category:</label>
        <select name="documentCategory" id="documentCategory">
            <option value="" selected></option>
            <option value="application">Application</option>
            <option value="medicaidCard">Medicaid Card</option>
            <option value="socialSecurityCard">Social Security Card</option>
            <option value="authorizationToRequestServices">Authorization to Request and Recieve Services</option>
            <option value="medicalRecords">Medical Records</option>
            <option value="psychologicalEvaluations">Psychological Evaluations</option>
            <option value="neuropsychologicalEvaluations">NeuropsychologicalEvaluations</option>
            <option value="specialEducationRecords">Special Education Records</option>
            <option value="vocationalEvaluations">Vocational Evaluations</option>
            <option value="otherProfessionalsAssessments">Other Professional Assessments</option>
        </select>
    </div>
    <div id="documentInfoContainer" style="display: none">
        <div class="row">
            <label for="documentTitle" class="complete-required">Title:</label>
            <input type="text" id="documentTitle" class="required" required="required"/>
        </div>
        <div class="row">
            <label for="documentDescription" class="complete-required">Description:</label>
            <textarea name="documentDescription" id="documentDescription" class="required" required="required"></textarea>
        </div>
    </div>
</fieldset>
    <div class="add-to-table">
        <div class="center" id="saveCancelDocument" style="display: none;">
            <span class="addTo-button">
                <a href="#" id="saveDocument">Save</a>
            </span>
            <span class="CancelEdit-link">
                <a href="#" id="cancelDocument">Cancel</a>
            </span>
        </div>
         <table class="generalTable" noinit>
            <thead>
                <tr>
                    <th>
                        Category
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Description
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" class="text-center">No data available in table</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#documentCategory").change( function(){
                if ($(this).val() != "") {
                    $("#documentInfoContainer").show();
                    $("#saveCancelDocument").show();
                } else {
                    $("#documentInfoContainer").hide();
                    $("#saveCancelDocument").hide();
                }
            })

            $("#cancelDocument, #saveDocument").on("click", function(){
                $("#documentCategory").val("").change();
            })
        });
    </script>
'
?>