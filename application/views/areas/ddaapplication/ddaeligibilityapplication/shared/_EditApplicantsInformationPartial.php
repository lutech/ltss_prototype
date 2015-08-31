<?php
$applicantsInformationContent =
'<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Summary Information</legend>
    <div class="column-left">
        <div class="row summary">
            <span class="label">Application Completion Date:</span>
            <span class="data-element">
                <?php ?>
                N/A
            </span>
        </div>
        <div class="row summary">
            <span class="label">Active:</span>
            <span class="data-element">
                <?php ?>
                N/A
            </span>
        </div>
    </div>
    <div class="column-left">
        <div class="row summary">
            <span class="label">Assigned Regional Eligibilty Staff:</span>
            <span class="data-element">Regional Eligibility Staff</span>
        </div>
        <div class="row summary">
            <span class="label">Assigned CCS Coordinator:</span>
            <span class="data-element">CCS Coordinator</span>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Applicant&apos;s Information</legend>
    <div class="row">
        <fieldset class="grouped-radiobuttons">
            <legend>Have you ever applied for MA in Maryland?</legend>
            <div class="row">
                <input id="appliedForMAYes" type="radio" name="appliedForMA" value="yes"/>
                <label for="appliedForMAYes" class="auto-width">Yes</label>
                <input id="appliedForMANo" type="radio" name="appliedForMA" value="no"/>
                <label for="appliedForMANo" class="auto-width">No</label>
            </div>
        </fieldset>
        <div class="fieldset-container-three" id="appliedForMAContainer" style="display:none">
            <div class="row">
                <label class="complete-required" for="dateAppliedForMA">When?</label>
                <input class="required date" required="required" type="text" id="dateAppliedForMA" name="dateAppliedForMA"/>
            </div>
        </div>
    </div>
    <div class="row">
        <label class="complete-required" for="individualManagedCareOrganization">Individual&apos;s Managed Care Organization:</label>
        <textarea required="required" class="required comments-textarea" name="individualManagedCareOrganization" id="individualManagedCareOrganization"></textarea>
    </div>
    <div class="row">
        <label class="complete-required" for="individualsPrimaryCarePhysician">Individual&apos;s Primary Care Physician:</label>
        <textarea required="required" class="required comments-textarea" name="individualsPrimaryCarePhysician" id="individualsPrimaryCarePhysician"></textarea>
    </div>
    <div class="row">
        <label class="complete-required" for="applicationDate">Application Date/Date Received:</label>
        <input class="required date" required="required" type="text" id="applicationDate" name="applicationDate"/>
    </div>
</fieldset>
' ?>