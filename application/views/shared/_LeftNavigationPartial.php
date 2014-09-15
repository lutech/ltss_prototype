<?php require "application/views/shared/menuItem_builder.php"; ?>
<div>
    <ul class="left-side-nav js-accordion">
        <li>
            <span class="leftNavHeader">Client</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Client Profile", "client", "clientprofilesummary", "", true, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php  echo new MenuItem("Client Notes", "client", "clientnotes", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
        <li>
            <span class="leftNavHeader">Case Management</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("Alerts", "casemanagement", "alerts", "", false, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Reportable Events", "casemanagement", "reportableevent", "", false, false, "" , $this->uri);?>
                </li>
                <li>
                    <?php echo new MenuItem("Case Notes", "casemanagement", "casenotes", "", false, false, "" , $this->uri);?>
                </li>
            </ul>
        </li>
        <li>
            <span class="leftNavHeader">Questionnaires</span>
            <ul class="leftnav-groupcontainer" style="display: none;">
                <li>
                    <?php echo new MenuItem("CARE Assessment", "careassessment", "history", "", true, false, "" , $this->uri);
                    if ($this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_a_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_b_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_c_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_d_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_e_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_f_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_g_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_h_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_i_details" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_j_details" ) {
                        echo '
                                <ul>
                                    <li>
                                        ' .new MenuItem("I. Administrative Items", "careassessment", "section_a_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' .new MenuItem("II. Admission Information", "careassessment", "section_b_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                       ' . new MenuItem("III. Current Medical Information", "careassessment", "section_c_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("IV. Cognitive Status, Mood & Pain", "careassessment", "section_d_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("V. Impairments", "careassessment", "section_e_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("VI. Functional Status: Usual Performance", "careassessment", "section_f_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("VII. Overall POC / Advance Care Directives", "careassessment", "section_g_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("IX. ICD-9 Coding Information", "careassessment", "section_h_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("X. Other Useful Information", "careassessment", "section_i_details", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("XI. Feedback", "careassessment", "section_j_details", "", true, false, "" , $this->uri). '
                                    </li>
                                </ul>
                            ';
                    } else if ($this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_a_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_b_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_c_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_d_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_e_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_f_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_g_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_h_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_i_edit" ||
                        $this->uri->segment(1) == "careassessment" && $this->uri->segment(2) == "section_j_edit" ) {
                        echo '
                                <ul>
                                    <li>
                                        ' .new MenuItem("I. Administrative Items", "careassessment", "section_a_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' .new MenuItem("II. Admission Information", "careassessment", "section_b_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                       ' . new MenuItem("III. Current Medical Information", "careassessment", "section_c_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("IV. Cognitive Status, Mood & Pain", "careassessment", "section_d_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("V. Impairments", "careassessment", "section_e_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("VI. Functional Status: Usual Performance", "careassessment", "section_f_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("VII. Overall POC / Advance Care Directives", "careassessment", "section_g_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("IX. ICD-9 Coding Information", "careassessment", "section_h_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("X. Other Useful Information", "careassessment", "section_i_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                    <li>
                                        ' . new MenuItem("XI. Feedback", "careassessment", "section_j_edit", "", true, false, "" , $this->uri). '
                                    </li>
                                </ul>
                            ';
                    }
                    ?>
                </li>
                <li>
                    <?php echo new MenuItem("CAHPS Survey", "cahpssurvey", "history", "", true, false, "" , $this->uri);?>
                    <ul>
                        <li>
                            <?php echo new MenuItem("Survey Details", "cahpssurvey", "details", "", true, true, "" , $this->uri);?>
                        </li>
                        <li>
                            <?php echo new MenuItem("Survey Details", "cahpssurvey", "edit", "", true, true, "" , $this->uri);?>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>