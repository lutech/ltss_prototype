
<?php $WorkspaceHeader ='
    <h3>'.$_COOKIE["CommonLabel_Clients_Ownership"].' Profile — Address</h3>
    <div class="workspace-header-bar">
        <div class="float-left">
            <button><a type="button" href="'.base_url()."index.php/client/clientprofilesummary".'">Back to Summary</a></button>
        </div>
        <div class="float-right">
            <!-- <button><a type="button" href="'.base_url()."index.php/client/clientprofilesummary".'">Save</a></button> -->
        </div>
    </div>
'?>


<?php $Body ='
<div class="genericform-style">
    <h4>Address</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one complete-required">Address Type</legend>
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

    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Address</legend>

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

   <!-- </fieldset> -->
    <div class="add-to-table">
        <div class="center">
            <span class="addTo-button">
                <a href="#" id="addAddress" role="button">Save</a>
            </span>
            <span class="CancelEdit-link">
                <a href="#" id="cancelEdit" style="display: none;" data-bind="" role="button">Cancel</a>
            </span>
        </div>
        <table class="generalTable">
            <thead>
                <tr>
                    <th width="15%">Address Type</td>
                    <th width="20%">Address</td>
                    <th width="15%">County</td>
                    <th width="15%">Township Code</td>
                    <th width="25%">Address Description</td>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr id="addedAddress">
                    <td>Mailing, Current Physical</td>
                    <td>123 ABC Street, Childsburg, IL 00000</td>
                    <td>Adams County</td>
                    <td></td>
                    <td>Sister&#8217;s House</td>
                    <td><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td>Current Mailing</td>
                    <td>123 Sesame Street, Childsburg, IL 00000</td>
                    <td>Adams County</td>
                    <td></td>
                    <td></td>
                    <td><a href="#">Edit</a></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#addedAddress, .CurrentAssignment, .CurrentWarningNote, #CurrentMailing, #CurrentPhysical").hide();

//        $(".AddressType").click(function() {
//
//            if ($(".AddressType").val() == "0") {
//                $(".CurrentAssignment").hide();
//            } else {
//                $(".CurrentAssignment").show();
//            }
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

//        $("input.CurrentAssignment").click(function() {
//
//            if ($(".AddressType").val() != "1"){
//                if ($(".CurrentAssignment").is(":checked")) {
//                $(".CurrentWarningNote").show();
//                } else {
//                    $(".CurrentWarningNote").hide();
//                }
//            }
//
//        });


        $("#addAddress").click(function() {
            $("#addedAddress").show();
        });

        $(".CurrentCheck").click(function() {
            var CurrentWarningToggle = $(this).closest(".fieldset-container-three").find(".CurrentWarningNote");
            var AllCurrentText = $(this).closest(".fieldset-container-one").siblings();

            //$(this).toggleClass("on");

            if($(this).is(":checked")) {
                CurrentWarningToggle.show();
            } else {
                CurrentWarningToggle.hide();
            }

            //AllCurrentText.find(".currentText").hide();
            //AllCurrentText.find(".on").removeClass("on");
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