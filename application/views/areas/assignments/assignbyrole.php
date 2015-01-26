
<?php $WorkspaceHeader ='
    <h3>Staff Assignment</h3>
    <div class="workspace-header-bar">
        <div class="float-right">

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
                <option>ATP Staff</option>
                <option>DEWS Case Managers</option>
            </select>
        </div>
        <div class="searchspace-footer-bar">
            <div class="float-left">
                <button>Apply</button>
            </div>
            <div class="float-right">
                <button id="assignDialogButton" onclick="triggerSearchClientDialog()">Assign</button>
            </div>
        </div>
    </fieldset>
</div>
 <div class="LeftNav-Fixed-Workarea">
 <table class="dataTable">
                <thead>
                    <tr>
                        <th nosorting class="checkbox hide-for-print" width="30px" >
                            <label class="ui-hide" for="cbAll">Check/Uncheck All</label>
                            <input type="checkbox" id="cbAll" name="cbAll" title="Check/Uncheck All" />
                        </th>
                        <th>
                            Client Last Name
                        </th>
                        <th>
                            Assigned to
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                A
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                B
                            </td>
                            <td>
                                Albert Einstien
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                C
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                D
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                E
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                F
                            </td>
                            <td>
                                Albert Einstien
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                G
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                H
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>

                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                I
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                J
                            </td>
                            <td>
                                Albert Einstien
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                K
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                L
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                M
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                N
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                O
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>

                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                P
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                Q
                            </td>
                            <td>
                                Albert Einstien
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                R
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                S
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                T
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                U
                            </td>
                            <td>
                                Albert Einstien
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                V
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                W
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>

                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                X
                            </td>
                            <td>
                                Alfred Hitcock
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                Y
                            </td>
                            <td>
                                Albert Einstien
                            </td>
                        </tr>
                        <tr>
                            <td class="checkbox hide-for-print">
                                <label for=""</label>
                                <input name="SelectedClientIds" type="checkbox" value="" class="atLeastOneChecked" id=""/>
                            </td>
                            <td>
                                Z
                            </td>
                            <td>
                                Unassigned
                            </td>
                        </tr>
                </tbody>
            </table>
 </div>
'?>

<?php //Dialog Includes
require "application/views/areas/assignments/_searchclientdialog.php";
?>
<?php $Script ='
<script type="text/javascript">

    var triggerSearchClientDialog = function() {
    $( "#searchClientDialog" ).dialog({
            modal: true,
            height: "auto",
            width: "auto",
            height: 600,
            width: 800,
            resizable: false,
            draggable : false,
            fluid: true,
            buttons: {
                "Cancel": function() {
                    $(this).dialog("close");
                }
            },
            open: setTimeout(function(){
                $(window).resize();
                },100)
        });
    };
$(window).ready(function(){
});
</script>
'?>