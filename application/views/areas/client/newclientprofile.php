
<?php $WorkspaceHeader ='
    <h3>'.$_COOKIE["CommonLabel_Clients_Ownership"].' Profile — New Profile</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button><a type="button" href="'.base_url()."index.php/client/clientprofilesummary".'">Save</a></button>
        </div>
    </div>
'?>


<?php $Body ='
<div class="genericform-style">
    <h4>'.$_COOKIE["CommonLabel_Clients_Ownership"].' Demographics</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Information</legend>
        <div class="row">
            <label class="complete-required">Last Name:</label>
            <input type="text" value="Smith" class="required"/>
        </div>
        <div class="row">
            <label class="complete-required">First Name:</label>
            <input type="text" value="Cicio" class="required"/>
        </div>
        <div class="row">
            <label class="complete-required">Middle Name:</label>
            <input type="text" value="Alfred"/>
        </div>
        <div class="row">
            <label>Suffix:</label>
            <input type="text" value="" class="frequency"/>
        </div>
        <div class="row">
            <label class="complete-required">Date of Birth:</label>
            <input type="text" value="01/01/1950"  class="required"/>
        </div>
        <div class="row">
            <label class="complete-required">Gender:</label>
            <select  class="required">
                <option value="0" checked>Male</option>
                <option value="1" checked>Female</option>
            </select>
        </div>

        <div class="row">
            <label>Individual identifier:</label>
            <input type="text" value="Caucasian" readonly/>
        </div>
        <div class="row">
            <label class="complete-required">SSN #</label>
            <input type="text" class="required" /> <input type="checkbox"><label>Show Numbers</label>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one selection-required">Contact Information</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Phone</legend>
            <div class="row" id="noPhone">
                <p>There are currently no phone number added.</p>
            </div>
            <fieldset class="fieldset-container-four" id="PhoneDetail">
                <legend class="legend-header-four"><span class="primaryText" style="display:none;">Primary </span>Phone (1)</legend>
                <div class="header-link">
                <!--    <a href="#" class="toggle primary">Primary</a> -->
                    <a href="#" id="PhoneDelete">Delete</a>
                </div>
                <div class="row">
                    <input type="checkbox" id="PrimaryPhoneCheckbox" /><label>Primary Phone</label>
                </div>
                <div class="row">
                    <label>Phone type:</label>
                    <select>
                        <option value="0"></option>
                        <option value="1">Home</option>
                        <option value="2">Work</option>
                        <option value="3">Mobile</option>
                        <option value="3">Facility</option>
                        <option value="3">Toll free Phone</option>
                        <option value="3">Fax</option>
                    </select>
                </div>
                <div class="row">
                    <label class="complete-required">Phone Number:</label>
                    <input type="text" placeholder="xxx-xxx-xxxx" class="textbox-small required" />
                    <label class="auto-width">Ext.</label>
                    <input type="text" class="extension" placeholder="xxxx" />
                </div>
                <div class="row">
                    <label class="">Notes:</label>
                    <textArea type="text" class="" ></textArea>
                </div>
            </fieldset>
            <div class="div add-button" id="addPhone">
                <a href="#" data-bind="click: $root.addPhone" id="addPhoneButtonLink">Add Phone</a>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Address</legend>
            <div class="row" id="noAddress">
                <p>There are currently no address added.</p>
            </div>
            <fieldset class="fieldset-container-four" id="AddressDetail">
                <legend class="legend-header-four">
                    <!-- <span class="currentText" style="display:none;">Current </span>
                    <span class="physicalText" style="display:none;">Physical </span>
                    <span class="mailingText" style="display:none;">Mailing </span> -->
                    Address (1)
                </legend>
                <div class="header-link">
                    <!-- <a href="#" class="toggle current">Current</a>
                    <a href="#" class="toggle mailing">Mailing</a>
                    <a href="#" class="toggle physical">Physical</a> -->
                    <a href="#" id="AddressDelete">Delete</a>
                </div>
                <fieldset class="fieldset-container-five">
                    <legend class="legend-header-five complete-required">Address Type</legend>
                    <div class="row">
                        <input type="checkbox" id="MailingAddressType" /><label class="label">Mailing</label>
                        <fieldset class="fieldset-container-three" id="CurrentMailing">
                            <div class="row">
                                <input type="checkbox" class="CurrentCheck" /><label class="auto-width">Current</label>
                                <span class="CurrentWarningNote">
                                    <span class="header-info"><span class="icon-info-sign" title="Additional Information"></span>Saving this address as current will change previously saved current address to de-identify as current.</span>
                                </span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="row">
                        <input type="checkbox" id="PhysicalAddressType" /><label class="label">Physical</label>
                        <fieldset class="fieldset-container-three" id="CurrentPhysical">
                            <div class="row">
                                <input type="checkbox" class="CurrentCheck" />
                                <label class="auto-width">Current</label>
                                <span class="CurrentWarningNote">
                                    <span class="header-info"><span class="icon-info-sign" title="Additional Information"></span>Saving this address as current will change previously saved current address to de-identify as current.</span>
                                </span>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-five">
                    <legend class="legend-header-five">Address</legend>
                    <div class="row">
                        <label class="complete-required">Street Address 1:</label>
                        <input type="text" class="required" />
                    </div>
                    <div class="row">
                        <label>Street Address 2:</label>
                        <input type="text" class="" />
                    </div>
                    <div class="row">
                        <label class="complete-required">City:</label>
                        <input type="text" class="required" />
                    </div>
                    <div class="row">
                        <label class="complete-required">State:</label>
                        <select class="required">
                            <option value="0">MS</option>
                            <option value="1">State 1</option>
                            <option value="2">State 2</option>
                            <option value="3">State 3</option>
                        </select>
                    </div>
                    <div class="row">
                        <label class="complete-required">Zip Code:</label>
                        <input type="text" class="required textbox-small" />
                    </div>
                    <div class="row">
                        <label>County:</label>
                        <input type="text" class="" />
                    </div>
                    <div class="row">
                        <label>Township Code:</label>
                        <select>
                            <option value="0"></option>
                            <option value="1">Code 1</option>
                            <option value="2">Code 2</option>
                            <option value="3">Code 3</option>
                        </select>
                    </div>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Address Description:</legend>
                        <div class="row">
                            <label class="ui-hide">Address Description:</label>
                            <textarea type="text" class=""></textarea>
                        </div>
                    </fieldset>
                </fieldset>
            </fieldset>
            <div class="div add-button" id="addAddress">
                <a href="#" data-bind="click: $root.addAddress" id="addAddressButtonLink">Add Address</a>
            </div>
        </fieldset>

        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Email</legend>
            <div class="row" id="noEmail">
                <p>There are currently no Email added.</p>
            </div>
            <div class="div add-button" id="addEmail">
                <a href="#" data-bind="click: $root.addEmail" id="addEmailButtonLink">Add Email</a>
            </div>
        </fieldset>
    </fieldset>
</div>
'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#PhoneDetail, #AddressDetail, .CurrentWarningNote, #CurrentMailing, #CurrentPhysical").hide();

        $("#addPhoneButtonLink").click(function(){

            var clonedSection = $("#PhoneDetail").clone(true);

            $("#PhoneDetail").each(function() {
                $(this).show();
                $(clonedSection).insertAfter("#PhoneDetail");
            });
            $("#addPhoneButton, #noPhone").hide();
        });

        $("#PhoneDelete").click(function() {
            $("#PhoneDetail").each(function() {
                $(this).remove();
                $("#noPhone").show();
            });
        });
        $("#AddressDelete").click(function() {
            $("#AddressDelete").each(function() {
                $(this).remove();
                $("#noAddress").show();
            });
        });

        $("#addAddressButtonLink").click(function(){

            var clonedSection = $("#AddressDetail").clone(true);

            $("#AddressDetail").each(function() {
                $(this).show();
                $(clonedSection).insertAfter("#AddressDetail");

            });
            $("#addAddressButton, #noAddress").hide();
        });
        $("#AddressDelete").click(function() {
            $("#AddressDetail").each(function() {
                $(this).remove();
            });
        });

        $("#MailingAddressType").click(function() {

            if ($(this).is(":checked")) {
                $("#CurrentMailing").show();
            } else {
                $("#CurrentMailing").hide();
            }
        });

//        $("#PrimaryPhoneCheckbox").click(function() {

//            var AllPrimaryCheck = $(this).closest("#PhoneDetail").siblings("#fieldset-container-four");

  //          if($(this).is(":checked")) {
    //            AllPrimaryCheck.filter("#PrimaryPhoneCheckbox").attr("checked").prop( "onclick", null );
      //      }
       // });

//        $(".current").click(function() {
//            var CurrentTextToggle = $(this).closest(".fieldset-container-four").find(".currentText");
//            var AllCurrentText = $(this).closest(".fieldset-container-four").siblings();
//
//            $(this).toggleClass("on");
//
//            if($(this).hasClass("on")) {
//                CurrentTextToggle.show();
//            } else {
//                CurrentTextToggle.hide();
//            }

//            AllCurrentText.find(".currentText").hide();
//            AllCurrentText.find(".on").removeClass("on");
//        });

        $("#MailingAddressType").click(function() {

            if ($(this).is(":checked")) {
                $("#CurrentMailing").show();
            } else {
                $("#CurrentMailing").hide();
            }
        });

        $("#PhysicalAddressType").click(function() {

            if ($(this).is(":checked")) {
                $("#CurrentPhysical").show();
            } else {
                $("#CurrentPhysical").hide();
            }
        });

        $(".CurrentCheck").click(function() {
            var CurrentTextToggle = $(this).closest(".fieldset-container-three").find(".CurrentWarningNote");
            var AllCurrentText = $(this).closest(".fieldset-container-one").siblings();

            //$(this).toggleClass("on");

            if($(this).is(":checked")) {
                CurrentTextToggle.show();
            } else {
                CurrentTextToggle.hide();
            }
        });


        $(".mailing").click(function() {
            var MailingTextToggle = $(this).closest(".fieldset-container-four").find(".mailingText");
            var AllMailingText = $(this).closest(".fieldset-container-four").siblings();

            $(this).toggleClass("on");

            if($(this).hasClass("on")) {
                MailingTextToggle.show();
            } else {
                MailingTextToggle.hide();
            }

            AllMailingText.find(".mailingText").hide();
            AllMailingText.find(".on").removeClass("on");

        });
        $(".physical").click(function() {

            var PhysicalTextToggle = $(this).closest(".fieldset-container-four").find(".physicalText");

            $(this).toggleClass("on");
            if($(this).hasClass("on")) {
                PhysicalTextToggle.show();
            } else {
                PhysicalTextToggle.hide();
            }
        });
        $(".primary").click(function() {

            var PrimaryTextToggle = $(this).closest(".fieldset-container-four").find(".primaryText");

            $(this).toggleClass("on");
            if($(".primary").hasClass("on")) {
                PrimaryTextToggle.show();
            } else {
                PrimaryTextToggle.hide();
            }
        });

    })

</script>
'?>