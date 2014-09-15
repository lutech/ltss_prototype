<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $Body = '
    <div class="genericform-style">
        <h4>V. Impairments</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Bladder and Bowel Management:  Use of Device(s) and Incontinence (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("A1", "Does the patient have any impairments with bladder or bowel management (e.g., use of a device or incontinence)?", 2, null , null,
                new RadioQuestionData("A1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
        .'  <div class="iform-fieldset" tabindex="-1">
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">
                        <span>A2.<span>
                        <span>Does the patient use an <strong>external or indwelling device</strong> or require intermittent catheterization?<span>
                    </legend>
                    <span class="header-info">
                        Bladder
                    </span>
                    <div class="row">
                        <input type="radio" id="a20a" name="a2a" />
                        <label for="a20a">0. No</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a21a" name="a2a" />
                        <label for="a21a">1. Yes</label>
                    </div>
                    <span class="header-info">
                        Bowel
                    </span>
                    <div class="row">
                        <input type="radio" id="a20b" name="a2b" />
                        <label for="a20b">0. No</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a21b" name="a2b" />
                        <label for="a21b">1. Yes</label>
                    </div>
                </fieldset>
            </div>
            <div class="iform-fieldset" tabindex="-1">
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">
                        <span>A3.<span>
                        <span>Indicate the <strong>frequency of incontinence.</strong><span>
                    </legend>
                    <span class="header-info">
                        Bladder
                    </span>
                    <div class="row">
                        <input type="radio" id="a30a" name="a3a" />
                        <label for="a30a">0. Continent</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a31a" name="a3a" />
                        <label for="a31a">1. Stress incontinence only</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a32a" name="a3a" />
                        <label for="a32a">2. Incontinent less than daily</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a33a" name="a3a" />
                        <label for="a33a">3. Incontinent daily</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a34a" name="a3a" />
                        <label for="a34a">4. Always incontinent</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a35a" name="a3a" />
                        <label for="a35a">5. No urine/bowel output</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a39a" name="a3a" />
                        <label for="a39a">9. Not applicable</label>
                    </div>
                    <span class="header-info">
                        Bowel
                    </span>
                    <div class="row">
                        <input type="radio" id="a30b" name="a3b" />
                        <label for="a30b">0. Continent</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a31b" name="a3b" />
                        <label for="a31b">1. Stress incontinence only</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a32b" name="a3b" />
                        <label for="a32b">2. Incontinent less than daily</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a33b" name="a3b" />
                        <label for="a33b">3. Incontinent daily</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a34b" name="a3b" />
                        <label for="a34b">4. Always incontinent</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a35b" name="a3b" />
                        <label for="a35b">5. No urine/bowel output</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a39b" name="a3b" />
                        <label for="a39b">9. Not applicable</label>
                    </div>
                </fieldset>
            </div>
            <div class="iform-fieldset" tabindex="-1">
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">
                        <span>A4.<span>
                        <span>Does the patient <strong>need assistance</strong> to manage equipment or devices related to bladder or bowel care (e.g., urinal, bedpan, indwelling catheter, intermittent catheterization, ostomy, incontinence pads/undergarments)?<span>
                    </legend>
                    <span class="header-info">
                        Bladder
                    </span>
                    <div class="row">
                        <input type="radio" id="a40a" name="a4a" />
                        <label for="a40a">0. No</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a41a" name="a4a" />
                        <label for="a41a">1. Yes</label>
                    </div>
                    <span class="header-info">
                        Bowel
                    </span>
                    <div class="row">
                        <input type="radio" id="a40b" name="a4b" />
                        <label for="a40b">0. No</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a41b" name="a4b" />
                        <label for="a41b">1. Yes</label>
                    </div>
                </fieldset>
            </div>
            <div class="iform-fieldset" tabindex="-1">
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">
                        <span>A5.<span>
                        <span>If the patient is incontinent or has an indwelling device, was the patient incontinent (excluding stress incontinence) immediately prior to the current illness, exacerbation, or injury?<span>
                    </legend>
                    <span class="header-info">
                        Bladder
                    </span>
                    <div class="row">
                        <input type="radio" id="a50a" name="a5a" />
                        <label for="a50a">0. No</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a51a" name="a5a" />
                        <label for="a51a">1. Yes</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a59a" name="a5a" />
                        <label for="a59a">9. Unknown</label>
                    </div>
                    <span class="header-info">
                        Bowel
                    </span>
                    <div class="row">
                        <input type="radio" id="a50b" name="a5b" />
                        <label for="a50b">0. No</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a51b" name="a5b" />
                        <label for="a51b">1. Yes</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="a59b" name="a5b" />
                        <label for="a59b">9. Unknown</label>
                    </div>
                </fieldset>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">B. Swallowing (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("B1", "Does the patient have any signs or symptoms of a possible swallowing disorder?", 2, null , null,
                new CheckQuestionData("B1", array(
                        new RadioCheckQuestion("B1a. Complaints of difficulty or pain with swallowing", "1"),
                        new RadioCheckQuestion("B1b. Coughing or choking during meals or when swallowing medications", "2"),
                        new RadioCheckQuestion("B1c. Holding food in mouth/cheeks or residual food in mouth after meals", "2"),
                        new RadioCheckQuestion("B1d. Loss of liquids/solids from mouth when eating or drinking", "2"),
                        new RadioCheckQuestion("B1e. NPO: intake not by mouth", "2"),
                        new RadioCheckQuestion("B1f. Other", "2"),
                        new RadioCheckQuestion("B1g. None", "2"))
                )
            )
            .new IformQuestion("B2", "Describe the patient's usual ability with swallowing (Check one option ONLY.)", 2, null , null,
                new CheckQuestionData("B2", array(
                        new RadioCheckQuestion("B2a. Regular food", "1"),
                        new RadioCheckQuestion("B2b. Modified food consistency/supervision", "2"),
                        new RadioCheckQuestion("B2c. Tube/parenteral feeding", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">C. Hearing, Vision, and Communication (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("C1", "Does the patient have any impairments with hearing, vision, or communication?", 2, null , null,
                new RadioQuestionData("C1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("C1a", "Understanding Verbal Content?", 2, null , null,
                new RadioQuestionData("C1a", array(
                        new RadioCheckQuestion("4. Understands", "1"),
                        new RadioCheckQuestion("3. Usually Understands", "2"),
                        new RadioCheckQuestion("2. Sometimes Understands", "2"),
                        new RadioCheckQuestion("1. Rarely/Never Understands", "2"),
                        new RadioCheckQuestion("8. Unable to assess", "2"),
                        new RadioCheckQuestion("9. Unknown", "2"))
                )
            )
            .new IformQuestion("C1b", "Expression of Ideas and Wants", 2, null , null,
                new RadioQuestionData("C1b", array(
                        new RadioCheckQuestion("4. Expresses complex messages without difficulty and with speech that is clear and easy to understand", "1"),
                        new RadioCheckQuestion("3. Exhibits some difficulty with expressing needs and ideas (e.g., some words or finishing thoughts) or speech is not clear", "2"),
                        new RadioCheckQuestion("2. Frequently exhibits difficulty with expressing needs and ideas", "2"),
                        new RadioCheckQuestion("1. Rarely/Never expresses self or speech is very difficult to understand", "2"),
                        new RadioCheckQuestion("8. Unable to assess", "2"),
                        new RadioCheckQuestion("9. Unknown", "2"))
                )
            )
            .new IformQuestion("C1c", "Ability to See in Adequate Light (with glasses or other visual appliances)", 2, null , null,
                new RadioQuestionData("C1c", array(
                        new RadioCheckQuestion("3. Adequate: Sees fine detail, including regular print in newspapers/books", "2"),
                        new RadioCheckQuestion("2. Mildly to Moderately Impaired: Can identify objects; may see large print", "2"),
                        new RadioCheckQuestion("1. Severely Impaired:  No vision or object identification questionable", "2"),
                        new RadioCheckQuestion("8. Unable to assess", "2"),
                        new RadioCheckQuestion("9. Unknown", "2"))
                )
            )
            .new IformQuestion("C1d", "Ability to Hear (with hearing aid or hearing appliance, if normally used)", 2, null , null,
                new RadioQuestionData("C1d", array(
                        new RadioCheckQuestion("3. Adequate: Hears normal conversation and TV without difficulty", "2"),
                        new RadioCheckQuestion("2. Mildly to Moderately Impaired: Difficulty hearing in some environments or speaker may need to increase volumne of speak distinctly", "2"),
                        new RadioCheckQuestion("1. Severely Impaired:  Absence of useful hearing", "2"),
                        new RadioCheckQuestion("8. Unable to assess", "2"),
                        new RadioCheckQuestion("9. Unknown", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">D. Weight-bearing (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("D1", "Does the patient have any clinician-ordered weight bearing or limb/spinal loading restrictions (including upper body lift, push, pull, or carry restrictions)?", 2, null , null,
                new RadioQuestionData("D1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("D1a", "Upper Extremity - Left", 2, null , null,
                new RadioQuestionData("D1a", array(
                        new RadioCheckQuestion("1. Fully weight-bearing: No clinician ordered restrictions", "1"),
                        new RadioCheckQuestion("0. Not fully weight-bearing: Patient has clinician ordered restrictions", "2"))
                )
            )
            .new IformQuestion("D1b", "Upper Extremity - Right", 2, null , null,
                new RadioQuestionData("D1b", array(
                        new RadioCheckQuestion("1. Fully weight-bearing: No clinician ordered restrictions", "1"),
                        new RadioCheckQuestion("0. Not fully weight-bearing: Patient has clinician ordered restrictions", "2"))
                )
            )
            .new IformQuestion("D1c", "Lower Extremity - Left", 2, null , null,
                new RadioQuestionData("D1c", array(
                        new RadioCheckQuestion("1. Fully weight-bearing: No clinician ordered restrictions", "1"),
                        new RadioCheckQuestion("0. Not fully weight-bearing: Patient has clinician ordered restrictions", "2"))
                )
            )
            .new IformQuestion("D1d", "Lower Extremity - Right", 2, null , null,
                new RadioQuestionData("D1d", array(
                        new RadioCheckQuestion("1. Fully weight-bearing: No clinician ordered restrictions", "1"),
                        new RadioCheckQuestion("0. Not fully weight-bearing: Patient has clinician ordered restrictions", "2"))
                )
            )
        .'</fieldset>
         <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">E. Grip Strength (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("E1", "Does the patient have any impairments with grip strength (e.g., reduced/limited or absent)", 2, null , null,
                new RadioQuestionData("E1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("E1a", "Left Hand - Indicate the ability to squeeze your hand", 2, null , null,
                new RadioQuestionData("E1a", array(
                        new RadioCheckQuestion("2. Normal", "1"),
                        new RadioCheckQuestion("1. Reduced/Limited", "2"),
                        new RadioCheckQuestion("0. Absent", "2"))
                )
            )
            .new IformQuestion("E1b", "Right Hand - Indicate the ability to squeeze your hand", 2, null , null,
                new RadioQuestionData("E1b", array(
                        new RadioCheckQuestion("2. Normal", "1"),
                        new RadioCheckQuestion("1. Reduced/Limited", "2"),
                        new RadioCheckQuestion("0. Absent", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">F. Respiratory Status (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("F1", "Does the patient have any impairments with respiratory status?", 2, null , null,
                new RadioQuestionData("F1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("F1a", "<strong>With Supplemental O2</strong>, was the patient dyspneic or noticeably short of breath?", 2, null , null,
                new RadioQuestionData("F1a", array(
                        new RadioCheckQuestion("5. Severe, with evidence the patient is struggling to breath at rest", "1"),
                        new RadioCheckQuestion("4. Mild at rest", "2"),
                        new RadioCheckQuestion("3. With minimal exertion", "2"),
                        new RadioCheckQuestion("2. With moderate exertion", "2"),
                        new RadioCheckQuestion("1. When climbing stairs", "2"),
                        new RadioCheckQuestion("0. Never, patient was not short of breath", "2"),
                        new RadioCheckQuestion("8. Not assessed", "2"),
                        new RadioCheckQuestion("9. Not applicable", "2"))
                )
            )
            .new IformQuestion("F1b", "<strong>Without Supplemental O2</strong>, was the patient dyspneic or noticeably short of breath?", 2, null , null,
                new RadioQuestionData("F1b", array(
                        new RadioCheckQuestion("5. Severe, with evidence the patient is struggling to breath at rest", "1"),
                        new RadioCheckQuestion("4. Mild at rest", "2"),
                        new RadioCheckQuestion("3. With minimal exertion", "2"),
                        new RadioCheckQuestion("2. With moderate exertion", "2"),
                        new RadioCheckQuestion("1. When climbing stairs", "2"),
                        new RadioCheckQuestion("0. Never, patient was not short of breath", "2"),
                        new RadioCheckQuestion("8. Not assessed", "2"),
                        new RadioCheckQuestion("9. Not applicable", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">G. Endurance (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("G1", "Does the patient have any impairments with endurance?", 2, null , null,
                new RadioQuestionData("F1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("G1a", "Mobility Endurance: Was the patience able to walk or wheel 50 feet (15 meters)?", 2, null , null,
                new RadioQuestionData("G1a", array(
                        new RadioCheckQuestion("0. No, could not do", "1"),
                        new RadioCheckQuestion("1. Yes, can do with rest", "2"),
                        new RadioCheckQuestion("2. Yes, can do without rest", "2"),
                        new RadioCheckQuestion("8. Not assessed due to medical restriction", "2"))
                )
            )
            .new IformQuestion("G1b", "Sitting Endurance:  Was the patieng able to tolerate sitting for 15 minutes?", 2, null , null,
                new RadioQuestionData("G1b", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes, with support", "2"),
                        new RadioCheckQuestion("2. Yes, without support", "2"),
                        new RadioCheckQuestion("8. Not assessed due to medical restriction", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">H. Mobility Devices and Aids Needed (Complete during the 2-day assessment period.) </legend>'
            .new IformQuestion("H1", "Indicate all mobility devices and aids needed at time of assessment.", 2, null , null,
                new CheckQuestionData("H1", array(
                        new RadioCheckQuestion("a. Canes/crutch", "1"),
                        new RadioCheckQuestion("b. Walker", "2"),
                        new RadioCheckQuestion("c. Orthotics/prosthetics", "2"),
                        new RadioCheckQuestion("d. Wheelchair/scooter full time", "2"),
                        new RadioCheckQuestion("e. Wheelchair/scooter part time", "2"),
                        new RadioCheckQuestion("f. Mechanical lift", "2"),
                        new RadioCheckQuestion("g. Other", "2"),
                        new RadioCheckQuestion("h. None apply", "2"))
                )
            )
        .'</fieldset>
    </div>'
?>