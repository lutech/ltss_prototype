<style type="text/css">
    .cycle-wrapper {
        width: 775px !important;
    }

    .header-info.alert {
        background: rgba(255, 0, 0, 0.2);
    }

    #serviceActivityDialogAlt2 {
        width: 750px !important;
        overflow-y: auto !important;
    }
</style>
<div id="serviceActivityDialogAlt2" title="Service Activity" style="display: none; width: 750px !important; overflow-y: auto !important;">
<div class="cycle-prev cycle-wrapper">
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Service Activity</legend>
    <div class="header-info">
        <h2>Cicio Smith <span style="font-size: 85%; float: right"><small>Service Date:</small> 06/11/2015</span>
        </h2>
        <h3>MA# 598742368</h3>
        <!--                <hr/>-->
        <!--                <div class="row">-->
        <!--                    <div class="column-left">-->
        <!--                        <div class="row summary">-->
        <!--                            <span class="label">Address:</span>-->
        <!--                            <span class="data-element">100 Main St. <br/>Columbia MD, 21750</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="column-left">-->
        <!--                        <div class="row summary">-->
        <!--                            <span class="label">Phone Number:</span>-->
        <!--                            <span class="data-element">(240) 123-5871</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
    </div>
<!--    <br/>-->
<!--    <div style="font-size: 125%; font-weight: bold">-->
<!--        <div class="column-left">-->
<!--        </div>-->
<!--        <div class="column-left text-right">-->
<!--            <div class="column-left" style="vertical-align: bottom">-->
<!--                <h3>POS Limit:</h3>-->
<!--            </div>-->
<!--            <div class="column-left">-->
<!--                <h2>-->
<!--                    $100.00-->
<!--                </h2>-->
<!--                <h4>-->
<!--                    (60 min - 4 units)-->
<!--                </h4>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <br/>
    <br/>
    <table class="generalTable">
        <caption class="caption-header">Services
            <div class="TaskDetailLink">
                <a href="#">Submit Updated Claim</a>
                <a href="#">Add Service Activity</a>
            </div>
        </caption>
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Provider Number</th>
                <th>Staff Name</th>
                <th>Status</th>
                <th>Service Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Personal Assistance</td>
                <td>
                    234321452345
                </td>
                <td>Carrol Lot</td>
                <td>Closed</td>
                <td>
                    10:00am - 10:30am
                </td>
                <td>
                    <a href="#">Add to Watch List</a>
                    <a href="#">Review</a>
                </td>
            </tr>
            <tr>
                <td>Personal Assistance</td>
                <td>
                    8946848988
                </td>
                <td>Candace Kind</td>
                <td>Closed</td>
                <td>
                    12:15pm - 12:30pm
                </td>
                <td>
                    <a href="#">Add to Watch List</a>
                    <a href="#" onclick="resolvePendingActivityAltTwo()">Review</a>
                    <!--                        <a href="#" onclick="callResolveServiceDialogAlt()">Review</a>-->
                </td>
            </tr>
            <tr>
                <td>Shared Attendant</td>
                <td>
                    234321452345
                </td>
                <td>Carrol Lot</td>
                <td>Closed</td>
                <td>
                    12:45pm - 1:00pm
                </td>
                <td>
                    <a href="#">Add to Watch List</a>
                    <a href="#">Review</a>
                </td>
            </tr>
            <tr>
                <td>Personal Assistance</td>
                <td>
                    68464646889
                </td>
                <td>Hellen Troy</td>
                <td>Closed</td>
                <td>
                    12:45pm - 1:15pm
                </td>
                <td>
                    <a href="#">Add to Watch List</a>
                    <a href="#">Review</a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="header-info" style="font-size: 125%; font-weight: bold">
        <div class="row">
            <div class="column-left">
                <div class="">
                </div>
            </div>
            <div class="column-left">
                <div class="column-left text-right">
                    Total Billable:
                </div>
                <div class="column-left text-right">
                    <h3>$150.00</h3>
                    <small>(90 min - 6 units)</small>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <table class="generalTable">
        <caption class="caption-header">Claims</caption>
        <thead>
            <tr>
                <th>Claim Date</th>
                <th>Batch ID</th>
                <th>Claim Type</th>
                <th>Status</th>
                <th>Total Billed</th>
                <th>Total Paid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>04/05/2015</td>
                <td>10001</td>
                <td>Original</td>
                <td>Paid</td>
                <td>$75.00</td>
                <td>$75.00</td>
                <td><a href="#" onclick="callServiceAcitivityDialogAlt()">View</a></td>
            </tr>
            <tr>
                <td>04/08/2015</td>
                <td>10002</td>
                <td>Adjustment</td>
                <td>Paid</td>
                <td>$150.00</td>
                <td>$100.00</td>
                <td><a href="#">View</a></td>
            </tr>
        </tbody>
    </table>
    <div class="header-info" style="font-size: 125%; font-weight: bold">
        <div class="row">
            <div class="column-left">
                <div class="">
                </div>
            </div>
            <div class="column-left">
                <div class="column-left text-right">
                    Total Billed:
                </div>
                <div class="column-left text-right">
                    <h3>$150.00</h3>
                    <small>(90 min - 6 units)</small>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="column-left">
            </div>
            <div class="column-left">
                <div class="column-left text-right">
                    Total Paid:
                </div>
                <div class="column-right text-right">
                    <h3>$100.00</h3>
                    <small>(60 min - 4 units)</small>
                </div>
            </div>
        </div>
    </div>

</fieldset>
</div>
<div class=" cycle-next cycle-wrapper">
<div style="background: #efefef; padding: 10px; border-bottom: 1px solid #999;">
    <button onclick="backToServiceActivityAltTwo()">Back</button>
    <div style="display: inline-block; float: right; margin-right: 10px;">
        <button onclick="backToServiceActivityAltTwo()">Submit Updated Time</button>
        <button onclick="backToServiceActivityAltTwo()">Discard</button>
    </div>
</div>
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Service Activity</legend>

    <div class="header-info">
        <h2>Cicio Smith</h2>
        <h3>
            <small>MA#</small>
            408204321048
        </h3>
        <!--                <hr/>-->
        <!--                <div class="row">-->
        <!--                    <div class="column-left">-->
        <!--                        <div class="row summary">-->
        <!--                            <span class="label">Address:</span>-->
        <!--                            <span class="data-element">100 Main St. <br/>Columbia MD, 21750</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="column-left">-->
        <!--                        <div class="row summary">-->
        <!--                            <span class="label">Phone Number:</span>-->
        <!--                            <span class="data-element">(240) 123-5871</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
    </div>
    <br/>
    <br/>

    <h4>Service Information:</h4>
    <div class="header-info">
        <h2>Personal Assistance <span style="font-size: 70%; float: right"><small>Status:</small> Closed</span></h2>
        <h3>
            <small>Service Date:</small>
            06/11/2015
        </h3>
        <hr/>
        <div class="row">
            <div class="column-left">
                <div class="row summary">
                    <span class="label">Provider Number:</span>
                    <span class="data-element">8946848988</span>
                </div>
            </div>
            <div class="column-left">
                <div class="row summary">
                    <span class="label">Staff Name:</span>
                    <span class="data-element">Candace Kind</span>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="column-left">
            <h4>Time Billed:</h4>
            <div class="header-info">
                <div class="column-left">
                    <h3>07:00 AM</h3>
                    <h4>Clock-In</h4>
                </div>
                <div class="column-left">
                    <h3>07:48 AM</h3>
                    <h4>Clock-Out</h4>
                </div>
                <hr/>
                <div class="row">
                    <div class="column-left"></div>
                    <div class="column-left">
                        <div class="column-left text-right" style="
    vertical-align: baseline;
">
                            <h4>Total Billed:</h4>
                        </div>
                        <div class="column-left text-right" style="
    vertical-align: baseline;
">
                            <h2>48 min</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-right">
            <h4>Time Paid:</h4>
            <div class="header-info">
                <div class="column-left">
                    <h3>07:15 AM</h3>
                    <h4>Clock-In</h4>
                </div>
                <div class="column-left">
                    <h3>07:45 AM</h3>
                    <h4>Clock-Out</h4>
                </div>
                <hr/>
                <div class="row">
                    <div class="column-left"></div>
                    <div class="column-left">
                        <div class="column-left text-right" style="
    vertical-align: baseline;
">
                            <h4>Total Paid:</h4>
                        </div>
                        <div class="column-left text-right" style="
    vertical-align: baseline;
">
                            <h2>30 min</h2>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/>
        </div>
        <br/>

        <div class="column-left">
            <h4>Updated Billable Time
                <a href="#" style="float: right" onclick="callResolveServiceDialogAlt()">Update</a></h4>
            <div class="header-info">
                <div class="row">
                    <div class="column-left">
                        <h3>--</h3>
                        <h4>Clock-In</h4>
                    </div>
                    <div class="column-right">
                        <h3>--</h3>
                        <h4>Clock-Out</h4>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="column-left"></div>
                    <div class="column-left">
                        <div class="column-left text-right" style="
    vertical-align: baseline;
">
                            <h4>Total Paid:</h4>
                        </div>
                        <div class="column-left text-right" style="
    vertical-align: baseline;
">
                            <h2>-</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>

        <table class="generalTable">
            <caption class="caption-header">Service Activity Snapshot History</caption>
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Service Time</th>
                    <th>Updated By</th>
                    <th>Update Method</th>
                    <th>Date Updated</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pending</td>
                    <td>07:12AM - N/A</td>
                    <td>John Smith</td>
                    <td>IVR</td>
                    <td>06/01/15 - 07:12AM</td>
                </tr>
                <tr>
                    <td>Pending</td>
                    <td>N/A - 07:45AM</td>
                    <td>Jane Doe (Help Desk)</td>
                    <td>ISAS</td>
                    <td>06/01/15 - 08:05AM</td>
                </tr>
                <tr>
                    <td>Ready</td>
                    <td>07:12AM - 07:45AM</td>
                    <td>ISAS Billing Process</td>
                    <td>ISAS</td>
                    <td>06/01/15 - 07:12AM</td>
                </tr>
                <tr>
                    <td>Closed</td>
                    <td>07:12AM - 07:45AM</td>
                    <td>ISAS Billing Process</td>
                    <td>ISAS</td>
                    <td>06/01/15 - 07:12AM</td>
                </tr>
            </tbody>
        </table>
</fieldset>
</div>
</div>

<div id="voidConfirm">
    Are you sure you would like to void this Claim?
</div>
<div id="editorAlt">
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Service Information</legend>
        <div class="row">
            <label for="">Service Type:</label>
            <select name="" id="" class=" required">
                <option value="" checked>Personal Assistance</option>
            </select>
        </div>
        <div class="row">
            <label for="addClockIn">Clock-In:</label>
            <span class="k-widget k-timepicker k-header"><span class="k-picker-wrap k-state-default"><input id="timepicker" value="07:00 AM" data-role="timepicker" type="text" class="k-input required" role="combobox" aria-expanded="false" aria-owns="timepicker_timeview" aria-disabled="false" aria-readonly="false" style="width: 100%;"><span unselectable="on" class="k-select" role="button" aria-controls="timepicker_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
        </div>
        <div class="row">
            <label for="addClockOut">Clock-Out:</label>
            <span class="k-widget k-timepicker k-header"><span class="k-picker-wrap k-state-default"><input id="timepicker" value="07:48 AM" data-role="timepicker" type="text" class="k-input required" role="combobox" aria-expanded="false" aria-owns="timepicker_timeview" aria-disabled="false" aria-readonly="false" style="width: 100%;"><span unselectable="on" class="k-select" role="button" aria-controls="timepicker_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Pending Reasons</legend>
        <div class="row">
                    <span class="label" style="width: 400px !important">
                        Please select the exceptions that you want to override by selecting the check box.
                    </span>
        </div>
        <div class="row summary">
            <input id="chkSelectAll" name="Select All" type="checkbox" value="true" checked="checked"><input name="Select All" type="hidden" value="false">
            <label for="chkSelectAll">Select All</label>
            <br>
            <input type="checkbox" name="ServiceActivity.AvailableValidations[0].Checked" id="PassMissingClockOutTimeValidation" class="chkValidate" value="true" checked="checked">
            <label for="PassMissingClockOutTimeValidation" style="width: 350px !important;">Missing Clock-out</label>
            <input id="ServiceActivity_AvailableValidations_0__ValidationName" name="ServiceActivity.AvailableValidations[0].ValidationName" type="hidden" value="PassMissingClockOutTimeValidation">
            <input data-val="true" data-val-number="The field ValidationId must be a number." id="ServiceActivity_AvailableValidations_0__ValidationId" name="ServiceActivity.AvailableValidations[0].ValidationId" type="hidden" value="7">
            <input id="ServiceActivity_AvailableValidations_0__ValidationDescription" name="ServiceActivity.AvailableValidations[0].ValidationDescription" type="hidden" value="Missing Clock-out">
            <br>
                <span id="pendingReasonNotSelectedError" class="label field-validation-valid error" style="display: none; width: 400px !important">At least one pending reason should be selected.
                </span>

        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Comments:</legend>
        <div class="row">
                        <span class="label" style="width: 400px !important">
                            Provider Admin Manual Entry Reason:<br>
                                N/A
                        </span>
        </div>
        <br>

        <div class="row">
                        <span class="label" style="width: 400px !important;">
                            Help Desk Manual Entry Reason:<br>
                                N/A
                        </span>
        </div>
    </fieldset>

</div>
<script>


    function callServiceAcitivityDialogAltTwo() {
        $('#serviceActivityDialogAlt2').dialog({
            width: "auto",
            height: 800,
            draggable: false,
            resizable: false,
            modal: true,
            buttons: {
                "Void Claim": function () {
                    $('#voidConfirm').data("kendoWindow").open().center();
                },
                Close: function () {
                    $(this).dialog("close");
                }
            }

        });
    }

    function resolvePendingActivityAltTwo() {
        $('#serviceActivityDialogAlt2').cycle('next');
    }

    function backToServiceActivityAltTwo() {
        $('#serviceActivityDialogAlt2').cycle('prev');
    }

    function callResolveServiceDialogAltTwo() {

        var resolveServiceDialogAltTwo = $('#editorAlt').data("kendoWindow");
        resolveServiceDialogAltTwo.open();
        resolveServiceDialogAltTwo.center();
    }
    $(document).ready(function () {
        $('#serviceActivityDialogAlt2').cycle({
            fx: "scrollHorz",
            easing: "easeOutExpo",
            speed: 600
        });
        $('#serviceActivityDialogAlt2').cycle('pause');

        $('#editorAlt').kendoWindow({
            width: "600px",
            actions: [
                "Close"
            ],
            visible: false
        });
        $('#voidConfirm').kendoWindow({
            width: "600px",
            actions: [
                "Close"
            ],
            visible: false
        });
    });
</script>