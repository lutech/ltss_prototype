<?php $WorkspaceHeader = '
    <h3>Service Activity</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
$Body = '
<style type="text/css">
    .small-text {
        font-size: 95% !important;
        color: #666 !important;
        margin-left: 15px  !important;
        font-size: bold  !important;
    }
</style>
<div class="js-workarea-panel">
<form>
        <fieldset class="fieldset-container-searcharea">
            <legend>Client Search</legend>
            <div class="p-column-left">
                <div class="row stacked">
                    <label>Client Name/ID/MA#:</label>
                    <input type="text" value=""/>
                </div>
                <div class="row stacked">
                    <label>Service Date:</label>
                    <input type="text" class="date required" value="06/11/2015" max-date="today"/>
                </div>
                <div class="row stacked">
                    <label>Exception Type:</label>
                    <select></select>
                </div>
            </div>
            <div>
                <div class="row stacked">
                    <label>Provider Name/Number</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>Staff Name:</label>
                    <input type="text"/>
                </div>
            </div>
            <div class="searchspace-footer-bar">
                <div class="float-left">
                   <button type="submit" id="searchProfiles" onclick=" $("#SearchFor").val("Profiles"); ">Search</button>
                </div>
               <div class="float-right">
                </div>
            </div>
        </fieldset>
</form>
</div>
<div class="LeftNav-Fixed-Workarea">
<table class="dataTable-list-style rowgrouping" summary="Nurse Monitoring List">
        <thead>
            <tr>
                <th>
                    Client Name/ID/MA#
                </th>
                <th>
                    Service Name
                </th>
                <th>
                    Provider Name
                </th>
                <th>
                    Provider Number
                </th>
                <th>
                    Staff Name
                </th>
                <th>
                    Service Time
                </th>
                <th>
                    Exception
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Cicio Smith <span class="small-text">ID# 234863516846314</span><span class="small-text">MA# 598742368</span><span class="small-text"><a href="#" onclick="callServiceAcitivityDialog()">View</a></span>
                </td>
                <td>
                    Grocery Delivery
                </td>
                <td>
                    ABC Provider
                </td>
                <td>
                    234321452345
                </td>
                <td>
                    Carrol Lot
                </td>
                <td>
                    10:00am - 10:30am
                </td>
                <td align="center">

                </td>
            </tr>
            <tr>
                <td>
                    Cicio Smith <span class="small-text">ID# 234863516846314</span><span class="small-text">MA# 598742368</span><span class="small-text"><a href="#" onclick="callServiceAcitivityDialog()">View</a></span>
                </td>
                <td>
                    Dental Care
                </td>
                <td>
                    123 Provider
                </td>
                <td>
                    8946848988
                </td>
                <td>
                    Candace Kind
                </td>
                    <td>
                        12:15pm - N/A
                    </td>
                <td >
                    <span class="icon-warning-sign"></span>
                    Missing Clock-Out
                </td>
            </tr>
            <tr>
                <td>
                    Cicio Smith <span class="small-text">ID# 234863516846314</span><span class="small-text">MA# 598742368</span><span class="small-text"><a href="#" onclick="callServiceAcitivityDialog()">View</a></span>
                </td>
                <td>
                    Immunizations
                </td>
                <td>
                    ABC Provider
                </td>
                <td>
                    234321452345
                </td>
                <td>
                    Carrol Lot
                </td>
                    <td>
                        12:45pm - 1:00pm
                    </td>
                <td align="center">
                </td>
            </tr>
            <tr>
                <td>
                    Cicio Smith <span class="small-text">ID# 234863516846314</span><span class="small-text">MA# 598742368</span><span class="small-text"><a href="#" onclick="callServiceAcitivityDialog()">View</a></span>
                </td>
                <td>
                    Eye Care
                </td>
                <td>
                    XYZ Provider
                </td>
                <td>
                    68464646889
                </td>
                <td>
                    Hellen Troy
                </td>
                    <td>
                        12:45pm - 1:15pm
                    </td>
                <td align="center">
                </td>
            </tr>
            <tr>
                <td>
                    Demi Moore <span class="small-text">ID# 97426545545485552</span><span class="small-text">MA# 982654895</span><span class="small-text"><a href="#" onclick="callServiceAcitivityDialogAlt()">View</a></span>
                </td>
                <td>
                    Bathe
                </td>
                <td>
                    ABC Provider
                </td>
                <td>
                    234321452345
                </td>
                <td>
                    Carrol Lot
                </td>
                    <td>
                        9:45am - 10:30am
                    </td>
                <td align="center">
                </td>
            </tr>
            <tr>
                <td>
                    Demi Moore <span class="small-text">ID# 97426545545485552</span><span class="small-text">MA# 982654895</span><span class="small-text"><a href="#" onclick="callServiceAcitivityDialogAlt()">View</a></span>
                </td>
                <td>
                    Restrooom Assistance
                </td>
                <td>
                    XYZ Provider
                </td>
                <td>
                    68464646889
                </td>
                <td>
                    Hellen Troy
                </td>
                    <td>
                        11:45pm - 12:15am (6/12/2015)
                    </td>
                <td align="center">
                </td>
            </tr>
        </tbody>
    </table>
</div>
'?>


<?php include_once "application/views/areas/providerportal/shared/_ServiceActivityDialogPartial.php"?>
<?php include_once "application/views/areas/providerportal/shared/_ServiceActivityDialogAltPartial.php"?>
