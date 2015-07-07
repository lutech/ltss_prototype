<?php $WorkspaceHeader ='
    <h3>PR — F. Family Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Status: In Progress</span></h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button style="min-width: 20px !important;"><span class="icon-print"></span></button>
            <button runat="server">Discard
            </button>
            <button id="expandCollapseAll" runat="server">
            </button>
        </div>
    </div>
'?>


<?php $Body ='
<div class="genericform-style">
    <h4>Family Information</h4>

    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Biological Family History:</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">#1. Family Member</legend><div class="header-link"><a href="#">Delete</a></div>
            <div class="row">
                 <label for="historyFor">History For:</label>
                 <select type="text" value="" id="historyFor">
                    <option value="0" checked></option>
                    <option value="1" checked>Self</option>
                    <option value="2" checked>Natural Mother</option>
                    <option value="3" checked>Natural Father</option>
                    <option value="4" checked>Sibling(s)</option>
                </select>
            </div>
        </fieldset>
        <br>
        <div id="familyHistory">
            <div class="row">
                <label>Address:</label>
                <input class="data-element" placeholder="Traditional Address Fields" />
            </div>
            <div class="row">
                <label>Date of Birth:</label>
                <input class="data-element" placeholder="date picker" />
            </div>
            <div class="row">
                <label>Birth Place:</label>
                <input class="data-element" />
            </div>
            <div class="row">
                <label>Age at Birth of Cicio:</label>
                <input type="text" class="frequency" />
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                        <legend class="ui-hide">Sex:</legend>
                        <span class="list-item">Sex:</span>
                        <hr />
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Male</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Female</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                        <legend class="ui-hide">Marital Status:</legend>
                        <span class="list-item">Marital Status:</span>
                        <hr />
                        <div class="row">
                            <input type="checkbox" />
                            <label class="grouped-radiobuttons-label">Married to applicant’s natural parent</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" />
                            <label class="grouped-radiobuttons-label">Divorced from applicant’s natural parent</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" />
                            <label class="grouped-radiobuttons-label">Never married to applicants natural parent &mdash; Married</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" />
                            <label class="grouped-radiobuttons-label">Never married to applicants natural parent &mdash; Not Married</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" />
                            <label class="grouped-radiobuttons-label">Remarried</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" />
                            <label class="grouped-radiobuttons-label">Widowed</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                        <legend class="ui-hide">Highest Level of Education Completed:</legend>
                        <span class="list-item">Highest Level of Education Completed:</span>
                        <hr />
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">None</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Elementary</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Middle</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">High School</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Undergraduate</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Graduate</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                <label>Occupation:</label>
                <input type="text" />
            </div>
            <div class="row">
                <label>Place of employment:</label>
                <input type="text" />
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                        <legend class="ui-hide">Current or Former Military Employee?</legend>
                        <span class="list-item">Current or Former Military Employee?</span>
                        <hr />
                        <div class="row">
                            <input type="radio" id="one" />
                            <label for="one">Yes</label>
                        </div>
                        <div class="row">
                            <input type="radio"  id="two" />
                            <label  for="one">No</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                        <legend class="ui-hide">Health:</legend>
                         <span class="list-item">Health:</span>
                         <hr />
                         <div class="row">
                            <input type="radio" />
                            <label>Good</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label>Fair</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label>Poor</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                    <legend class="ui-hide">Is there a history of any of the following in the natural mother’s family?</legend>
                     <span  class="list-item">Is there a history of any of the following in the natural mother’s family?</span>
                     <hr />
                    <div class="row">
                        <input type="checkbox" id="intelectDis" />
                        <label for="intelectDis">Intellectual Disability</label>
                    </div>
                    <fieldset class="fieldset-container-three" id="historyOfFollowingintelectDis">
                        <legend>Relationship to Cisio:</legend>
                        <fieldset class="iform-grouped-radiobuttons">
                            <legend class="ui-hide">Relationship to Cisio:</legend>
                            <span class="list-item">Relationship to Cisio:</span>
                            <hr style="border-top:1px solid #BBB;" />
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandfather</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandmother</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Aunt</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Uncle</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Cousin</label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <label>Short  history:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                        <div class="row">
                            <label>How it Affects Cicio:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                    <div class="row">
                        <input type="checkbox" id="DD" />
                        <label for="DD">Developmental Disability</label>
                    </div>
                    <fieldset class="fieldset-container-three" id="historyOfFollowingDD">
                        <legend>Relationship to Cisio:</legend>
                        <fieldset class="iform-grouped-radiobuttons">
                            <legend class="ui-hide">Relationship to Cisio:</legend>
                            <span class="list-item">Relationship to Cisio:</span>
                            <hr style="border-top:1px solid #BBB;" />
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandfather</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandmother</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Aunt</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Uncle</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Cousin</label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <label>Short  history:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                        <div class="row">
                            <label>How it Affects Cicio:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                    <div class="row">
                        <input type="checkbox" id="Psychiatric" />
                        <label for="Psychiatric">Psychiatric Disorders</label>
                    </div>
                    <fieldset class="fieldset-container-three" id="historyOfFollowingPS">
                        <legend>Relationship to Cisio:</legend>
                        <fieldset class="iform-grouped-radiobuttons">
                            <legend class="ui-hide">Relationship to Cisio:</legend>
                            <span class="list-item">Relationship to Cisio:</span>
                            <hr style="border-top:1px solid #BBB;" />
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandfather</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandmother</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Aunt</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Uncle</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Cousin</label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <label>Short  history:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                        <div class="row">
                            <label>How it Affects Cicio:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                    <div class="row">
                        <input type="checkbox"  id="Cancer" />
                        <label for="Cancer">Cancer</label>
                    </div>
                    <fieldset class="fieldset-container-three" id="historyOfFollowingCancer">
                        <legend>Relationship to Cisio:</legend>
                        <fieldset class="iform-grouped-radiobuttons">
                            <legend class="ui-hide">Relationship to Cisio:</legend>
                            <span class="list-item">Relationship to Cisio:</span>
                            <hr style="border-top:1px solid #BBB;" />
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandfather</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Grandmother</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Aunt</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Uncle</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" />
                                <label>Maternal Cousin</label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <label>Short  history:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                        <div class="row">
                            <label>How it Affects Cicio:</label>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                </fieldset>
                </div>
            </div>
        </div>
        <br />
        <div class="div add-button">
            <a href="#" data-bind="click: $root.addPhone" id="btnAddPhone">Add Family History</a>
        </div>
    </fieldset>

     <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Are Cicio&rsquo;s Natural Parents Deceased?</legend>
            <div class="row">
                <input type="checkbox" id="natMotherDeceased" />
                <label for="natMotherDeceased">Deceased Mother</label>
            </div>
            <fieldset class="fieldset-container-three" id="mothersDeath">
                <legend></legend>
                <div class="row">
                    <span class="label">Date of Death:</span>
                    <input type="text" placeholder="Date Selector Here" />
                </div>
                <div class="row">
                    <span class="label">Age at Death:</span>
                    <input class="frequency" type="text" value="" />
                </div>
                <div class="row">
                    <span class="label">Cause of Death:</span>
                    <textarea class="comments-textarea"></textarea>
                </div>
            </fieldset>
            <div class="row">
                <input type="checkbox" id="natFatherDeceased" />
                <label for="natFatherDeceased">Deceased Father</label>
            </div>
            <fieldset class="fieldset-container-three" id="fathersDeath" >
                <legend></legend>
                <div class="row">
                    <span class="label">Date of Death:</span>
                    <input type="text" placeholder="Date Selector Here" />
                </div>
                <div class="row">
                    <span class="label">Age at Death:</span>
                    <input class="frequency" type="text" value="" />
                </div>
                <div class="row">
                    <span class="label">Cause of Death:</span>
                    <textarea class="comments-textarea"></textarea>
                </div>
            </fieldset>
    </fieldset>
    <br />
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Household</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">#1. Household Members Currently living with Cicio</legend><div class="header-link"><a href="#">Delete</a></div>
            <div class="row">
                 <label for="historyFor">Name:</label>
                 <input type="text" class="data-element" />
            </div>
            <div class="row">
                 <label for="historyFor">Age:</label>
                 <input type="text" class="data-element frequency" />
            </div>
            <br>
            <div class="row">
                <div class="iform-fieldset">
                    <fieldset class="iform-grouped-radiobuttons">
                        <legend class="ui-hide">Sex:</legend>
                        <span class="list-item">Sex:</span>
                        <hr />
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Male</label>
                        </div>
                        <div class="row">
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Female</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <br>
            <div class="row">
                 <label for="historyFor">Relationship:</label>
                 <input type="text" class="data-element" placeholder="drop down?" />
            </div>
            <br />
            <div class="div add-button">
                <a href="#" data-bind="click: $root.addPhone" id="btnAddPhone">Add Household Members</a>
            </div>
        </fieldset>

    </fieldset>
</div>
'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#mothersDeath, #fathersDeath, #familyHistory, #historyOfFollowingPS, #historyOfFollowingintelectDis, #historyOfFollowingDD, #historyOfFollowingCancer").hide();
    });
    $( "#natMotherDeceased" ).click(function() {
        var deceasedMother = $(this);
        if (deceasedMother.is(":checked") ){
            $("#mothersDeath").show();
        } else {
            $("#mothersDeath").hide();
        };
    });
    $( "#natFatherDeceased" ).click(function() {
        var deceasedFather = $(this);
        if (deceasedFather.is(":checked") ){
            $("#fathersDeath").show();
        } else {
            $("#fathersDeath").hide();
        };
    });
    $( "#historyFor" ).change(function() {
        if ( this.value == "0" ){
            $("#familyHistory").hide();
        } else {
            $("#familyHistory").show();
        };
    });
    $( "#Psychiatric" ).click(function() {
        var PsychiatricVar = $(this);
        if (PsychiatricVar.is(":checked") ){
            $("#historyOfFollowingPS").show();
        } else {
            $("#historyOfFollowingPS").hide();
        };
    });
    $( "#intelectDis" ).click(function() {
        var intelectDisVar = $(this);
        if (intelectDisVar.is(":checked") ){
            $("#historyOfFollowingintelectDis").show();
        } else {
            $("#historyOfFollowingintelectDis").hide();
        };
    });
    $( "#DD" ).click(function() {
        var DDVar = $(this);
        if (DDVar.is(":checked") ){
            $("#historyOfFollowingDD").show();
        } else {
            $("#historyOfFollowingDD").hide();
        };
    });
    $( "#Cancer" ).click(function() {
        var CancerVar = $(this);
        if (CancerVar.is(":checked") ){
            $("#historyOfFollowingCancer").show();
        } else {
            $("#historyOfFollowingCancer").hide();
        };
    });

</script>
'?>