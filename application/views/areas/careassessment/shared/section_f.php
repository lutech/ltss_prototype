<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $WorkspaceHeader = '
    <h3>CARE Assessment - VI. Functional Status: Usual Performance</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

        </div>
    </div>
'?>

<?php $Body = '
    <div class="genericform-style">
        <h4>VI. Functional Status: Usual Performance</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Core Self Care</legend>'
            .new IformQuestion("A1", "Eating", 2, null , "The ability to use suitable utensils to bring food to the mouth and swallow food once the meal is presented on a table/tray.  Includes modified food consistency.",
                new RadioQuestionData("A1", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("A2", "Tube feeding", 2, null , "The ability to manage all equipment/supplies related to obtaining nutrition.",
                new RadioQuestionData("A2", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("A3", "Oral hygiene", 2, null , "The ability to use suitable items to clean teeth.  Dentures: The ability to remove and replace dentures from and to mouth, and manage equipment for soaking and rinsing.",
                new RadioQuestionData("A3", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("A4", "Toilet hygiene", 2, null , "The ability to maintain perineal hygiene, adjust clothes before and after using toilet, commode, bedpan, urinal.  If managing ostomy, include wiping opening but not managing equipment.",
                new RadioQuestionData("A4", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("A5", "Upper body dressing", 2, null , "The ability to put on and remove shirt or pajama top.  Includes buttoning if applicable.",
                new RadioQuestionData("A5", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("A6", "Lower body dressing", 2, null , "The ability to dress and undress below the waist, including fasteners.  Does not include footwear.",
                new RadioQuestionData("A1", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )

        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">B. Core Functional Mobility</legend>'
            .new IformQuestion("B1", "Lying to Sitting on Side of Bed", 2, null , "The ability to safely move from lying on the back to sitting on the side of the bed with feet flat on the floor, no back support.",
                new RadioQuestionData("B1", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("B2", "Sit to Stand", 2, null , "The ability to safely come to a standing position from sitting ina chair or on the side of the bed.",
                new RadioQuestionData("B2", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("B3", "Chair/Bed-toChair Transfer", 2, null , "The ability to safely transfer to and from a chair (or wheelchair).  The chairs are placed at right angles to each other.",
                new RadioQuestionData("B3", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("B4", "Toilet Transfer", 2, null , "The ability to safely get on and off a toilet or commode.",
                new RadioQuestionData("B4", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("B5", "Does the patient primarily use a wheelchair for mobility?", 2, null , null,
                new RadioQuestionData("B5", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("B5a", "Select the longest distance the patient walks and code his/her level of independence", 2, null , null,
                new RadioQuestionData("B5a", array(
                        new RadioCheckQuestion("1. Walk 150 ft (45 m)", "1"),
                        new RadioCheckQuestion("2. Walk 100 ft (30 m)", "2"),
                        new RadioCheckQuestion("3. Walk 50 ft (15 m)", "2"),
                        new RadioCheckQuestion("4. Walk in Room Once Standing", "2"))
                )
            ).new IformQuestion("B5b", "Select the longest distance the patient wheels and code his/her level of independence", 2, null , null,
                new RadioQuestionData("B5b", array(
                        new RadioCheckQuestion("1. Wheel 150 ft (45 m)", "1"),
                        new RadioCheckQuestion("2. Wheel 100 ft (30 m)", "2"),
                        new RadioCheckQuestion("3. Wheel 50 ft (15 m)", "2"),
                        new RadioCheckQuestion("4. Wheel in Room Once Seated", "2"))
                )
            )
        .'</fieldset>
         <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">C. Supplemental Functional Ability (Complete during the 2-day assessment period.)</legend>'
            .new IformQuestion("C1", "Wash Upper Body", 2, null , "The ability to wash, rinse, and dry the face, hands, chest, and arms while sitting in a chair or bed.",
                new RadioQuestionData("C1", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C2", "Shower/bathe self", 2, null , "The ability to bathe self in shower or tub, including washing, rinsing, and drying, self.  Does not include transferring in/out of tub/shower.",
                new RadioQuestionData("C2", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C3", "Roll left and right", 2, null , "The ability to roll from lying on back to left and right side, and roll back to back.",
                new RadioQuestionData("C3", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C4", "Sit to lying", 2, null , "The ability to move from sitting on the side of bed to lying flat on bed",
                new RadioQuestionData("C4", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C5", "Picking up object", 2, null , "The ability to bend/stoop from a standing position to pick up small object such as a spoon from the floor.",
                new RadioQuestionData("C5", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C6", "Putting on/taking off footwear", 2, null , "The ability to put on and take off socks and shoes or other footwear that are appropriate for safe mobility.",
                new RadioQuestionData("C6", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7", "Does this patient primarily use a wheelchair for mobility?", 2, null , null,
                new RadioQuestionData("C7", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
            .new IformQuestion("C7a", "1 step (curb)", 2, null , "The ability to step over a curb or up and down one step.",
                new RadioQuestionData("C7a", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7b", "Walk 50 feet with two turns", 2, null , "The ability to walk 50 feet and make two turns.",
                new RadioQuestionData("C7b", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7c", "12 steps", 2, null , "The ability to go up and down 12 steps with or without a rail",
                new RadioQuestionData("C7c", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7d", "4 steps", 2, null , "The ability to go up and down 4 steps with or without a rail.",
                new RadioQuestionData("C7d", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7e", "Walking 10 feet on uneven surfaces", 2, null , "The ability to walk 10 feet on uneven or sloping surfaces, such as grass or gravel.",
                new RadioQuestionData("C7e", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7f", "Car transfer", 2, null , "The ability to transfer in and out of a car or van on the passenger side.  Does not include the ability to open/close door or fasten seat belt.",
                new RadioQuestionData("C7f", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7g", "Wheel short ramp", 2, null , "Once seated in wheelchair, goes up and down a ramp of less than 12 feet (4 meters).",
                new RadioQuestionData("C7g", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C7h", "Wheel long ramp", 2, null , "Once seated in wheelchair, goes up and down a ramp of more than 12 feet (4 meters).",
                new RadioQuestionData("C7h", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C8", "Telephone-answering", 2, null , "The ability to pick up call in patient's customary manner and maintain for 1 minute or longer.  Does not include getting to the phone.",
                new RadioQuestionData("C8", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C9", "Telephone-placing call", 2, null , "The ability to pick up and place call in patient's customary manner and maintain for 1 minute or longer.  Does not include getting to the phone.",
                new RadioQuestionData("C9", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C10", "Medication management-oral medications", 2, null , "The ability to prepare and take all prescribed oral medications reliably and safely, including administration of the correct dosage at the appropriate time/intervals.",
                new RadioQuestionData("C10", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C11", "Medication management-inhalant/mist medications", 2, null , "The ability to prepare and take all prescribed inhalant/mist medications reliably and safely, including administration of the correct dosage at the appropriate times/intervals.",
                new RadioQuestionData("C11", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C12", "Medication management-injectable medications", 2, null , "The ability to prepare and take all prescribed injectable medications reliably and safely, including administration of the correct dosage at the appropriate times/intervals",
                new RadioQuestionData("C12", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C13", "Make light meal", 2, null , "The ability to plan and prepare all aspects of a light meal such as a bowl of cereal or a sandwich and cold drink, or reheat a prepared meal.",
                new RadioQuestionData("C13", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C14", "Wipe down surface", 2, null , "The ability to use a damp cloth to wipe down surface such as table top or bench to remove small amounts of liquid or crumbs.  Includes ability to clean cloth of debris in patient's customary manner.",
                new RadioQuestionData("C14", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C15", "Light shopping", 2, null , "Once at store, can locate and select up to five needed goods, take to check out, and complete purchasing transaction.",
                new RadioQuestionData("C15", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C16", "Laundry", 2, null , "Includes all aspects of completing a load of laundry using a washer and dryer. Includes sorting, loading and unloading, and adding laundry detergent.",
                new RadioQuestionData("C16", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
            .new IformQuestion("C17", "Use public transportation", 2, null , "The ability to plan and use public transportation.  Includes boarding, riding, and alighting from transportation.",
                new RadioQuestionData("C7h", array(
                        new RadioCheckQuestion("6. Independent", "1"),
                        new RadioCheckQuestion("5. Setup or clean-up assistance", "2"),
                        new RadioCheckQuestion("4. Supervision or touching assistance", "2"),
                        new RadioCheckQuestion("3. Partial/moderate assistance", "2"),
                        new RadioCheckQuestion("2. Substantial/maximal assistance", "2"),
                        new RadioCheckQuestion("1. Dependent", "2"),
                        new RadioCheckQuestion("M. Not attempted due to <strong>medical condition</strong>", "2"),
                        new RadioCheckQuestion("S. Not attempted due to <strong>safety concerns</strong>", "2"),
                        new RadioCheckQuestion("A. Task <strong>attempted</strong> by not completed", "2"),
                        new RadioCheckQuestion("N. <strong>Not applicable</strong>", "2"),
                        new RadioCheckQuestion("P. <strong>Patient refused</strong>", "2"))
                )
            )
        .'</fieldset>
    </div>
'?>