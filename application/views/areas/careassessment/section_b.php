<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $WorkspaceHeader = '
    <h3>CARE Assessment - II. Admission Information</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

        </div>
    </div>
'?>

<?php $Body = '
    <div class="genericform-style">
        <h4>II. Admission Information</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Pre-admission Service Use </legend>'
            .new IformQuestion("A1", "Admitted From", 2, null ,"Immediately preceding this admission, where was the patient?",
                new RadioQuestionData("a1", array(
                        new RadioCheckQuestion("1 - Community residential setting", "1"),
                        new RadioCheckQuestion("2 - Long-term nursing facility", "2"),
                        new RadioCheckQuestion("3 - Skilled nursing facility", "3"),
                        new RadioCheckQuestion("4 - Hospital emergency department", "4"),
                        new RadioCheckQuestion("5 - Short-stay acute hospital", "5"),
                        new RadioCheckQuestion("6 - Long-term care hospital", "6"),
                        new RadioCheckQuestion("7 - Inpatient rehabilitation hospital or unit", "7"),
                        new RadioCheckQuestion("8 - Psychiatric hospital or unit", "8"),
                        new RadioCheckQuestion("9 - Other", "9"))
                )
            )
            .new IformQuestion("A2","If admitted from a medical setting, what was the primary diagnosis being treated in the previous setting?", 2, null, null,
                new TextBoxQuestionData("Previous primary diagnosis", null))
            .new IformQuestion("A3", "In the last 2 months,", 2, null , "what other medical services besides those identified in A1, has the patient received?",
                new CheckQuestionData("a3", array(
                        new RadioCheckQuestion("a. Skilled nursing facility", "1"),
                        new RadioCheckQuestion("b. Short-stay acute hospital", "2"),
                        new RadioCheckQuestion("c. Long-tern care hospital", "3"),
                        new RadioCheckQuestion("d. Inpatient rehabilitation hospital or unit", "4"),
                        new RadioCheckQuestion("e. Psychiatric hospital or unit", "4"),
                        new RadioCheckQuestion("f. Home health agency", "4"),
                        new RadioCheckQuestion("g. Hospice", "4"),
                        new RadioCheckQuestion("h. Outpatient services", "4"),
                        new RadioCheckQuestion("i. None", "4"))
                )
            )
            .new IformQuestion("A4", "Within this Acute Care Hospital Stay,", 2, null , "on what other units has the patient been treated prior to coming to this unit?",
                new CheckQuestionData("a4", array(
                        new RadioCheckQuestion("a. Critical Care/Intensive Care Unit (ICU) -- 1-2 pts per nurse", "1"),
                        new RadioCheckQuestion("b. Step-Down/Intermediate Care Unit (includes Progressive Care) -- 3-6 pts per nurse", "2"),
                        new RadioCheckQuestion("c. General/Medical Unit or Floor -- 6 or more pts per nurse", "3"),
                        new RadioCheckQuestion("d. No previous units or Not applicable", "4"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">B. Patient History Prior to This Current Illness, Exacerabation, or Injury </legend>'
            .new IformQuestion("B1", "Prior to this recent illness, where did the patient live?", 2, null, null,
                new RadioQuestionData("b1", array(
                        new RadioCheckQuestion("1. Private residence", "1"),
                        new RadioCheckQuestion("2. Community based residence", "2"),
                        new RadioCheckQuestion("3. Long term care facility", "3"),
                        new RadioCheckQuestion("4. Other", "4"),
                        new RadioCheckQuestion("9. Unknown", "5"))
                )
            )
            .new IformQuestion("B2","If the patient lived in the community prior to this illness, provide the patient's ZIP code", 2, null, null,
                new TextBoxQuestionData("Zip Code", null)).
            "<div class='row'>".
                "<input type='checkbox' id='' value=''/>".
                "<label for=''>Lives outside U.S.</label>".
            "</div>".
            "<div class='row'>".
                "<input type='checkbox' id='' value=''/>".
                "<label for=''>Unknown</label>".
            "</div>"
            .new IformQuestion("B3", "If the patient lived in the community prior to this illness, what help was used?,", 2, null , null,
                new CheckQuestionData("B3", array(
                        new RadioCheckQuestion("a. No help received or no help necessary", "1"),
                        new RadioCheckQuestion("b. Unpaid Assistance", "2"),
                        new RadioCheckQuestion("c. Paid Assistance", "3"),
                        new RadioCheckQuestion("d. Unknown", "4"))
                )
            )
            .new IformQuestion("B3a", "If the patient lived in the community prior to this illness, who did the patient live with?,", 2, null , null,
                new CheckQuestionData("B3a", array(
                        new RadioCheckQuestion("a. Lives alone", "1"),
                        new RadioCheckQuestion("b. Lives with paid helper", "2"),
                        new RadioCheckQuestion("c. Lives with other(s)", "3"),
                        new RadioCheckQuestion("d. Unknown", "4"))
                )
            )
            .new IformQuestion("B4", "If the patient lived in the community prior to this illness, exacerbation or injury,", 2, null , "are there structural barriers in the patient's <strong>residence</strong> that could interfere with the patient's discharge?",
                new CheckQuestionData("B4", array(
                        new RadioCheckQuestion("a. Structural barriers are <strong>not an issue</strong>", "1"),
                        new RadioCheckQuestion("b. <strong>Stairs inside the living setting</strong> that must be used by patient (e.g. to get to toileting, sleeping, eating areas)", "2"),
                        new RadioCheckQuestion("c. <strong>Stairs leading from inside to outisde</strong> of living setting.", "3"),
                        new RadioCheckQuestion("d. <strong>Narrow or obstructed doorways</strong> for patients using wheelchairs or walkers.", "4"),
                        new RadioCheckQuestion("e. <strong>Insufficient space</strong> to accomodate <strong>extra equipment</strong> (e.g., hospital bed, vent equipment)", "5"),
                        new RadioCheckQuestion("f. <strong>Other</strong>", "6"),
                        new RadioCheckQuestion("g. <strong>Unknown</strong>", "7"))
                )
            )."
            <div class='iform-fieldset' tabindex='-1'>
                <fieldset class='fieldset-container-two'>
                    <legend class='legend-header-two'>
                        <span>B5.<span>
                        <span>Prior Functioning<span>
                    </legend>
                    <span class='header-info'>
                        Indicate the patient's usual ability with everyday activities prior to this current illness, exacerbation, or injury.
                    </span>
                </fieldset>
            </div>"
            .new IformQuestion("B5a", "Self Care", 2, null , "Did the patient need help bathing, dressing, using the toilet, or eating?",
                new CheckQuestionData("B5a", array(
                        new RadioCheckQuestion("3. Independent", "1"),
                        new RadioCheckQuestion("2. Needed Some Help", "2"),
                        new RadioCheckQuestion("1. Dependent", "3"),
                        new RadioCheckQuestion("8. Not Applicable", "4"),
                        new RadioCheckQuestion("9. Unknown", "4"))
                )
            )
            .new IformQuestion("B5b", "Indoor Mobility (Ambulation)", 2, null , "Did the patient need assistance with walking from room to room (with or without devices such as cane, crutch, or walker)?",
                new CheckQuestionData("B5b", array(
                        new RadioCheckQuestion("3. Independent", "1"),
                        new RadioCheckQuestion("2. Needed Some Help", "2"),
                        new RadioCheckQuestion("1. Dependent", "3"),
                        new RadioCheckQuestion("8. Not Applicable", "4"),
                        new RadioCheckQuestion("9. Unknown", "4"))
                )
            )
            .new IformQuestion("B5c", "Stairs (Ambulation)", 2, null , "Did the patient need assistance with internal or external stairs (with or without devices such as cane, crutch, or walker)?",
                new CheckQuestionData("B5c", array(
                        new RadioCheckQuestion("3. Independent", "1"),
                        new RadioCheckQuestion("2. Needed Some Help", "2"),
                        new RadioCheckQuestion("1. Dependent", "3"),
                        new RadioCheckQuestion("8. Not Applicable", "4"),
                        new RadioCheckQuestion("9. Unknown", "4"))
                )
            )
            .new IformQuestion("B5d", "Indoor Mobility (Wheelchair)", 2, null , "Did the patient need assistance with moving from room to room using a wheelchair, scooter, or other wheeled mobility device?",
                new CheckQuestionData("B5d", array(
                        new RadioCheckQuestion("3. Independent", "1"),
                        new RadioCheckQuestion("2. Needed Some Help", "2"),
                        new RadioCheckQuestion("1. Dependent", "3"),
                        new RadioCheckQuestion("8. Not Applicable", "4"),
                        new RadioCheckQuestion("9. Unknown", "4"))
                )
            )
            .new IformQuestion("B5e", "Functional Cognition", 2, null , "Did the patient need help planning regular tasks, such as shopping or remembering to take medication?",
                new CheckQuestionData("B5e", array(
                        new RadioCheckQuestion("3. Independent", "1"),
                        new RadioCheckQuestion("2. Needed Some Help", "2"),
                        new RadioCheckQuestion("1. Dependent", "3"),
                        new RadioCheckQuestion("8. Not Applicable", "4"),
                        new RadioCheckQuestion("9. Unknown", "4"))
                )
            )
            .new IformQuestion("B6", "Mobility Devices and Aids Used Prior to Current Illness, Exacerbation, or Injury", 2, null , null,
                new CheckQuestionData("B6", array(
                        new RadioCheckQuestion("a. Cane/crutch", "1"),
                        new RadioCheckQuestion("b. Walker", "2"),
                        new RadioCheckQuestion("c. Orthotics/Prosthetics", "3"),
                        new RadioCheckQuestion("d. Wheelchair/scooter full time", "4"),
                        new RadioCheckQuestion("e. Wheelchair/scooter part time", "5"),
                        new RadioCheckQuestion("f. Mechanical lift", "6"),
                        new RadioCheckQuestion("g. Other", "7"),
                        new RadioCheckQuestion("h. None apply", "7"),
                        new RadioCheckQuestion("i. Unknown", "7"))
                )
            )
            .new IformQuestion("B7", "History of Falls.", 2, null , "Has the patient had two or more falls in the past year or any fall with injury in the past year?",
                new RadioQuestionData("B7", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"),
                        new RadioCheckQuestion("9. Unknown", "3"))
                )
            )
    .'</fieldset>
    </div>';
?>