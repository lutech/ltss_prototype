
<?php $WorkspaceHeader ='
    <h3>Staff Assignment</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="expandCollapseAll" runat="server">
            </button>
        </div>
    </div>
'?>


<?php $Body ='
<div class="js-workarea-panel">
    <fieldset class="fieldset-container-searcharea">
        <legend>Filter By</legend>
        <div class="row stacked">
            <label class="filter-required" for="showMeFilter">Show Me:</label>
            <select class="required input-auto-resize" name="showMeFilter" id="showMeFilter">
                <option>All Staff</option>
                <option>ATP/option>
            </select>
        </div>
        <div class="searchspace-footer-bar">
            <div class="float-left">
                <button>Filter</button>
            </div>
            <div class="float-right">
                <!--<button id="assignDialogButton">Assignment Options</button>-->
            </div>
        </div>
    </fieldset>
</div>
 <div class="LeftNav-Fixed-Workarea">
 <table class="dataTable">
                <thead>
                    <tr>
                        <th>
                            Last Name
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Business Title
                        </th>
                        <th>
                            Facility
                        </th>
                        <th class="actions hide-for-print">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                Einstein
                            </td>
                            <td>
                                Albert
                            </td>
                            <td>
                                Case Manager
                            </td>
                            <td>
                                A+ Facility
                            </td>
                            <td class="hide-for-print">
                                <a href="#" id="assignSummaryDialogButton" onclick="return false;">Assignments Summary</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Hitchcock
                            </td>
                            <td>
                                Alfred
                            </td>
                            <td>
                                Case Manager
                            </td>
                            <td>
                                A+ Facility
                            </td>
                            <td class="hide-for-print">
                                <a href="#" >Assignments Summary</a>
                            </td>
                        </tr>
                </tbody>
            </table>
 </div>
'?>

<?php //Dialog Includes
    require "application/views/areas/assignments/_assigndialog.php";
    require "application/views/areas/assignments/_assignsummarydialog.php";
?>
<?php $Script ='
<script type="text/javascript">
$(window).ready(function(){

    $("#assignDialogButton").on("click", function(){
        $( "#assignDialog" ).dialog({
            modal: true,
            height: "auto",
            width: "auto",
            maxHeight: 600,
            maxWidth: 800,
            resizable: false,
            draggable : false,
            fluid: true,
            buttons: {
                "Submit": function(){
                    },
                "Cancel": function() {
                    $(this).dialog("close");
                }
            }
        });
    });
    $("#assignSummaryDialogButton").on("click", function(){
        $( "#assignSummaryDialog" ).dialog({
            modal: true,
            height: "auto",
            width: "auto",
            maxHeight: 600,
            maxWidth: 800,
            resizable: false,
            draggable : false,
            fluid: true,
            buttons: {
                "Submit": function(){
                    },
                "Cancel": function() {
                    $(this).dialog("close");
                }
            }
        });
    });
});
</script>
'?>