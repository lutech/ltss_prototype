<?php $WorkspaceHeader ='
    <h3>Contact Note</h3>
    <div class="workspace-header-bar">
        <div aria-label="Edit" class="read-edit-toggle">
            <span>Edit</span>
        </div>
        <div class="float-left">
            <a href="#">Back To List</a>
        </div>
        <div class="float-right">
            <button type="submit">Save</button>
        </div>
    </div>
'?>

<?php $Body = '

<div class="genericform-style">
    <h4>Contact Note</h4>
    <br />
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Follow-Ups</legend>
        <div class="row" id="noFollowUp">
            <p>There are currently no follow-ups added.</p>
        </div>
        <fieldset class="fieldset-container-two" id="followUpDetail">
        <legend class="legend-header-two">Follow-up #1</legend><div class="header-link"><a href="#">Delete</a></div>
        <div class="row">
            <label>Contact Made With:</label>
            <select class="" id="followupContactMadeBy">
                <option value="0"></option>
                <option value="1">Self</option>
                <option value="2">Friend/Family</option>
                <option value="3">Legal Representative</option>
                <option value="4">Facility Staff</option>
                <option value="5">MAC Staff Follow Up</option>
                <option value="6">Declines to Answer</option>
                <option value="7">Other</option>
            </select>
        </div>
        <div class="row" id="followupCallerInformation">
            <fieldset class="fieldset-container-three">
                <legend class="legend-header-three" style="margin-bottom:25px;">Caller Information</legend>
                <div class="row">
                    <label>First Name:</label>
                    <input type="text" />
                </div>
                <div class="row">
                    <label>Last Name:</label>
                    <input type="text" />
                </div>
                <div class="row">
                    <label>Phone #</label>
                    <input type="text" />
                </div>
            </fieldset>
        </div>
        <fieldset class="fieldset-container-two" style="border-top: 1px solid #E0E0E0 !important;">
            <legend class="legend-header-two" style="color: #4F8FBA !important; font-size: 105% !important;">Contact Details</legend> <!-- NOTE TO UI TEAM: create fieldset+legend.header-four -->
            <div class="row">
                <label>Contact Type:</label>
                <select class="">
                    <option value="0" checked></option>
                    <option value="1">Phone Call</option>
                    <option value="2">Website</option>
                    <option value="3">Walk-in</option>
                    <option value="4">Off-site Meeting</option>
                    <option value="5">E-mail</option>
                    <option value="6">Fax</option>
                    <option value="7">Other</option>
                </select>
            </div>
            <div class="row">
                <label>Date of Contact:</label>
                <input type="text" placeholder="MM/DD/YYYY" />
            </div>
            <div class="row">
                <label>Time of Contact:</label>
                <input type="text" placeholder="time picker here" />
            </div>
            <div class="row">
                <label>Duration:</label>
                <input type="text" class="frequency" /> <span class="data-element">minutes</span>
            </div>
            <div class="row">
                <label>Comments:</label>
                <textarea type="text" class="comments-textarea"></textarea>
            </div>
            <div class="row">
                <label>New Follow-up Date:</label>
                <input type="text" placeholder="MM/DD/YYYY" />
            </div>
        </fieldset>
    </fieldset>
    </fieldset>

    <div class="div add-button" id="addFollowUpButton">
        <a href="#" data-bind="click: $root.addPhone" id="addFollowUpButtonLink">Add Follow-up</a>
    </div>

    <div class="form-panelbar-content">
        <div class="panelbar-form-style startCollapsed">
            <fieldset class="fieldset-container-one panel">
                <legend class="legend-header-one">Original Contact</legend>
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">Contact Reason</legend>
                     <div class="body">
                        <div class="row">
                            <input type="checkbox" name="reason" id="information" /> <label for="information">Information</label>
                        </div>
                        <fieldset class="fieldset-container-three" id="infoKind">
                            <legend class="ui-hide">What kind of Information?</legend>
                            <div class="row">
                                <input type="radio" name="info" id="GeneralInfo" /> <label for="GeneralInfo">General</label>
                            </div>
                            <div class="row">
                                <input type="radio" name="info" id="GeneralInfo" /> <label for="GeneralInfo">Waiver</label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <input type="checkbox" name="reason" id="referral" /> <label for="referral">Referral</label>
                        </div>
                        <fieldset class="fieldset-container-three" id="referralKind">
                            <legend class="ui-hide">What kind of Referral?</legend>
                            <div class="row">
                                <input type="radio" name="referralKindN" id="GeneralReferral" /> <label for="GeneralInfo">General</label>
                            </div>
                            <div class="row">
                                <input type="radio" name="referralKindN" id="GeneralReferral" /> <label for="GeneralInfo">Waiver</label>
                            </div>
                        </fieldset>
                        <div class="row">
                            <input type="checkbox" name="reason" id="pcoc" checked /> <label for="pcoc">Person Centered Options Counseling</label>
                        </div>

                        <div class="row">
                            <input type="checkbox" name="reason" id="other" /> <label for="other">Other</label>
                        </div>

                        <fieldset class="fieldset-container-two" style="border-top: 1px solid #E0E0E0 !important;">
                            <legend class="legend-header-two" style="color: #4F8FBA !important; font-size: 105% !important;">Who Are You Inquiring About?</legend>
                            <div class="row">
                                <input type="checkbox" id="Anonymous" />
                                <label for="Anonymous">Anonymous</label>
                            </div>
                            <div class="row">
                                <label>First Name:</label>
                                <input type="text" id="FirstName"  value="Fletcher" />
                            </div>
                            <div class="row">
                                <label>Last Name:</label>
                                <input type="text"  id="LastName"  value="Ashton" />
                            </div>
                            <div class="row">
                                <label>Date of Birth:</label>
                                <input type="text" value="01/01/1930" />
                            </div>

                            <div class="row">
                                <label>Phone #</label>
                                <input type="text" value="601-555-1212" />
                            </div>
                            <fieldset class="fieldset-container-two" style="border-top: 1px solid #E0E0E0 !important;">
                                <legend class="legend-header-two" style="color: #4F8FBA !important; font-size: 105% !important;">Address</legend>
                                <div class="row">
                                    <label>Location of Person:</label>
                                    <select class="">
                                        <option value="0" checked></option>
                                        <option value="1">Community</option>
                                        <option value="2">Nursing Facility</option>
                                        <option value="3">Hospital</option>
                                        <option value="4">Assisted Living</option>
                                        <option value="5">Declined to Answer</option>
                                        <option value="6">Other</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label>Street Address 1:</label>
                                    <input type="text" value="123 Sesame Street" />
                                </div>
                                <div class="row">
                                    <label>Street Address 2:</label>
                                    <input type="text" />
                                </div>
                                <div class="row">
                                    <label>City:</label>
                                    <input type="text" value="Jackson" />
                                </div>
                                <div class="row">
                                    <label>State:</label>
                                    <select class="">
                                        <option value="0" checked>MS</option>
                                        <option value="1">States here</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label>County:</label>
                                    <select class="">
                                        <option value="0" checked>Hinds</option>
                                        <option value="1">Counties Here</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label>Zip Code:</label>
                                    <input type="text" class="extension" value="12345" />
                                </div>
                            </fieldset>

                            <div class="row">
                                <label>Contact Made By:</label>
                                <select class="" id="ContactMadeBy" value="1">
                                    <option value="1">Self</option>
                                    <option value="2">Friend/Family</option>
                                    <option value="3">Legal Representative</option>
                                    <option value="4">Facility Staff</option>
                                    <option value="5">MAC Staff Follow Up</option>
                                    <option value="6">Declines to Answer</option>
                                    <option value="7">Other</option>
                                </select>
                            </div>

                             <fieldset class="fieldset-container-three" id="callerInformation">
                                <legend class="legend-header-three" style="margin-bottom:25px;">Caller Information</legend>
                                <div class="row">
                                    <label>First Name:</label>
                                    <input type="text" />
                                </div>
                                <div class="row">
                                    <label>Last Name:</label>
                                    <input type="text" />
                                </div>
                                <div class="row">
                                    <label>Phone #</label>
                                    <input type="text" />
                                </div>
                            </fieldset>

                             <fieldset class="fieldset-container-two" style="border-top: 1px solid #E0E0E0 !important;">
                                <legend class="legend-header-two" style="color: #4F8FBA !important; font-size: 105% !important;">Contact Details</legend>
                                <div class="row">
                                    <label>Contact Type:</label>
                                    <select class="">
                                        <option value="0" checked></option>
                                        <option value="1">Phone Call</option>
                                        <option value="2">Website</option>
                                        <option value="3">Walk-in</option>
                                        <option value="4">Off-site Meeting</option>
                                        <option value="5">E-mail</option>
                                        <option value="6">Fax</option>
                                        <option value="7">Other</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label>Date of Contact:</label>
                                    <input type="text" value="02/01/2014" />
                                </div>
                                <div class="row">
                                    <label>Time of Contact:</label>
                                    <input type="text" value="10 AM" />
                                </div>
                                <div class="row">
                                    <label>Duration:</label>
                                    <input type="text" class="frequency" value="10" /> <span class="data-element">minutes</span>
                                </div>
                                <div class="row">
                                    <label>Comments:</label>
                                    <textarea type="text" class="comments-textarea">Need to provide resources on ABC.</textarea>
                                </div>

                                <div class="row">
                                    <label>Follow-up Date:</label>
                                    <input type="text" value="03/01/2014" />
                                </div>

                            </fieldset>
                    </fieldset>
                    </fieldset>
                </div>
                <br />
            </fieldset>

        </div>
    </div>
</div>

'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#infoKind, #referralKind, #FollowUpDate, #callerInformation, #inquiredAboutAddress, #followUpDetail, #followupCallerInformation").hide();
    });

    $( "#information" ).click(function() {
        var informationVar = $(this);
        if (informationVar.is(":checked") ){
            $("#infoKind").show();
        } else {
            $("#infoKind").hide();
        };
    });

    $( "#referral" ).click(function() {
        var referralVar = $(this);
        if (referralVar.is(":checked") ){
            $("#referralKind").show();
        } else {
            $("#referralKind").hide();
        };
    });

    $( "#followup" ).click(function() {
        var followupVar = $(this);
        if (followupVar.is(":checked") ){
            $("#addFollowUpButton").show();
        } else {
            $("#addFollowUpButton").hide();
        };
    });


    $("#addFollowUpButtonLink").click(function(){
        $("#followUpDetail").show();
        $("#addFollowUpButton, #noFollowUp").hide();
    });

    $( "#natMotherDeceased" ).click(function() {
        var deceasedMother = $(this);
        if (deceasedMother.is(":checked") ){
            $("#mothersDeath").show();
        } else {
            $("#mothersDeath").hide();
        };
    });

    $("#Anonymous").click(function(){
        var AnonymousVar = $(this);
        if (AnonymousVar.is(":checked") ){
            $("#FirstName").val("Anonymous");
            $("#LastName").val("Anonymous");
        } else {
            $("#FirstName").val("");
            $("#LastName").val("");
        }
    });

    $("#Followup").click(function(){
        var FollowupVar = $(this);
        if (FollowupVar.is(":checked") ){
            $("#FollowUpDate").show();
        } else {
            $("#FollowUpDate").hide();
        }
    });


    $("#ContactMadeBy").change(function(){
       if ($(this).val() == "1"){
            $("#callerInformation").hide();
            } else {
            $("#callerInformation").show();
        }
    });
    $("#followupContactMadeBy").change(function(){
       if ($(this).val() == "1"){
            $("#followupCallerInformation").hide();
            } else {
            $("#followupCallerInformation").show();
        }
    });


</script>
'?>