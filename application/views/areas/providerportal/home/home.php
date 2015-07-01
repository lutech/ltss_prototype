<?php $WorkspaceHeader = '
<h3>Dashboard</h3>

<div class="read-edit-toggle">
</div>

<div class="workspace-header-bar">
    <div class="float-left">
    </div>
    <div class="float-right">
    </div>
</div>
';?>
<?php
$Body = '
<div class="genericform-style read-only panelbar-formheader-style">
    <div class="panel startExpanded">
        <div class="header">
            <h4><span class="icon-warning-sign"></span>Pending Service Activities <span style="font-weight: normal; font-size: 75%">(10 most recent)</span></h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                    <table class="inline-dataTable rowgrouping">
                        <thead>
                            <tr>
                                <th>Service Date</th>
                                <th>Client Name</th>
                                <th>Service Name</th>
                                <th>Pending Reason(s)</th>
                                <th>Staff Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="ui-hide">1</span>Yesterday</td>
                                <td>Cicio Smith</td>
                                <td>Dental Care</td>
                                <td>Missing Clock-Out</td>
                                <td>Candace Kind</td>
                                <td><a href="#" onclick="callServiceAcitivityDialog()">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">1</span>Yesterday</td>
                                <td>Julia Roberts</td>
                                <td>Immunizations</td>
                                <td>Missing Clock-Out</td>
                                <td>Carrol Lot</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">2</span>Sunday 10, 2015</td>
                                <td>Denzel Washington</td>
                                <td>Eye Care</td>
                                <td>Missing Clock-Out</td>
                                <td>Hellen Troy</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">2</span>Sunday 10, 2015</td>
                                <td>Adrian Brody</td>
                                <td>Grocery Delivery</td>
                                <td>Missing Clock-In</td>
                                <td>Carrol Lot</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">2</span>Sunday 10, 2015</td>
                                <td>Robert Deniro</td>
                                <td>Personal Care</td>
                                <td>Missing Clock-Out</td>
                                <td>Candace Kind</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">3</span>Saturday 9, 2015</td>
                                <td>Richard Dreyfus</td>
                                <td>Exercise</td>
                                <td>Missing Clock-In</td>
                                <td>Candace Kind</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">4</span>Friday 8, 2015</td>
                                <td>Bill Murray</td>
                                <td>Dental Care</td>
                                <td>Missing Clock-In</td>
                                <td>Carrol Lot</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">4</span>Friday 8, 2015</td>
                                <td>Elizabeth Hurley</td>
                                <td>Personal Care</td>
                                <td>Missing Clock-In</td>
                                <td>Hellen Troy</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">4</span>Friday 8, 2015</td>
                                <td>Will Smith</td>
                                <td>Personal Care</td>
                                <td>Missing Clock-Out</td>
                                <td>Candace Kind</td>
                                <td><a href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><span class="ui-hide">5</span>Thursday 7, 2015</td>
                                <td>Angelina Jolie</td>
                                <td>Exercise</td>
                                <td>Missing Clock-In</td>
                                <td>Hellen Troy</td>
                                <td><a href="#">View</a></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h4><span class="icon-warning-sign"></span>Rejected Claims <span style="font-weight: normal; font-size: 75%">(10 most recent)</span></h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h4>Recent Service Activity <span style="font-weight: normal; font-size: 75%">(Last 3 days)</span></h4>
            <div class="TaskDetailLink">
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>
';
?>
<?php include_once "application/views/areas/providerportal/shared/_ServiceActivityDialogPartial.php"?>
<?php $Script='
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
'?>