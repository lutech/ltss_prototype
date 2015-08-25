<?php $SearchFieldArea = '
<form>
        <fieldset class="fieldset-container-searcharea">
            <legend>Client Search</legend>
            <div class="p-column-left">
                <div class="row stacked">
                    <label>'.$_COOKIE["CommonLabel_Clients_Ownership"].' ID:</label>
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
                  <!--     <a href="'.base_url()."index.php/client/newclientprofile".'">Create New</a> -->
                  <a href="newclientprofile" id="newclientprofile" onclick=" window.location.href = CreateClientUrl() ">Create New</a>
                </div>
            </div>
        </fieldset>
</form>
'?>
<?php $Body = '
<table id="ClientSummaryGrid" class="dataTable">
    <thead>
        <tr>
			<th>'.$_COOKIE["CommonLabel_Clients_Ownership"].' ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Date of Birth</th>
            <th>Jurisdiction</th>
            <th>Facility Name</th>
            <th>SSN #</th>
            <th>MA #</th>
            <th>Primary Phone Number</th>
            <th class="action">Actions</th>
        </tr>
    </thead>
    <tbody>
          <tr>
                <td>
                    589785412589
                </td>
                <td>
                    Smith
                </td>
                <td>
                    Cicio
                </td>
                <td>
                    01/01/1950
                </td>                
                <td>
                    Baltimore
                </td>
                <td>
                    New Haven
                </td>
                <td>
                    ***-**-9876
                </td>
                <td>
                    89652144
                </td>
                <td>
                    (123) 456-7890
                </td>
                <td>
                    <a href="'.base_url()."index.php/client/clientprofilesummary".'">Profile</a>
                </td>
            </tr>
    </tbody>
</table>
'?>
