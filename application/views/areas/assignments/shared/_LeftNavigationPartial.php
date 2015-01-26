<?php require "application/views/shared/menuItem_builder.php"; ?>
<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Assignments</span>
            <ul class="leftnav-groupcontainer">
<!--                <li>-->
<!--                    --><?php //echo new MenuItem("Assign by Staff", "assignments", "assignbystaff", "", true, false, "" , $this->uri);?>
<!--                </li>-->
                <li>
                    <?php echo new MenuItem("Staff Assignment", "assignments", "assignbyrole", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Screenings", "assignments", "screeningbyclient", "", false, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Screening", "assignments", "screeningbyclient", "", false, false, "" , $this->uri);?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php  echo new MenuItem("Surveys", "assignments", "surveysbyclient", "", false, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Quality Survey", "assignments", "surveysbyclient", "", false, false, "" , $this->uri);?>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- Menu Item Arguments
MenuItem( Friendly Label [string], Controller [string], Action [string], Icon Class [string], Clickable? [bool], Hidden Unless Active? [bool], Functions/Scripts [string], URI [Do Not Change]  )
-->