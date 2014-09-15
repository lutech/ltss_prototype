<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $WorkspaceHeader = '
    <h3>CARE Assessment - I. Administrative Items</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button>Save & Next</button>
        </div>
    </div>
'?>
<?php $Body = '
    <div class="genericform-style">
        <h4>I. Administrative Items</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Assessment Type </legend>'
            .new IformQuestion("1", "Reason for Assessment", 2, null ,null,
                new RadioQuestionData("reasonAssessment", array(
                        new RadioCheckQuestion("1 - Admit", "1"),
                        new RadioCheckQuestion("2 - Interim", "2"),
                        new RadioCheckQuestion("3 - Discharge", "3"),
                        new RadioCheckQuestion("4 - Expired", "4"))
                )
            )
            .new IformQuestion("2","Assessment Reference Date", 2, null, null,
                new TextBoxQuestionData("Assessment Reference Date", "date")).'
        </fieldset>
        <fieldset class="fieldset-container-one">
             <legend class="legend-header-one">B. Provider Information</legend>'
            .new IformQuestion("1","Provider's Name", 2, null, null,
                new TextBoxQuestionData("Provider's Name", null)).'
        </fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">C. Patient Information</legend>'
            .new IformQuestion(null, "1. Patient's First Name", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "2. Patient's Middle Name", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "3. Patient's Last Name", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "4. Patient' Nickname", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "5. Patient's Medicare Health Insurance Number", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "6. Patient's Medicaid Number ", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "7. Patient's Facility/Agency Identification Number", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "8a. Admission Date", 2, null, null,
                new TextSummaryQuestionData("date"))
            .new IformQuestion(null, "8b. Birth Date", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion(null, "9. Social Security Number", 2, null, null,
                new SpanSummaryQuestionData("Test"))
            .new IformQuestion("10", "Gender", 2, null ,null,
                new RadioQuestionData("gender", array(
                        new RadioCheckQuestion("1 - Male", "1"),
                        new RadioCheckQuestion("2 - Gender", "2"))
                )
            )
            .new IformQuestion("11", "Race/Ethnicity", 2, null ,null,
                new RadioQuestionData("race", array(
                        new RadioCheckQuestion("1 - American Indian or Alaska Native", "1"),
                        new RadioCheckQuestion("2 - Asian", "2"),
                        new RadioCheckQuestion("3 - Black or African American", "3"),
                        new RadioCheckQuestion("4 - Hispanic or Latino", "4"),
                        new RadioCheckQuestion("5 - Native Hawaiian or Pacific Islander", "5"),
                        new RadioCheckQuestion("6 - White", "6"),
                        new RadioCheckQuestion("7 - Unknown", "7"))
                )
            )
            .new IformQuestion("12", "Is English the patient's primary language?", 2, null ,null,
                new RadioQuestionData("primLang", array(
                        new RadioCheckQuestion("0 - No", "0"),
                        new RadioCheckQuestion("1 - Yes", "1"))
                )
            )
            .new IformQuestion("12a", "If English is not the patient's primary language, what is the patient's primary language?", 2, null ,null,
                new RadioQuestionData("lang", array(
                        new RadioCheckQuestion("1 - English", "1"),
                        new RadioCheckQuestion("2 - French", "2"),
                        new RadioCheckQuestion("3 - Spanish", "3"),
                        new RadioCheckQuestion("4 - Russian", "4"))
                )
            )
            .new IformQuestion("13", "Does the patient want or need an interpreter (oral or sign language) to communicate with a doctor or health care staff?", 2, null ,null,
                new RadioQuestionData("needInterpreter", array(
                        new RadioCheckQuestion("0 - No", "0"),
                        new RadioCheckQuestion("1 - Yes", "1"))
                )
            )
        .'</fieldset>
         <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">D. Payer Information</legend>'
            .new IformQuestion(null, "Current Payment Sources", 2, null ,null,
                new CheckQuestionData("chklang", array(
                        new RadioCheckQuestion("1 - None", "1"),
                        new RadioCheckQuestion("2 - Medicare (traditional fee-for-service)", "2"),
                        new RadioCheckQuestion("3 - Medicare (managed care)", "3"),
                        new RadioCheckQuestion("4 - Medicaid (traditional fee-for-service)", "4"),
                        new RadioCheckQuestion("5 - Medicaid (managed care)", "4"),
                        new RadioCheckQuestion("6 - Worker’s compensation", "4"),
                        new RadioCheckQuestion("7 - Title programs", "4"))
                )
            )
        .'</fieldset>
    </div>
'
?>
<?php $Script='
    <script type="text/javascript">
    </script>
'?>