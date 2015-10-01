<?php $WorkspaceHeader = '
    <!-- <h3>People Search</h3>
    <div class="workspace-header-bar">

    </div>-->
'?>

<?php $SearchFieldArea = '
    <form>
        <fieldset class="fieldset-container-searcharea">
            <legend>People Search</legend>
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
                   <button type="submit" id="searchProfiles" onclick=" $("#SearchFor").val("Profiles"); ">Search</button>
        <!--<input type="button" id="btnClearFormElements" name="clear" value="Clear" onclick=" clearFormElements(this.form); " />-->
                </div>
               <!--<div class="float-right">
                        <a href="#" id="_contentlinkCreateClient" onclick=" window.location.href = CreateClientUrl() ">Add New Profile</a>
                    </div>-->
            </div>
        </fieldset>
</form>
'?>
<?php $Body = '
    <table class="dataTable-list-style" summary="Nurse Monitoring List">
        <thead>
            <tr>
                <th>Person&apos;s ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Date of Birth</th>
                <th>County</th>
                <th>Facility</th>
                <th>SSN #</th>
                <th>Active/Inactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2750068OJ75-210</td>
                <td>Smith</td>
                <td>Cicio</td>
                <td>07/15/2000</td>
                <td>Leftore</td>
                <td></td>
                <td>Do providers needs this?</td>
                <td>Inactive</td>
                <td><a href="'.base_url()."index.php/providerclient/psshistory".'">PSS</a></td>
            </tr>
        </tbody>
    </table>
'?>

