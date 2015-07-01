<style type="text/css">
    .cycle-wrapper {
        width: 775px !important;
    }
    .header-info.alert {
        background: rgba(255, 0, 0, 0.2);
    }
</style>
<div id="serviceActivityDialogAlt" title="Service Activity" style="display: none; width: 750px !important; overflow-y: auto !important;">
    <div class="cycle-prev cycle-wrapper">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Service Activity</legend>
            <div class="header-info">
                <h2>Cicio Smith <span style="font-size: 85%; float: right"><small>Service Date:</small> 06/11/2015</span></h2>
                <h3>MA# 408204321048</h3>
                <hr/>
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
                        8946848988
                    </td>
                    <td>Candace Kind</td>
                    <td><span class="icon-warning-sign"></span>Pending Activity</td>
                    <td>
                        <a href="#" onclick="resolvePendingActivityAlt()">View</a>
                        <a href="#" onclick="callResolveServiceDialogAlt()">Resolve</a>
                    </td>
                </tr>
                <tr>
                    <td>Immunizations</td>
                    <td>
                        12:45pm - 1:00pm
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
                        68464646889
                    </td>
                    <td>Hellen Troy</td>
                    <td>Closed</td>
                    <td><a href="#">View</a></td>
                </tr>
                </tbody>
            </table>
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
                    <td><a href="#" onclick="callServiceAcitivityDialogAlt()">View</a></td>
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
            <button onclick="backToServiceActivityAlt()">Back</button>
        </div>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Service Activity</legend>

            <h4>Client Information:</h4>
            <div class="header-info">
                <h2>Cicio Smith</h2>
                <h3><small>MA# </small>408204321048</h3>
                <hr/>
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
            </div>
            <h4>Service Information:</h4>
            <div class="header-info">
                <h2>Dental Care <span style="font-size: 70%; float: right"><small>Status: </small><span class="icon-warning-sign" style="color: #ff9900 !important;
"></span>Pending Activity</span></h2>
                <h3><small>Service Date: </small>06/11/2015</h3>
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
            <h4>Service Time:</h4>
                <div class="row">
                    <div class="column-left">
                        <div class="header-info">
                            <h2>07:12 AM</h2>
                            <h3>Clock-In</h3>
                        </div>
                    </div>
                    <div class="column-left">
                        <div class="header-info">
                            <h2>07:45 AM</h2>
                            <h3>Clock-Out</h3>
                        </div>
                    </div>
                </div>
            <br/><br/>

            <h4><span class="icon-warning-sign"></span>Pending Reason:</h4>
            <div class="header-info alert">
                Possible overlapping service.
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

<div id="editorAlt">
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

</div>
<script>


        function callServiceAcitivityDialogAlt(){
            $('#serviceActivityDialogAlt').dialog({
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

        function resolvePendingActivityAlt(){
            $('#serviceActivityDialogAlt').cycle('next');
        }

        function backToServiceActivityAlt(){
            $('#serviceActivityDialogAlt').cycle('prev');
        }

        function callResolveServiceDialogAlt() {

            var resolveServiceDialogAlt = $('#editorAlt').data("kendoWindow");
            resolveServiceDialogAlt.open();
            resolveServiceDialogAlt.center();
        }
    $(document).ready(function(){
        $('#serviceActivityDialogAlt').cycle({
            fx: "scrollHorz",
            easing: "easeOutExpo",
            speed: 600
        });
        $('#serviceActivityDialogAlt').cycle('pause');

        $('#editorAlt').kendoWindow({
            width: "600px",
            actions: [
                "Close"
            ],
            visible: false
        });
    });
</script>