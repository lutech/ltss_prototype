<?php $WorkspaceHeader = '
    <h3>Flexible Assignments — DDA Assignments Configuration</h3>
    <div class="workspace-header-bar">
        <div class="float-left">
        </div>
        <div class="float-right">
            <button id="expandCollapseAll" runat="server"></button>
        </div>
    </div>
'?>

<?php

$Body = '
<style type="text/css">
    .column-third {
        width: 32% !important;
    }
</style>
<div class="panelbar-task-style">
    <div class="panel">
        <div class="header">
            <h5>No CCS Choice Made</h5>
            <span>Auto-Assign to: <b>Supervisor</b></span>
            <span>Distribute by: <b>Default</b></span>
            <div class="TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Auto-Assign Configuration</legend>
                    <div class="row">
                        <label for="">Auto-Assign to:</label>
                        <input type="text" readonly="readonly" value="Supervisor"/>
                    </div>
                    <div class="row">
                        <label for="">Distribute by:</label>
                        <input type="text" readonly="readonly" value="Default"/>
                    </div>
                </fieldset>
                <div class="header-info">
                    <span class="icon-info-sign"></span>Note:  Assignments to Supervisors will occur turn-by-turn and will repeat continuously after each and every round.
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>CCS Priority Category Update Review</h5>
            <span>Auto-Assign to: <b>Supervisor</b></span>
            <span>Distribute by: <b>County</b></span>
            <div class="TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Auto-Assign Configuration</legend>
                    <div class="row">
                        <label for="">Auto-Assign to:</label>
                        <input type="text" readonly="readonly" value="Supervisor"/>
                    </div>
                    <div class="row">
                        <label for="">Distribute by:</label>
                        <input type="text" readonly="readonly" value="County"/>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Assign by Client&apos;s County</legend>
                        <div class="column-left">
                            <div class="row">
                                <label for="">Allegany County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Anne Arundel County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Baltimore County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Calvert County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Caroline County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Carroll County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Cecil County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Charles County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Dorchester County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Frederick County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Garrett County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                <label for="">Harford County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Kent County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Montgomery County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Prince George&apos;s County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Queen Anne&apos;s County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Somerset County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">St. Mary&apos;s County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Talbot County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Washington County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Wicomico County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Worcester County:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                        </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>TY Priority Category Update</h5>
            <span>Auto-Assign to: <b>Supervisor</b></span>
            <span>Distribute by: <b>Last Name</b></span>
            <div class="TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Auto-Assign Configuration</legend>
                    <div class="row">
                        <label for="">Auto-Assign to:</label>
                        <input type="text" readonly="readonly" value="Supervisor"/>
                    </div>
                    <div class="row">
                        <label for="">Distribute by:</label>
                        <input type="text" readonly="readonly" value="Last Name"/>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Assign by Client&apos;s Last Name</legend>
                        <div class="column-left column-third">
                            <div class="row">
                                <label for="" style="width: 50px">A:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">B:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">C:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">D:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">E:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">F:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">G:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">H:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">I:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="column-left column-third">
                            <div class="row">
                                <label for="" style="width: 50px">J:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">K:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">L:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">M:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">N:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">O:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">P:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">Q:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">R:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="column-left column-third">
                            <div class="row">
                                <label for="" style="width: 50px">S:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">T:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">U:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">V:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">W:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">X:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">Y:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">Z:</label>
                               <input type="text" value="Regional Eligibility Supervisor" readonly="readonly"/>
                            </div>
                        </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>TY Placement Criteria Verification</h5>
            <span>Auto-Assign to: <b>Staff</b></span>
            <span>Distribute by: <b>Default</b></span>
            <div class="TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Auto-Assign Configuration</legend>
                    <div class="row">
                        <label for="">Auto-Assign to:</label>
                        <input type="text" readonly="readonly" value="Staff"/>
                    </div>
                    <div class="row">
                        <label for="">Distribute by:</label>
                        <input type="text" readonly="readonly" value="Default"/>
                    </div>
                </fieldset>
                <div class="header-info">
                    <span class="icon-info-sign"></span>Note:  Assignments to Staff will occur turn-by-turn and will repeat continuously after each and every round.
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>Individual Selected for Funding</h5>
            <span>Auto-Assign to: <b>Staff</b></span>
            <span>Distribute by: <b>County</b></span>
            <div class="TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Auto-Assign Configuration</legend>
                    <div class="row">
                        <label for="">Auto-Assign to:</label>
                        <input type="text" readonly="readonly" value="Staff"/>
                    </div>
                    <div class="row">
                        <label for="">Distribute by:</label>
                        <input type="text" readonly="readonly" value="County"/>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Assign by Client&apos;s County</legend>
                        <div class="column-left">
                            <div class="row">
                                <label for="">Allegany County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Anne Arundel County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Baltimore County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Calvert County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Caroline County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Carroll County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Cecil County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Charles County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Dorchester County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Frederick County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Garrett County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                <label for="">Harford County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Kent County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Montgomery County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Prince George&apos;s County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Queen Anne&apos;s County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Somerset County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">St. Mary&apos;s County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Talbot County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Washington County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Wicomico County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="">Worcester County:</label>
                               <input type="text" value="Regional Eligibility/Program Staff" readonly="readonly"/>
                            </div>
                        </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h5>MA Waiver Application/Packet Submission</h5>
            <span>Auto-Assign to: <b>Staff</b></span>
            <span>Distribute by: <b>Last Name</b></span>
            <div class="TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Auto-Assign Configuration</legend>
                    <div class="row">
                        <label for="">Auto-Assign to:</label>
                        <input type="text" readonly="readonly" value="Staff"/>
                    </div>
                    <div class="row">
                        <label for="">Distribute by:</label>
                        <input type="text" readonly="readonly" value="Last Name"/>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one" style="margin: 10px 20px 10px 20px">
                    <legend class="legend-header-one">Assign by Client&apos;s Last Name</legend>
                        <div class="column-left column-third">
                            <div class="row">
                                <label for="" style="width: 50px">A:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">B:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">C:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">D:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">E:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">F:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">G:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">H:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">I:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="column-left column-third">
                            <div class="row">
                                <label for="" style="width: 50px">J:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">K:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">L:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">M:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">N:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">O:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">P:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">Q:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">R:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="column-left column-third">
                            <div class="row">
                                <label for="" style="width: 50px">S:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">T:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">U:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">V:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">W:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">X:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">Y:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                            <div class="row">
                                <label for="" style="width: 50px">Z:</label>
                               <input type="text" value="Regional Program Staff" readonly="readonly"/>
                            </div>
                        </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
'?>


<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
'?>

