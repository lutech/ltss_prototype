<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $WorkspaceHeader = '
    <h3>CARE Assessment - III. Current Medical Information</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

        </div>
    </div>
'?>

<?php $Body = '
    <div class="genericform-style">
        <h4>III. Current Medical Information</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Primary and Other Diagnoses, Comorbidites, and Complications </legend>
            <div class="iform-fieldset" tabindex="-1">
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">
                        <span>A1.<span>
                        <span>Primary Diagnosis at Assessment<span>
                    </legend>
                    <span class="header-info">
                        Indicate the primary diagnosis at Assessment.  Be as specific as possible
                    </span>
                    <div class="row">
                        <label for="txtPrimaryDiagnosis">Primary Diagnosis</label>
                        <textarea class="comments-textarea" cols="20" id="txtPrimaryDiagnosis"></textarea>
                    </div>
                </fieldset>
            </div>'

        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">B. Other Diagnoses, Comorbidites, and Complications</legend>
            <span class="header-info">
                List other diagnosis being treated, managed, or monitored in this setting.  Please include all diagnoses (e.g., depression, schizophrenia, dementia, protein calorie malnutrition).
            </span>'
            .new IformQuestion(null, "B1.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B2.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B3.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B4.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B5.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B6.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B7.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B8.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B9.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B10.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B11.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B12.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B13.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion(null, "B14.", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion("B15", "Is the list complete?", 2, null ,null,
                new RadioQuestionData("b15", array(
                        new RadioCheckQuestion("0 - No", "0"),
                        new RadioCheckQuestion("1 - Yes", "1"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">D. Major Treatments ("Admitted With:" refers to the 2-day admission assessment period.)</legend>
            <span class="header-info">
                Which of the following treatments did the patient receive during the 2-day assessment period?  For treatments such as blood transfusions, dialysis, or IV chemotherapy, is the patient currently receiving them as part of their treatment plan?
            </span>'
            .new IformQuestion(null, "Admitted With", 2, null , null,
                new CheckQuestionData("dAdmitted", array(
                        new RadioCheckQuestion("D1. None", "1"),
                        new RadioCheckQuestion("D2. Insulin Drip", "2"),
                        new RadioCheckQuestion("D3. Total Parenteral Nutrition", "3"),
                        new RadioCheckQuestion("D4. Central Line Management", "4"),
                        new RadioCheckQuestion("D5. Blood Transfusion(s)", "4"),
                        new RadioCheckQuestion("D6. Controlled Parenteral Analgesia&mdash;Peripheral", "4"),
                        new RadioCheckQuestion("D7. Controlled Parenteral Analgesia&mdash;Epidural", "4"),
                        new RadioCheckQuestion("D8. Left Ventricular Assistive Device (LVAD)", "4"),
                        new RadioCheckQuestion("D9. Continuous Cardiac Monitoring", "4"),
                        new RadioCheckQuestion("D10. Chest Tube(s)", "4"),
                        new RadioCheckQuestion("D11. Trach Tube with Suctioning", "4"),
                        new RadioCheckQuestion("D12. High O2 Concentration Delivery System with FiO2 > 40%", "4"),
                        new RadioCheckQuestion("D13. Non-invasive ventilation (CPAP)", "4"),
                        new RadioCheckQuestion("D14. Ventilator&mdash;Weaning", "4"),
                        new RadioCheckQuestion("D15. Ventilator&mdash;Non-Weaning", "4"),
                        new RadioCheckQuestion("D16. Hemodialysis", "4"),
                        new RadioCheckQuestion("D17. Peritoncal Dialysis", "4"),
                        new RadioCheckQuestion("D18. Fistula or Other Drain Management", "4"),
                        new RadioCheckQuestion("D19. Negative Pressure Wound Therapy", "4"),
                        new RadioCheckQuestion("D20. Complex Wound Management", "4"),
                        new RadioCheckQuestion("D21. Halo", "4"),
                        new RadioCheckQuestion("D22. Complex External Fixator", "4"),
                        new RadioCheckQuestion("D23. One-on-One 24-Hour Staff Supervision", "4"),
                        new RadioCheckQuestion("D24. Specialty Surface or Bed", "4"),
                        new RadioCheckQuestion("D25. Multiple Types of IV Antibiotic Administration", "4"),
                        new RadioCheckQuestion("D26. IV Vasoactive Medications", "4"),
                        new RadioCheckQuestion("D27. IV Anti-coagulants", "4"),
                        new RadioCheckQuestion("D28. IV Chemotherapy", "4"),
                        new RadioCheckQuestion("D29. Indwelling Bowel Catheter Management System", "4"),
                        new RadioCheckQuestion("D30. Other Major Treatments", "4"))
                )
            )
     .'</fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">E. Medications (Optional)</legend>
        <span class="header-info">
            Please list the <strong>ten</strong> most clinically relevant medications for the patient during the 2-day assessment period.
        </span>
        <div data-bind="foreach: Medications">
            <fieldset class="fieldset-container-four ">
                <legend class="legend-header-four">Medication&nbsp;<span data-bind="text: \'#\' + ($index() + 1)"></span></legend>
                <div class="header-link">
                    <a href="#" role="button" title="Delete Medication" data-bind="click:$root.removeMedication">Delete</a>
                </div>
                <div class="row">
                    <label>Name</label>
                    <input type="text" data-bind="value: MedicationName" />
                </div>
                <div class="row">
                    <label>Dose</label>
                    <input type="text" data-bind="value: Dose" />
                </div>
                <div class="row">
                    <label>Route</label>
                    <input type="text" data-bind="value: Route" />
                </div>
                <div class="row">
                    <label>Frequency</label>
                    <input type="text" data-bind="value: Frequency" />
                </div>
                <div class="row">
                    <label>Planned Stopped Date</label>
                    <input type="text" data-bind="value: PlannedStopDate" />
                </div>
                <hr/>
            </fieldset>
        </div>
        <div class="add-button">
            <a href="#" id="ButtonAddMedication" data-bind="click: addMedication">
                Add Medication</a>
        </div>'
        .new IformQuestion("E31", "Is the list complete?", 2, null ,null,
            new RadioQuestionData("e31", array(
                    new RadioCheckQuestion("0 - No", "0"),
                    new RadioCheckQuestion("1 - Yes", "1"))
            )
        )

    .'</fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">F. Allergies &amp; Adverse Drug Reactions</legend>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two"">
                <legend class="legend-header-two">
                    <span>F1 - F8.<span>
                    <span>Allergies/Causes of Reaction & Patient Reactions<span>
                </legend>
                <span class="header-info">
                    List all allergies/causes of reaction [e.g., food, medications, other] and describe the adverse reactions
                </span>
                <div data-bind="foreach: Allergies">
                    <fieldset class="fieldset-container-four">
                        <legend class="legend-header-four">Allergy&nbsp;<span data-bind="text: \'#\' + ($index() + 1)"></span></legend>
                        <div class="header-link">
                            <a href="#" role="button" title="Delete Allergy" data-bind="click:$root.removeAllergy">Delete</a>
                        </div>
                    <div class="row">
                        <label>Allergies/Causes of Reaction</label>
                        <input type="text" data-bind="value: AllergyName" />
                    </div>
                    <div class="row">
                        <label>Patient Reaction</label>
                        <textarea class="comments-textarea" data-bind="value: Reaction"></textarea>
                    </div>
                    <hr/>
                </div>
                <div class="add-button">
                    <a href="#" id="btnAddAllergy" data-bind="click: addAllergy">
                        Add Allergy</a>
                </div>'
                .new IformQuestion("F9", "Is the list complete?", 2, null ,null,
                    new RadioQuestionData("F9", array(
                            new RadioCheckQuestion("0. No", "0"),
                            new RadioCheckQuestion("1. Yes", "1"))
                    )
                )
            .'</fieldset>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">G. Skin Integrity (Complete during the 2-day assessment period.)</legend>'
        .new IformQuestion("G1", "Is this patient at <strong>rick of developing pressure ulcers?</strong>", 2, null , null,
            new RadioQuestionData("G1", array(
                    new RadioCheckQuestion("0. No", "1"),
                    new RadioCheckQuestion("1. Yes, indicated by clinical judgment", "2"),
                    new RadioCheckQuestion("2. Yes, indicated high risk by formal assessment", "3"))
            )
        )
        .new IformQuestion("G2", "Does the patient have one or more unhealed pressure ulcer(s) at stage 2 or higher or unstageable?", 2, null ,null,
            new RadioQuestionData("G2", array(
                    new RadioCheckQuestion("0. No", "0"),
                    new RadioCheckQuestion("1. Yes", "1"))
            )
        ).
        '<span class="header-info">
            If the patient has one or more Stage 2-4 or unstagable pressure ulcers, indicate the number of unhealed pressure ulcers at each stage.
        </span>'
        .new IformQuestion("G2a", "Stage 2", 2, null, "Partial thickness loss of dermis presenting as a shallow open ulcer with red pink wound bed, without slough.  May also present as an intact or open/ruptured serum-filled blister (excludes those resulting from skin tears, tape stripping, or incontinence associated dermatitis).",
            new RadioQuestionData("G2a", array(
                    new RadioCheckQuestion("0 ulcers", "0"),
                    new RadioCheckQuestion("1 ulcer", "1"),
                    new RadioCheckQuestion("2 ulcers", "2"),
                    new RadioCheckQuestion("3 ulcers", "3"),
                    new RadioCheckQuestion("4 ulcers", "4"),
                    new RadioCheckQuestion("5 ulcers", "5"),
                    new RadioCheckQuestion("6 ulcers", "6"),
                    new RadioCheckQuestion("7 ulcers", "7"),
                    new RadioCheckQuestion("8 ulcers", "8"),
                    new RadioCheckQuestion("Unknown", "9"))
            )
        )
        .new IformQuestion("G2b", "Stage 3", 2, null, "Full thickness tissue loss.  Subcutaneous fat may be visible but bone, tendon, or muscles are not exposed.  Slough may be present but does not obscure the depth of tissue loss.  May include undermining and tunneling",
            new RadioQuestionData("G2b", array(
                    new RadioCheckQuestion("0 ulcers", "0"),
                    new RadioCheckQuestion("1 ulcer", "1"),
                    new RadioCheckQuestion("2 ulcers", "2"),
                    new RadioCheckQuestion("3 ulcers", "3"),
                    new RadioCheckQuestion("4 ulcers", "4"),
                    new RadioCheckQuestion("5 ulcers", "5"),
                    new RadioCheckQuestion("6 ulcers", "6"),
                    new RadioCheckQuestion("7 ulcers", "7"),
                    new RadioCheckQuestion("8 ulcers", "8"),
                    new RadioCheckQuestion("Unknown", "9"))
            )
        )
        .new IformQuestion("G2c", "Stage 4", 2, null, "Full thickness tissue loss with visible bone, tendon, or muscle.  Slough or eschar may be present on some parts of the wound bed.  Often includes undermining and tunneling",
            new RadioQuestionData("G2c", array(
                    new RadioCheckQuestion("0 ulcers", "0"),
                    new RadioCheckQuestion("1 ulcer", "1"),
                    new RadioCheckQuestion("2 ulcers", "2"),
                    new RadioCheckQuestion("3 ulcers", "3"),
                    new RadioCheckQuestion("4 ulcers", "4"),
                    new RadioCheckQuestion("5 ulcers", "5"),
                    new RadioCheckQuestion("6 ulcers", "6"),
                    new RadioCheckQuestion("7 ulcers", "7"),
                    new RadioCheckQuestion("8 ulcers", "8"),
                    new RadioCheckQuestion("Unknown", "9"))
            )
        )
        .new IformQuestion("G2d", "Unstageable", 2, null, "Full thickness tissue loss in which the base of the ulcer is covered by slough (yellow, gray, green, or brown) or eschar (tan, brown, or black) in the wound bed.  Include ulcers that are known or likely, but are not stageable due to non-removable dressing, device, cast or suspected deep tissue injury in evolution",
            new RadioQuestionData("G2d", array(
                    new RadioCheckQuestion("0 ulcers", "0"),
                    new RadioCheckQuestion("1 ulcer", "1"),
                    new RadioCheckQuestion("2 ulcers", "2"),
                    new RadioCheckQuestion("3 ulcers", "3"),
                    new RadioCheckQuestion("4 ulcers", "4"),
                    new RadioCheckQuestion("5 ulcers", "5"),
                    new RadioCheckQuestion("6 ulcers", "6"),
                    new RadioCheckQuestion("7 ulcers", "7"),
                    new RadioCheckQuestion("8 ulcers", "8"),
                    new RadioCheckQuestion("Unknown", "9"))
            )
        )
        .new IformQuestion("G2e", "Number of unhealed stage 2 ulcers known to be present for more than 1 month", 2, null, "If the patient has one or more unhealed stage 2 pressure ulcers, record the number present today that were first observed <strong>more than 1 month ago,</strong> according to the best available records.",
            new RadioQuestionData("G2d", array(
                    new RadioCheckQuestion("0 ulcers", "0"),
                    new RadioCheckQuestion("1 ulcer", "1"),
                    new RadioCheckQuestion("2 ulcers", "2"),
                    new RadioCheckQuestion("3 ulcers", "3"),
                    new RadioCheckQuestion("4 ulcers", "4"),
                    new RadioCheckQuestion("5 ulcers", "5"),
                    new RadioCheckQuestion("6 ulcers", "6"),
                    new RadioCheckQuestion("7 ulcers", "7"),
                    new RadioCheckQuestion("8 ulcers", "8"),
                    new RadioCheckQuestion("Unknown", "9"))
            )
        ).

        '<div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>G3.<span>
                    <span>If any unhealed pressure ulcer is stage 3 or 4 (or if eschar is present), record the most recent measurements for the LARGEST ulcer (or eshar):<span>
                </legend>
                <span class="header-info">
                    a. Longest length in any direction (Enter 99.9 if the largest ulcer is unstageable and is not eschar.)
                </span>
                <div class="row">
                    <label for="txtLongestLength">Length:</label>
                    <input id="txtLongestLength" type="text" class=""/>
                </div>
                <span class="header-info">
                    b. Width of SAME unhealed ulcer or eschar (Enter 99.9 if the largest ulcer is unstageable and is not eschar.)
                </span>
                <div class="row">
                    <label for="txtWidthSame">Width:</label>
                    <input id="txtWidthSame" type="text" class=""/>
                </div>
                <span class="header-info">
                    c. Depth of SAME unhealed ucler or eschar (Enter 99.9 if the largest ulcer is unstageable and is not eschar.)
                </span>
                <div class="row">
                    <label for="txtDepthSame">Depth:</label>
                    <input id="txtDepthSame" type="text" class=""/>
                </div>
                <span class="header-info">
                    d. Date of measurement
                </span>
                <div class="row">
                    <label for="txtDateMeasurement">Date of measurement:</label>
                    <input id="txtDateMeasurement" type="text" class="kendo-date"/>
                </div>
            </fieldset>
        </div>'
        .new IformQuestion("G4", "Indicate if any unhealed stage 3 or stage 4 pressure ulcer(s) has undermining and/or tunneling (sinus tract) present.", 2, null, null,
            new RadioQuestionData("G2d", array(
                    new RadioCheckQuestion("0. No", "0"),
                    new RadioCheckQuestion("1. Yes", "1"),
                    new RadioCheckQuestion("8. Unable to assess", "2"))
            )
        ).
        '<div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>G5a - e.<span>
                    <span>NUMBER OF MAJOR WOUNDS (excluding pressure ulcers)<span>
                </legend>'
                .new IformQuestion(null, "G5a. Delayed healing of surgical wound", 2, null, null,
                    new TextSummaryQuestionData(null))
                .new IformQuestion(null, "G5b.Trauma-related wound (e.g., burns)", 2, null, null,
                    new TextSummaryQuestionData(null))
                .new IformQuestion(null, "G5c. Diabetic foot ulcer(s)", 2, null, null,
                    new TextSummaryQuestionData(null))
                .new IformQuestion(null, "G5d. Vascular ulcer (arterial or venous including diabetic ulcers not located on the foot)", 2, null, null,
                    new TextSummaryQuestionData(null))
                .new IformQuestion(null, "G5e. Other", 2, null, null,
                    new TextSummaryQuestionData(null)).
            '</fieldset>
        </div>'
        .new IformQuestion("G6", "TURNING SURFACES NOT INTACT", 2, null , "Indicate which of the following turning surfaces have either a pressure ulcer or major wound.",
            new CheckQuestionData("B4", array(
                    new RadioCheckQuestion("a. Skin for all turning surfaces is intact", "1"),
                    new RadioCheckQuestion("b. Right hip not intact", "2"),
                    new RadioCheckQuestion("c. Left hip not intact", "3"),
                    new RadioCheckQuestion("d. Back/buttocks not intact", "4"),
                    new RadioCheckQuestion("e. Other turning surface(s) not intact", "5"))
            )
        ).
    '</fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">H. Physiologic Factors (Complete during the 2-day assessment period.)</legend>
        <span class="header-info">
        Record the most recent value for each of the following physiologic factors tested during the admission assessment period.  Indicate the date (MM/DD/YYYY) that the value was collected.  IF the test was not provided during the admission assessment period, check "not tested."  If it is not possible to measure the height and weight, check box if value is estimated (actual measurement is preferred).
        </span>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H1/H2.<span>
                    <span>Height:<span>
                </legend>
                <div class="row">
                    <label for="h2date">H2a. Date:</label>
                    <input id="h2date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h2height">H2b. Height:</label>
                    <input id="h2height" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">inches</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">cm</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H2c. Check if NOT tested</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H2d. Check here if value is estimated</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H3/H4.<span>
                    <span>Weight:<span>
                </legend>
                <div class="row">
                    <label for="h3date">H3a. Date:</label>
                    <input id="h3date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h3weight">H3b. Weight:</label>
                    <input id="h3weight" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">pounds</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">Kg</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H3c. Check if NOT tested</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H3d. Check here if value is estimated</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H5/H6.<span>
                    <span>Temperature:<span>
                </legend>
                <div class="row">
                    <label for="h5date">H5a. Date:</label>
                    <input id="h5date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h5temp">H5b. Temperature:</label>
                    <input id="h5temp" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">&deg;F</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">&deg;C</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H5c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H7.<span>
                    <span>Heart Rate (beats/min):<span>
                </legend>
                <div class="row">
                    <label for="h7date">H7a. Date:</label>
                    <input id="h7date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h7value">H7b. Heart Rate:</label>
                    <input id="h7value" type="text"/>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H8.<span>
                    <span>Respiratory Rate (breaths/min):<span>
                </legend>
                <div class="row">
                    <label for="h8date">H8a. Date:</label>
                    <input id="h8date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h8value">H8b. Respiratory Rate:</label>
                    <input id="h8value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H8c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H9.<span>
                    <span>Blood Pressure mm/Hg:<span>
                </legend>
                <div class="row">
                    <label for="h9date">H9a. Date:</label>
                    <input id="h9date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h9value">H9b. Blood Pressure:</label>
                    <input id="h9value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H9c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H10.<span>
                    <span>O2 Saturation (Pulse Oximertry) %:<span>
                </legend>
                <div class="row">
                    <label for="h10date">H10a. Date:</label>
                    <input id="h10date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h10value">H10b. O2 saturation %:</label>
                    <input id="h10value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H10c. Check if NOT tested</label>
                </div>
                <div class="row">
                    <label for="h10other">H10d. Please specify source and amount of supplemental O2%:</label>
                    <input id="h10other" type="text"/>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H11.<span>
                    <span>Hemoglobin (gm/dL):<span>
                </legend>
                <div class="row">
                    <label for="h11date">H11a. Date:</label>
                    <input id="h11date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h11value">H11b.Hemoglobin:</label>
                    <input id="h11value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H11c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H12.<span>
                    <span>Hematocrit (%):<span>
                </legend>
                <div class="row">
                    <label for="h12date">H12a. Date:</label>
                    <input id="h12date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h12value">H12b. Blood Pressure:</label>
                    <input id="h12value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H12c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H13.<span>
                    <span>WBC (K/mm3):<span>
                </legend>
                <div class="row">
                    <label for="h13date">H13a. Date:</label>
                    <input id="h13date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h13value">H13b. WBC:</label>
                    <input id="h13value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H13c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H14.<span>
                    <span>HbA1c (%):<span>
                </legend>
                <div class="row">
                    <label for="h14date">H14a. Date:</label>
                    <input id="h14date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h14value">H14b. HbA1c:</label>
                    <input id="h14value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H14c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H15.<span>
                    <span>Sodium (mEq/L):<span>
                </legend>
                <div class="row">
                    <label for="h15date">H15a. Date:</label>
                    <input id="h15date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h15value">H15b. Sodium:</label>
                    <input id="h15value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H15c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H16.<span>
                    <span>Potassium (mEq/L):<span>
                </legend>
                <div class="row">
                    <label for="h16date">H16a. Date:</label>
                    <input id="h16date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h16value">H16b. Potassium:</label>
                    <input id="h16value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H16c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H17.<span>
                    <span>BUN (mg/dL):<span>
                </legend>
                <div class="row">
                    <label for="h17date">H17a. Date:</label>
                    <input id="h17date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h17value">H17b. BUN:</label>
                    <input id="h17value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H17c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H18.<span>
                    <span>Creatinine (mg/dL):<span>
                </legend>
                <div class="row">
                    <label for="h18date">H18a. Date:</label>
                    <input id="h18date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h18value">H18b. Creatinine:</label>
                    <input id="h18value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H18c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H19.<span>
                    <span>Albumin (gm/dL):<span>
                </legend>
                <div class="row">
                    <label for="h19date">H19a. Date:</label>
                    <input id="h19date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h19value">H19b. Albumin:</label>
                    <input id="h19value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H9c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H20.<span>
                    <span>Prealbumin (mg/dL):<span>
                </legend>
                <div class="row">
                    <label for="h20date">H20a. Date:</label>
                    <input id="h20date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h20value">H20b. Prealbumin:</label>
                    <input id="h20value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H20c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H21.<span>
                    <span>INR:<span>
                </legend>
                <div class="row">
                    <label for="h21date">H21a. Date:</label>
                    <input id="h21date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h21value">H21b. INR:</label>
                    <input id="h21value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H21c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H22.<span>
                    <span>Left Ventricular Ejection Fraction (%):<span>
                </legend>
                <div class="row">
                    <label for="h22date">H22a. Date:</label>
                    <input id="h22date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <label for="h22value">H22b. Left Ventircular Ejection Fraction:</label>
                    <input id="h22value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H22c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H23.<span>
                    <span>Arterial Blood Gases (ABGs):<span>
                </legend>
                <div class="row">
                    <label for="h23date">H23a. Date:</label>
                    <input id="h23date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H23c. Check if NOT tested</label>
                </div>
                <div class="row">
                    <label for="h23other">H23d. Please specify source and amount of supplemental O2:</label>
                    <input id="h23other" type="text"/>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H24.<span>
                    <span>pH:<span>
                </legend>
                <div class="row">
                    <label for="h24value">H24b. pH:</label>
                    <input id="h24value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H24c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H25.<span>
                    <span>PaCO2 (mm/Hg):<span>
                </legend>
                <div class="row">
                    <label for="h25value">H25b. PaCO2:</label>
                    <input id="h25value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H25c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H26.<span>
                    <span>HCO3 (mEq/l):<span>
                </legend>
                <div class="row">
                    <label for="h26value">H26b. HCO3:</label>
                    <input id="h26value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H26c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H27.<span>
                    <span>PaO2 (mm/Hg):<span>
                </legend>
                <div class="row">
                    <label for="h27value">H27b. PaO2:</label>
                    <input id="h27value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H27c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H28.<span>
                    <span>SaO2 (%):<span>
                </legend>
                <div class="row">
                    <label for="h28value">H28b. SaO2:</label>
                    <input id="h28value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H28c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H29.<span>
                    <span>B.E. (base excess) (mEq/L):<span>
                </legend>
                <div class="row">
                    <label for="h29value">H29b. B.E.:</label>
                    <input id="h29value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H29c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H30.<span>
                    <span>Pulmonary Function Tests:<span>
                </legend>
                <div class="row">
                    <label for="h30date">H30a. Date:</label>
                    <input id="h30date" type="text" class="kendo-date"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H30c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H31.<span>
                    <span>FVC (liters):<span>
                </legend>
                <div class="row">
                    <label for="h31value">H31b. FVC:</label>
                    <input id="h31value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H31c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H32.<span>
                    <span>FEVI% or FEVI/FVC(%):<span>
                </legend>
                <div class="row">
                    <label for="h32value">H32b. FEVI% or FEVI/FVC:</label>
                    <input id="h32value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H32c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H33.<span>
                    <span>FEVI (liters):<span>
                </legend>
                <div class="row">
                    <label for="h33value">H33b. FEVI (liters):</label>
                    <input id="h33value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H33c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H34.<span>
                    <span>PEF (liters per minute):<span>
                </legend>
                <div class="row">
                    <label for="h34value">H34b. PEF:</label>
                    <input id="h34value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H34c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H35.<span>
                    <span>MVV (liters per minute):<span>
                </legend>
                <div class="row">
                    <label for="h35value">H35b. MVV:</label>
                    <input id="h35value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H35c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H35.<span>
                    <span>MVV (liters per minute):<span>
                </legend>
                <div class="row">
                    <label for="h35value">H35b. MVV:</label>
                    <input id="h35value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H35c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H36.<span>
                    <span>TLC (liters):<span>
                </legend>
                <div class="row">
                    <label for="h36value">H36b. TLC:</label>
                    <input id="h36value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H36c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H37.<span>
                    <span>FRC (liters):<span>
                </legend>
                <div class="row">
                    <label for="h37value">H37b. FRC:</label>
                    <input id="h37value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H37c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H38.<span>
                    <span>RV (liters):<span>
                </legend>
                <div class="row">
                    <label for="h38value">H38b. RV:</label>
                    <input id="h38value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H38c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
        <div class="iform-fieldset" tabindex="-1">
            <fieldset class="fieldset-container-two">
                <legend class="legend-header-two">
                    <span>H39.<span>
                    <span>ERV (liters):<span>
                </legend>
                <div class="row">
                    <label for="h39value">H39b. ERV:</label>
                    <input id="h39value" type="text"/>
                </div>
                <div class="row">
                    <input type="checkbox" id="" value=""/>
                    <label for="">H39c. Check if NOT tested</label>
                </div>
            </fieldset>
        </div>
    </fieldset>
</div>'

?>
<script type="text/javascript">
    var Medication = function() {
        var self = this;
        self.MedicationName = ko.observable("");
        self.Dose = ko.observable("");
        self.Route = ko.observable("");
        self.Frequency = ko.observable("");
        self.PlannedStopDate = ko.observable("");
    }

    var Allergy = function() {
        var self = this;
        self.AllergyName = ko.observable("");
        self.Reaction = ko.observable("");
    }

    var viewModel = function() {
        var self = this;
        self.Medications = ko.observableArray();
        self.Allergies = ko.observableArray();

        self.addMedication = function(){
            self.Medications.push(new Medication());
        }

        self.removeMedication = function(medication){
            self.Medications.remove(medication);
        }

        self.addAllergy = function(){
            self.Allergies.push(new Allergy());
        }

        self.removeAllergy = function(allergy){
            self.Allergies.remove(allergy);
        }

    }
    var vm = new viewModel();
    $(document).ready(function() {
        ko.applyBindings(vm)
    });

</script>
