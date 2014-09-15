<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $WorkspaceHeader = '
    <h3>CARE Assessment - IV. Cognitive Status, Mood & Pain</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

        </div>
    </div>
'?>

<?php $Body = '
    <div class="genericform-style">
        <h4>IV. Cognitive Status, Mood & Pain</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Comatose (Complete during the 2-day assessment period.</legend>'
            .new IformQuestion("A1", "Persistent vegetative state/no discernible conciousness at time of admission", 2, null , null,
                new RadioQuestionData("A1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">B. Temporal Orientation/Mental Status (Interview during the 2-day assessment period.)</legend>
            <span class="header-info">
                B1. Interview Attempted
            </span>'
            .new IformQuestion("B1a", "Interview Attempted?", 2, null , null,
                new RadioQuestionData("B1a", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("B1b", "Indicate reason that the interview was not attempted", 2, null , null,
                new RadioQuestionData("B1b", array(
                        new RadioCheckQuestion("1. Unresponsive or minimally conscious", "1"),
                        new RadioCheckQuestion("2. Communication disorder", "2"),
                        new RadioCheckQuestion("3. No interpreter available", "2"))
                )
            )

        .'  <span class="header-info">
                B3. Brief Interview for Mental Status
            </span>'
            .new IformQuestion("B3a", "Repetition of Three Words", 2, null , null,
                new RadioQuestionData("B3a", array(
                        new RadioCheckQuestion("3. Three", "1"),
                        new RadioCheckQuestion("2. Two", "2"),
                        new RadioCheckQuestion("1. One", "2"),
                        new RadioCheckQuestion("0. None", "2"))
                )
            )
            .new IformQuestion("B3b.1.", "Year, Month, Day", 2, null , null,
                new RadioQuestionData("B3b1", array(
                        new RadioCheckQuestion("3. Correct", "1"),
                        new RadioCheckQuestion("2. Missed by 1 year", "2"),
                        new RadioCheckQuestion("1. Missed by 2 to 5 years", "2"),
                        new RadioCheckQuestion("0. Missed by more than 5 years or no answer", "2"))
                )
            )
            .new IformQuestion("B3b.2.", "Ask patient: \"What month are we in right now?\"", 2, null , null,
                new RadioQuestionData("B3a", array(
                        new RadioCheckQuestion("2. Accurate within 5 days", "1"),
                        new RadioCheckQuestion("1. Missed by 6 days to 1 month", "2"),
                        new RadioCheckQuestion("0. Missed by more than 1 month or no answer", "2"))
                )
            )
            .new IformQuestion("B3b.3.", "Ask patient: \"What day of the week is today?\"", 2, null , null,
                new RadioQuestionData("B3a", array(
                        new RadioCheckQuestion("2. Accurate", "1"),
                        new RadioCheckQuestion("1. Incorrect or no answer", "2"))
                )
            )
            .new IformQuestion("B3c.1", "Recall: Ask patient \"Let's go back to the first question.  What were those three words that I asked you to repeat?\"", 2, null , null,
                new RadioQuestionData("B3c.1", array(
                        new RadioCheckQuestion("2. Yes, no cue required", "1"),
                        new RadioCheckQuestion("1. Yes, after cuing (\"something to wear\")", "2"),
                        new RadioCheckQuestion("0. No, could not recall", "2"))
                )
            )
            .new IformQuestion("B3c.2", "Recalls \"blue\"?", 2, null , null,
                new RadioQuestionData("B3c.2", array(
                        new RadioCheckQuestion("2. Yes, no cue required", "1"),
                        new RadioCheckQuestion("1. Yes, after cuing (\"a color\")", "2"),
                        new RadioCheckQuestion("0. No, could not recall", "2"))
                )
            )
            .new IformQuestion("B3c.3", "Recalls \"bed\"?", 2, null , null,
                new RadioQuestionData("B3c.2", array(
                        new RadioCheckQuestion("2. Yes, no cue required", "1"),
                        new RadioCheckQuestion("1. Yes, after cuing (\"a piece of furniture\")", "2"),
                        new RadioCheckQuestion("0. No, could not recall", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">C. Observbational Assessment of Cognitive Status (Interview during the 2-day assessment period.)</legend>
            <span class="header-info">
                Complete this section only if patient could not be interviewed.
            </span>'
            .new IformQuestion("C1", "Memory/recall ability", 2, null , null,
                new CheckQuestionData("C1", array(
                        new RadioCheckQuestion("C1a. Current season", "1"),
                        new RadioCheckQuestion("C1b. Location of own room", "2"),
                        new RadioCheckQuestion("C1c. Staff names and faces", "2"),
                        new RadioCheckQuestion("C1d. That he or she is in a hospital, nursing home, or home", "2"),
                        new RadioCheckQuestion("C1e. None of the above are recalled", "2"),
                        new RadioCheckQuestion("C1f. Unable to assess", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">D. Confusion Assessment Method (CAM&copy;)</legend>
            <span class="header-info">
                Code the following behaviors during the 2-day assessment period.  Indicate status regardless of cause.
            </span>'
            .new IformQuestion("D1", "Inattention", 2, null , "The patient has difficulty focusing attention (e.g., easily distracted, out of touch, or difficulty keeping track of what is said).",
                new RadioQuestionData("D1", array(
                        new RadioCheckQuestion("0. Behavior is not present", "1"),
                        new RadioCheckQuestion("1. Behavior continuously present does not fluctuate", "2"),
                        new RadioCheckQuestion("2. Behavior present, fluctuates (e.g., comes and goes, changes in severity)", "2"))
                )
            )
            .new IformQuestion("D2", "Disorganized thinking", 2, null , "The patient's thinking is disorganized or incoherent (e.g., rambling or irrelevant conversation, unclear or illogical flow of ideas, or unpredictable switching of topics or ideas).",
                new RadioQuestionData("D2", array(
                        new RadioCheckQuestion("0. Behavior is not present", "1"),
                        new RadioCheckQuestion("1. Behavior continuously present does not fluctuate", "2"),
                        new RadioCheckQuestion("2. Behavior present, fluctuates (e.g., comes and goes, changes in severity)", "2"))
                )
            )
            .new IformQuestion("D3", "Altered level of consciousness/alertness", 2, null , "The patient has an altered level of consciousness: vigilant (e.g., startles easil to any sound or touch), lethargic (e.g., repeatedly doses off when asked questions, but responds to voice or touch), stuporous (e.g., very difficult to arouse and keep aroused for the interview), or comatose (e.g., cannot be aroused).",
                new RadioQuestionData("D3", array(
                        new RadioCheckQuestion("0. Behavior is not present", "1"),
                        new RadioCheckQuestion("1. Behavior continuously present does not fluctuate", "2"),
                        new RadioCheckQuestion("2. Behavior present, fluctuates (e.g., comes and goes, changes in severity)", "2"))
                )
            )
            .new IformQuestion("D4", "Psychomotor retardation", 2, null , "Patient has an unusually decreased level of activity (e.g., sluggishness, staring into space, staying in one position, moving very slowly).",
                new RadioQuestionData("D4", array(
                        new RadioCheckQuestion("0. Behavior is not present", "1"),
                        new RadioCheckQuestion("1. Behavior continuously present does not fluctuate", "2"),
                        new RadioCheckQuestion("2. Behavior present, fluctuates (e.g., comes and goes, changes in severity)", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">E. Behavioral Signs & Symptoms (Complete during the 2-day assessment period.)</legend>
            <span class="header-info">
                Has the patient exibited any of the following behaviors during the 2-day assessment period?
            </span>'
            .new IformQuestion("E1", "Physical behavioral symptoms directed toward others (e.g., hitting, kicking, pushing)", 2, null , null,
                new RadioQuestionData("E1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("E2", "Verbal behavioral symptoms directed towards others (e.g., threatening, screaming at others)", 2, null , null,
                new RadioQuestionData("E2", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("E3", "Other disruptive or dangerous behavioral symptoms not directed towards others, including self-injurious behaviors (e.g., hitting or scratching self, attempts to pull out IVs, pacing).", 2, null , null,
                new RadioQuestionData("E3", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">F. Mood(Complete during the 2-day assessment period.)</legend>'
            .new IformQuestion("F1", "Mood Interview Attempted?  Complete the mood interview if you are an IRF, SNF, LTCH, or Home Health agency only.  All other providers may enter \"0\" and skip the Mood Interview.)", 2, null , null,
                    new RadioQuestionData("E3", array(
                            new RadioCheckQuestion("0. No", "1"),
                            new RadioCheckQuestion("1. Yes", "2"))
                    ))
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">F2. Patient Health Questionnaire (PHQ-2&copy;)</legend>
            <span class="header-info">
                <strong>Ask patient:</strong> "During the last 2 weeks, have you been bothered by any of the following problems?"
            </span>'
            .new IformQuestion("F2a", "Little interest or pleasure in doing things?", 2, null , null,
                new RadioQuestionData("F2a", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"),
                        new RadioCheckQuestion("8. Unable to respond", "2"))
                ))
            .new IformQuestion("F2b", "If <strong>Yes</strong>, how many days in the last 2 weeks?", 2, null , null,
                new RadioQuestionData("F2b", array(
                        new RadioCheckQuestion("0. Not at all (0 to 1 days)", "1"),
                        new RadioCheckQuestion("1. Several days (2 to 6 days)", "2"),
                        new RadioCheckQuestion("2. More than half of the das (7 to 11 days)", "2"),
                        new RadioCheckQuestion("3. Nearly every day (12 to 14 days)", "2"))
                ))
            .new IformQuestion("F2c", "Feeling down, depressed, or hopeless?", 2, null , null,
                new RadioQuestionData("F2c", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"),
                        new RadioCheckQuestion("8. Unable to respond", "2"))
                ))
            .new IformQuestion("F2d","If <strong>Yes</strong>, how many days in the last 2 weeks?", 2, null , null,
                new RadioQuestionData("F2d", array(
                        new RadioCheckQuestion("0. Not at all (0 to 1 days)", "1"),
                        new RadioCheckQuestion("1. Several days (2 to 6 days)", "2"),
                        new RadioCheckQuestion("2. More than half of the das (7 to 11 days)", "2"),
                        new RadioCheckQuestion("3. Nearly every day (12 to 14 days)", "2"))
                ))
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">F3. Feeling Sad</legend>'
            .new IformQuestion("F3","<strong>Ask patient:</strong> \"During the past 2 weeks, how often would you say, 'I feel sad'?\"", 2, null , null,
                new RadioQuestionData("F2d", array(
                        new RadioCheckQuestion("0. Never", "1"),
                        new RadioCheckQuestion("1. Rarely", "2"),
                        new RadioCheckQuestion("2. Sometimes", "2"),
                        new RadioCheckQuestion("3. Often", "2"),
                        new RadioCheckQuestion("4. Always", "2"),
                        new RadioCheckQuestion("8. Unable to respond", "2"))
                ))
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">G. Pain (Interview during the 2-day assessment period)</legend>'
            .new IformQuestion("G1", "Pain Interview Attempted?", 2, null , null,
                new RadioQuestionData("G1", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                ))
            .new IformQuestion("G2", "Pain Presence?", 2, null , "<strong>Ask patient:</strong> \"Have you had pain or hurting at any time during the last 2 days?\"",
                new RadioQuestionData("G2", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"),
                        new RadioCheckQuestion("8. Unable to answer or no response", "2"))
                ))
            .new IformQuestion("G3","Pain Severity", 2, null, "<strong>Ask patient:</strong> \"Please rate your worse pain during the last 2 days on a zero to 10 scale, with zero being no pain and 10 as the worse pain you can imagine.\"<br/>Enter 88 if the patient does not answer or is unable to respond and skip to G6. Pain Observational Assessment",
                new TextBoxQuestionData("Severity", null))
            .new IformQuestion("G4", "Pain Effect on Sleep", 2, null , "<strong>Ask patient:</strong> \"During the past 2 days, has pain made it hard for you to sleep?\"",
                new RadioQuestionData("G4", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"),
                        new RadioCheckQuestion("8. Unable to answer or no response", "2"))
                ))
            .new IformQuestion("G5", "Pain Effect on Activities", 2, null , "<strong>Ask patient:</strong> \"During the past 2 days, have you limited your activities because of pain?\"",
                new RadioQuestionData("G5", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"),
                        new RadioCheckQuestion("8. Unable to answer or no response", "2"))
                ))
            .new IformQuestion("G6","Pain Observational Assessment", 2, null , "If patient could not be interviewed for pain assessment, check all indicators of pain or possible pain.",
                new CheckQuestionData("G6", array(
                        new RadioCheckQuestion("G6a. Non-verbal sounds", "1"),
                        new RadioCheckQuestion("G6b. Vocal complaints of pain", "2"),
                        new RadioCheckQuestion("G6c. Facial expressions", "2"),
                        new RadioCheckQuestion("G6d. Protective body movements or postures", "2"),
                        new RadioCheckQuestion("G6e. None", "2"))
                ))
        .'</fieldset>
    </div>'
?>