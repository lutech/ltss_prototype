<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $Body = '
    <div class="genericform-style">
        <h4>VII. Overall Plan of Care / Advance Care Directives</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Overall Plan of Care/Advance Care Directives</legend>'
            .new IformQuestion("A1", "Have the patient (or representative) and the care team (or physician) documented agreed-upon care goals and expected dates of completion or re-evaluation?", 2, null ,null,
                new RadioQuestionData("A1", array(
                        new RadioCheckQuestion("0. No, but this work is in process", "0"),
                        new RadioCheckQuestion("1. Yes", "1"),
                        new RadioCheckQuestion("9. Unclear or unknown", "1"))
                )
            )
            .new IformQuestion("A2", "Which description best fits the patient's overall status?", 2, null ,null,
                new RadioQuestionData("A2", array(
                        new RadioCheckQuestion("1. The patient is stable with no risk for serious complications and death (beyond those typical of the patient's age).", "0"),
                        new RadioCheckQuestion("2. The patient is temporarily facing high health risks but likely to return to being stable without risk for serious complications and death (beyond those typical of the patient's age)", "1"),
                        new RadioCheckQuestion("3. The patient is likely to remain in fragile health and have ongoing high risks of serious complications and death", "1"),
                        new RadioCheckQuestion("4. The patient has serious progressive conditions that could lead to death within a year.", "1"),
                        new RadioCheckQuestion("9. The patient's condition is unknown or unclear to the respondent.", "1"))
                )
            )
            .new IformQuestion("A3", "In anticipation of serious clinical complications, has the patient made care decisions which are documented in the medical record?", 2, null ,null,
                new CheckQuestionData("A3", array(
                        new RadioCheckQuestion("1. The patient has designated a decision-maker (if the patient is unable to make decisions) which is documented in the medical record. ", "0"),
                        new RadioCheckQuestion("2. The patient (or surrogate) has made a decision to forgo resuscitation which is documented in the medical record.", "1"))
                )
            )
        .'</fieldset>
    </div>
'?>
