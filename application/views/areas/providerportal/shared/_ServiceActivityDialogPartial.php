<style type="text/css">
    .cycle-wrapper {
        width: 775px !important;
    }
    #serviceActivityDialog {
        width: 750px !important;
        overflow-y: auto !important;
    }
</style>
<div id="serviceActivityDialog" title="Service Activity" style="display: none; ">
    <div class="cycle-prev cycle-wrapper">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Service Activity</legend>
            <div class="header-info">
                <h2>Cicio Smith<small style="float: right">MA# 408204321048</small></h2>
                <hr/>
                <h3>Service Date: 06/11/2015</h3>
            </div>
            <div class="row">
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Address:</span>
                        <span class="data-element">100 Main St. <br/>Columbia MD, 21750</span>
                    </div>
                </div>
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Phone Number:</span>
                        <span class="data-element">(240) 123-5871</span>
                    </div>
                </div>
            </div>
            <br/>
            <table class="generalTable">
                <caption class="caption-header">Services
                    <div class="TaskDetailLink"><a href="#">Add Service Activity</a></div>
                </caption>
                <thead>
                <tr>
                    <th>Service Name</th>
                    <th>Service Time</th>
                    <th>Provider Name</th>
                    <th>Provider Number</th>
                    <th>Staff Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Grocery Delivery</td>
                    <td>
                        10:00am - 10:30am
                    </td>
                    <td>
                        ABC Provider
                    </td>
                    <td>
                        234321452345
                    </td>
                    <td>Carrol Lot</td>
                    <td>Ready</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>Dental Care</td>
                    <td>
                        12:15pm - N/A
                    </td>
                    <td>
                        123 Provider
                    </td>
                    <td>
                        8946848988
                    </td>
                    <td>Candace Kind</td>
                    <td><span class="icon-warning-sign"></span>Pending Activity</td>
                    <td>
                        <a href="#" onclick="resolvePendingActivity()">View</a>
                        <a href="#" onclick="resolvePendingActivity()">Resolve</a>
                    </td>
                </tr>
                <tr>
                    <td>Immunizations</td>
                    <td>
                        12:45pm - 1:00pm
                    </td>
                    <td>
                        ABC Provider
                    </td>
                    <td>
                        234321452345
                    </td>
                    <td>Carrol Lot</td>
                    <td>Closed</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>Eye Care</td>
                    <td>
                        12:45pm - 1:15pm
                    </td>
                    <td>
                        XYZ Provider
                    </td>
                    <td>
                        68464646889
                    </td>
                    <td>Hellen Troy</td>
                    <td>Closed</td>
                    <td><a href="#">View</a></td>
                </tr>
                </tbody>
            </table>
            <br/><br/>
            <div id="scheduler"></div>
            <br/>
            <br/>
            <table class="generalTable">
                <caption class="caption-header">Claims</caption>
                <thead>
                <tr>
                    <th>Claim Date</th>
                    <th>Batch ID</th>
                    <th>Total Billed</th>
                    <th>Total Paid</th>
                    <th>Claim Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>04/05/2015</td>
                    <td>10001</td>
                    <td>$75.00</td>
                    <td>$25.00</td>
                    <td>Original</td>
                    <td>Paid</td>
                    <td><a href="#" onclick="callServiceAcitivityDialog()">View</a></td>
                </tr>
                <tr>
                    <td>04/08/2015</td>
                    <td>10002</td>
                    <td>$75.00</td>
                    <td>$70.00</td>
                    <td>Adjustment</td>
                    <td>Paid</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>04/21/2015</td>
                    <td>10003</td>
                    <td>$5.00</td>
                    <td>$0.00</td>
                    <td>Original</td>
                    <td><span class="icon-warning-sign"></span>Rejected</td>
                    <td><a href="#">View</a></td>
                </tr>
                </tbody>
            </table>

            <div style="background: #efefef; padding: 10px; font-size: 125%; font-weight: bold">
                <div class="row">
                    <div class="column-left">
                        <div class="column-left">
                            Total Billed:
                        </div>
                        <div class="column-left text-right">
                            $80.00
                        </div>
                    </div>
                    <div class="column-left" >
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="column-left" >
                        <div class="column-left">
                            Total Rejected:
                        </div>
                        <div class="column-left text-right" style="color: red">
                            $5.00
                        </div>
                    </div>
                    <div class="column-left" >
                        <div class="column-left text-right">
                            Total Paid:
                        </div>
                        <div class="column-left text-right">
                            $70.00
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
    </div>
    <div class=" cycle-next cycle-wrapper">
        <div style="background: #efefef; padding: 10px; border-bottom: 1px solid #999;">
            <button onclick="backToServiceActivity()">Back</button>
        </div>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Service Activity</legend>
            <div class="header-info">
                <h2>Dental Care</h2>
                <h3>Service Date: 06/11/2015</h3>
            </div>
            <div class="row">
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Client Name:</span>
                        <span class="data-element">Cicio Smith</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Client MA #:</span>
                        <span class="data-element">408204321048</span>
                    </div>
                </div>
                <div class="column-left">
                    <div class="row summary">
                        <span class="label">Provider Name/Number:</span>
                        <span class="data-element">123 Provider - 8946848988</span>
                    </div>
                    <div class="row summary">
                        <span class="label">Staff Name:</span>
                        <span class="data-element">Candace Kind</span>
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

<script id="editor" type="text/x-kendo-template">
   <fieldset class="fieldset-container-one">
       <legend class="legend-header-one">Service Information</legend>
       <div class="row">
           <label for="">Service Type:</label>
            <select name="" id="" class=" required">
                <option value="" checked>Dental Care</option>
            </select>
       </div>
       <div class="row">
           <label for="addClockIn">Clock-In:</label>
           <span class="k-widget k-timepicker k-header"><span class="k-picker-wrap k-state-default"><input id="timepicker" value="12:15 PM" data-role="timepicker" type="text" class="k-input required" role="combobox" aria-expanded="false" aria-owns="timepicker_timeview" aria-disabled="false" aria-readonly="false" style="width: 100%;"><span unselectable="on" class="k-select" role="button" aria-controls="timepicker_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
       </div>
       <div class="row">
           <label for="addClockOut">Clock-Out:</label>
           <span class="k-widget k-timepicker k-header"><span class="k-picker-wrap k-state-default"><input id="timepicker" value="" data-role="timepicker" type="text" class="k-input required" role="combobox" aria-expanded="false" aria-owns="timepicker_timeview" aria-disabled="false" aria-readonly="false" style="width: 100%;"><span unselectable="on" class="k-select" role="button" aria-controls="timepicker_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
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
               <input id="chkSelectAll" name="Select All" type="checkbox" value="true" checked="checked"><input name="Select All" type="hidden" value="false">                            <label for="chkSelectAll">Select All</label>
               <br>
               <input type="checkbox" name="ServiceActivity.AvailableValidations[0].Checked" id="PassMissingClockOutTimeValidation" class="chkValidate" value="true" checked="checked">
               <label for="PassMissingClockOutTimeValidation" style="width: 350px !important;">Missing Clock-out</label>
               <input id="ServiceActivity_AvailableValidations_0__ValidationName" name="ServiceActivity.AvailableValidations[0].ValidationName" type="hidden" value="PassMissingClockOutTimeValidation">
               <input data-val="true" data-val-number="The field ValidationId must be a number." id="ServiceActivity_AvailableValidations_0__ValidationId" name="ServiceActivity.AvailableValidations[0].ValidationId" type="hidden" value="7">
               <input id="ServiceActivity_AvailableValidations_0__ValidationDescription" name="ServiceActivity.AvailableValidations[0].ValidationDescription" type="hidden" value="Missing Clock-out">                                <br>
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

</script>
<script id="event-template" type="text/x-kendo-template">
    <div>Service: #: serviceName #</div>
    <div>
    </div>
</script>
<script>


        function callServiceAcitivityDialog(){
            $('#serviceActivityDialog').dialog({
                width: "auto",
                height: 800,
                draggable: false,
                resizable: false,
                modal: true,
                buttons: {
                    close : function(){
                        $(this).dialog("close");
                    }
                }

            });
        }

        function resolvePendingActivity(){
            $('#serviceActivityDialog').cycle('next');
        }

        function backToServiceActivity(){
            $('#serviceActivityDialog').cycle('prev');
        }
    $(document).ready(function(){
        $('#serviceActivityDialog').cycle({
            fx: "scrollHorz",
            easing: "easeOutExpo",
            speed: 600
        });
        $('#serviceActivityDialog').cycle('pause');


        $("#scheduler").kendoScheduler({
            date: new Date("2015/6/11"),
            eventTemplate: $("#event-template").html(),
            editable: {
                template: $("#editor").html(),
                window: {
                    title: "Clock-In/Clock-Out",
                    animation: false,
                    width: 700
                }
            },
            startTime: new Date("2013/6/13 07:00 AM"),
            height: 450,
            views: [
                "day",
                { type: "timeline", eventHeight: 50}
            ],
            group: {
                resources: ["Providers"]
            },
            timezone: "Etc/UTC",
            dataSource: [
                {
                    id: 1,
                    start: new Date("2015/6/11 6:00 AM"),
                    end: new Date("2015/6/11 6:30 AM"),
                    serviceName: "Grocery Delivery",
                    providerName: "ABC Provider",
                    staffName: "Carrol Lot",
                    providerId: 1 // the event is held in "Small meeting room" whose value is 1
                },
                {
                    id: 2,
                    start: new Date("2015/6/11 8:15 AM"),
                    end: new Date("2015/6/11 8:16 AM"),
                    serviceName: "Dental Care",
                    providerName: "123 Provider",
                    staffName: "Candace Kind",
                    providerId: 2 // the event is held in "Big meeting room" whose value is 2
                },
                {
                    id: 3,
                    start: new Date("2015/6/11 8:45 AM"),
                    end: new Date("2015/6/11 9:00 AM"),
                    serviceName: "Immunizations",
                    providerName: "ABC Provider",
                    staffName: "Carrol Lot",
                    providerId: 1 // the event is held in "Big meeting room" whose value is 2
                },
                {
                    id: 4,
                    start: new Date("2015/6/11 8:45 AM"),
                    end: new Date("2015/6/11 9:15 AM"),
                    serviceName: "Eye Care",
                    providerName: "XYZ Provider",
                    staffName: "Hellen Troy",
                    providerId: 3 // the event is held in "Big meeting room" whose value is 2
                }
            ],
            resources: [
                {
                    field: "providerId",
                    name: "Providers",
                    dataColorField: "key",
                    dataSource: [
                        { text: "ABC Provider", value: 1, key: "#aabbcc" },
                        { text: "123 Provider", value: 2, key: "#aabbcc" },
                        { text: "XYZ Provider", value: 3, key: "#aabbcc" }
                    ]
                }
            ]
        });
    });
</script>