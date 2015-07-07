<?php $WorkspaceHeader ='
    <h3>Contact Note</h3>
    <div class="workspace-header-bar">
        <div aria-label="New" class="new-form">
            <span>New</span>
        </div>
        <div class="float-left">
            <a href="#">Cancel</a>
        </div>
        <div class="float-right">

            <button type="submit">Save</button>

            <!-- <button style="min-width: 20px !important;"><span class="icon-print"></span></button>

            <button id="expandCollapseAll" runat="server">
            </button> -->
        </div>
    </div>
'?>

<?php $Body = '

<div class="genericform-style">
    <h4>New Contact Note</h4>
    <fieldset class="fieldset-container-one">
        <legend class=legend-header-one>Contact Reason</legend>
        <div class="row">
            <input type="checkbox" name="reason" id="information"  /> <label for="information">Information</label>
        </div>
        <fieldset class="fieldset-container-three" id="infoKind">
            <legend class="ui-hide">What kind of Information?</legend>
            <div class="row">
                <input type="checkbox" name="info" id="GeneralInfo" /> <label for="GeneralInfo">General</label>
            </div>
            <div class="row">
                <input type="checkbox" name="info" id="GeneralInfo" /> <label for="GeneralInfo">Waiver</label>
            </div>
        </fieldset>
        <div class="row">
            <input type="checkbox" name="reason" id="referral" /> <label for="referral">Referral</label>
        </div>
        <fieldset class="fieldset-container-three" id="referralKind">
            <legend class="ui-hide">What kind of Referral?</legend>
            <div class="row">
                <input type="checkbox" name="referralKindN" id="GeneralReferral" /> <label for="GeneralInfo">General</label>
            </div>
            <div class="row">
                <input type="checkbox" name="referralKindN" id="GeneralReferral" /> <label for="GeneralInfo">Waiver</label>
            </div>
        </fieldset>
        <div class="row">
            <input type="checkbox" name="reason" id="pcoc" /> <label for="pcoc">Person Centered Options Counseling</label>
        </div>
<!--        <div class="row">
            <input type="checkbox" name="reason" id="followup" /> <label for="followup">Follow-up</label>
        </div> -->
        <div class="row">
            <input type="checkbox" name="reason" id="other" /> <label for="other">Other</label>
        </div>

    <fieldset class="fieldset-container-two">
        <legend class=legend-header-two>Who Are You Inquiring About?</legend>
        <div class="row">
            <input type="checkbox" id="Anonymous" />
            <label for="Anonymous">Anonymous</label>
        </div>
        <div class="row">
            <label>First Name:</label>
            <input type="text" id="FirstName"/>
        </div>
        <div class="row">
            <label>Last Name:</label>
            <input type="text"  id="LastName"/>
        </div>
        <div class="row">
            <label>Date of Birth:</label>
            <input type="text" placeholder="MM/DD/YYYY" />
        </div>

        <div class="row">
            <label>Phone #</label>
            <input type="text" />
        </div>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Address</legend>
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
                <input type="text" />
            </div>
            <div class="row">
                <label>Street Address 2:</label>
                <input type="text" />
            </div>
            <div class="row">
                <label>City:</label>
                <input type="text" />
            </div>
            <div class="row">
                <label>State:</label>
                <select class="">
                    <option value="0" checked></option>
                    <option value="1">States here</option>
                </select>
            </div>
            <div class="row">
                <label>County:</label>
                <select class="">
                    <option value="0" checked></option>
                    <option value="1">Counties Here</option>
                </select>
            </div>
            <div class="row">
                <label>Zip Code:</label>
                <input type="text" class="extension" />
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
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-one">Contact Details</legend>
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
                <input type="text" placeholder="date selector here" />
            </div>
            <div class="row">
                <label>Time of Contact:</label>
                <input type="text" placeholder="time picker" />
            </div>
            <div class="row">
                <label>Duration:</label>
                <input type="text" class="frequency" /> <span class="data-element">minutes</span>
            </div>
            <div class="row">
                <label>Comments:</label>
                <textarea type="text" class="comments-textarea"></textarea>
            </div>
<!--    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Schedule Follow-up</legend> -->
<!--        <div class="row">
            <input type="checkbox" id="Followup" />
            <label for="Followup">Schedule Follow-up</label>
        </div>
         <fieldset class="fieldset-container-three" id="FollowUpDate">
            <legend class="ui-hide">Follow-up Date</legend>  -->
            <div class="row">
                <label>Follow-up Date:</label>
                <input type="text" placeholder="MM/DD/YYYY" />
            </div>
      <!--  </fieldset>  -->
    </fieldset>
    </fieldset>
    <br />
</div>

'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#infoKind, #referralKind, #FollowUpDate, #callerInformation, #inquiredAboutAddress").hide();
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

//    $( "[name=reason]" ).click(function() {
//        var informationVar = $(this);
//        if (informationVar.is("#information") ){
//            $("#infoKind").show();
//            $("#referralKind").hide();
//        }
//        else if(informationVar.is("#referral")) {
//            $("#infoKind").hide();
//            $("#referralKind").show();
//        }
//        else{
//            $("#infoKind").hide();
//            $("#referralKind").hide();
//        }
//    });

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
    $("#ContactMadeBy").change(function(){
       if ($(this).val() == "1"){
            $("#callerInformation").hide();
            } else {
            $("#callerInformation").show();
        }
    });


</script>
'?>