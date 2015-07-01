<?php $WorkspaceHeader = '
    <h3>Client Search</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
$Body = '
<div class="js-workarea-panel">
<form>
        <fieldset class="fieldset-container-searcharea">
            <legend>Client Search</legend>
            <div class="p-column-left">
                <div class="row stacked">
                    <!--<label>'.$_COOKIE["CommonLabel_Clients_Ownership"].' ID:</label>-->
                    <label>Client ID:</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>Last Name:</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>First Name:</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>Jurisdiction:</label>
                    <select></select>
                </div>
            </div>
            <div>
                <div class="row stacked">
                    <label>SSN #</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>MA #:</label>
                    <input type="text"/>
                </div>
                <div class="row stacked">
                    <label>Date of Birth:</label>
                    <input type="text"/>
                </div>
            </div>
            <div class="searchspace-footer-bar">
                <div class="float-left">
                    Search:
                   <button type="submit" id="searchProfiles" onclick=" $("#SearchFor").val("Profiles"); ">Profiles</button>
                    <input type="button" id="btnClearFormElements" name="clear" value="Clear" onclick=" clearFormElements(this.form); " />
                </div>
               <div class="float-right">
                        <a href="#" id="_contentlinkCreateClient" onclick=" window.location.href = CreateClientUrl() ">Add New Profile</a>
                    </div>
            </div>
        </fieldset>
</form>
</div>
<div class="LeftNav-Fixed-Workarea">
<table class="dataTable-list-style" summary="Nurse Monitoring List">
        <thead>
            <tr>
                <th>
                    Create Date
                </th>
                <th>
                    Effective Date
                </th>
                <th>
                    Expiration Date
                </th>
                <th>
                    Status
                </th>
                <th>
                    Active/Inactive
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    09/15/2014
                </td>
                <td>

                </td>
                <td>

                </td>
                <td>
                    '.((isset($_COOKIE["locstatus"])) ? $_COOKIE["locstatus"] : "In Progress" ).'
                </td>
                <td>
                    Inactive
                </td>
                <td>
                    <a href="'.base_url()."index.php/providerclient/psshistory".'">View</a>
                    <a href="#">Print</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
'?>

