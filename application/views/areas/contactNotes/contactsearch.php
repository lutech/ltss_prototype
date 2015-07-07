<?php $SearchFieldArea = '
<form>
        <fieldset class="fieldset-container-searcharea">
            <legend>Contact Notes Search</legend>
            <div class="p-column-left">
                <div class="row stacked">
                    <label>Search Contacts By:</label>
                    <select id="searchBy">
                        <option id="allC" value="1">All</option>
                        <option id="followUp" value="2">Needs Follow-up</option>

                    </select>
                </div>

                <span id="searchFields">
                    <div class="row stacked">
                        <label>'.$_COOKIE["CommonLabel_Clients_Ownership"].' Last Name:</label>
                        <input type="text"/>
                    </div>
                    <div class="row stacked">
                        <label>'.$_COOKIE["CommonLabel_Clients_Ownership"].' First Name:</label>
                        <input type="text"/>
                    </div>
                    <div class="row stacked" id="dob">
                        <label>Date of Birth:</label>
                        <input type="text" placeholder="MM/DD/YYYY"/>
                    </div>
                    <div class="row stacked">
                        <label>Entered by Staff Name:</label>
                        <input type="text" value="Marissa Whitehouse" /> <!-- Kendo UI AutoComplete, prepopulated with staff name -->
                    </div>
                    <div class="row stacked" id="StartDate">
                        <label>From Date of Contact:</label>
                        <input type="text" placeholder="MM/DD/YYYY" />
                    </div>
                    <div class="row stacked" id="EndDate">
                        <label>To Date of Contact:</label>
                        <input type="text" placeholder="MM/DD/YYYY"/>
                    </div>
                    <div class="row stacked" id="followUpStartDate">
                        <label>From Follow-up Date:</label>
                        <input type="text" placeholder="MM/DD/YYYY" />
                    </div>
                    <div class="row stacked" id="followUpEndDate">
                        <label>To Follow-up Date:</label>
                        <input type="text" placeholder="MM/DD/YYYY"/>
                    </div>

                </span>

            </div>

            <div class="searchspace-footer-bar">
                <div class="float-left">
                    <button type="submit" id="searchProfiles" onclick=" $("#SearchFor").val("Profiles"); ">Search</button>
                </div>
               <div class="float-right">
                    <a href="newContact">Add New Contact</a>
                </div>
            </div>
        </fieldset>
</form>
'?>

<?php $Body = '

<table id="ClientSummaryGrid" class="dataTable">
    <thead>
        <tr>
			<th>Date of Contact</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Date of Birth</th>
            <th>County</th>
            <th>Address</th>
            <th>Phone #</th>
            <th>Need Follow-up</th>
            <th>Follow-up Date</th>
            <th>Reason For Contact</th>
            <th># of Contacts</th>
            <th>Staff Name</th>
            <th class="action">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>02/01/2014</td>
            <td>Fletcher</td>
            <td>Ashton</td>
            <td>01/01/1930</td>
            <td>Hinds</td>
            <td>123 Sesame Street, Jackson</td>
            <td>601-555-1212</td>
            <td>Yes</td>
            <td>03/01/2014</td>
            <td>Follow-up</td>
            <td>1</td>
            <td>Marissa Whitehouse</td>
            <td><a href="'.base_url()."index.php/contactNotes/editContact".'">Edit</a> <a href="#">View</a></td>
        </tr>
    </tbody>
</table>
'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#followUpStartDate, #followUpEndDate").hide();
    });

    $( "#searchBy").change(function() {
        if ($(this).val() == "1") {
                $("#dob, #StartDate, #EndDate").show();
                $("#followUpStartDate, #followUpEndDate").hide();
            } else {
                $("#dob, #StartDate, #EndDate").hide();
                $("#followUpStartDate, #followUpEndDate").show();
            }
    });

//        if ($(this).val() == "2"){
//                $("#searchFields").show();
//            }

//     if ($(this).val() == "1"){
//            $("#aboutPerson").hide();
//            } else {
//            $("#aboutPerson").show();
//        }
//    $( "#followUp, #allC" ).click(function() {
//            $("#searchFields").show();
//
//    });

</script>
'?>
