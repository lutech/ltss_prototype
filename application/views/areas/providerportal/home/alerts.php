<?php $WorkspaceHeader = '
    <h3>Alerts</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
if (!isset($_COOKIE['locstatus'])){
    setcookie('locstatus', 'In Progress');
};
$Body = '

<div class="js-workarea-panel">
<fieldset class="fieldset-container-searcharea">
            <legend>Alert Search</legend>
            <div class="row stacked">
                <label for="SearchCriteria_CreatedStartDate">Start Date:</label>



<input id="SearchCriteria_CreatedStartDate" name="SearchCriteria.CreatedStartDate" type="text" class="date ">

            </div>
            <div class="row stacked">
                <label for="SearchCriteria_CreatedEndDate">End Date:</label>



<input id="SearchCriteria_CreatedEndDate" name="SearchCriteria.CreatedEndDate" type="text" class="date">

            </div>
            <div class="row stacked">
                <input id="SearchCriteria_ShowAdvanceSearch" name="SearchCriteria.ShowAdvanceSearch" type="checkbox" value="true"><input name="SearchCriteria.ShowAdvanceSearch" type="hidden" value="false">
                <label for="SearchCriteria_ShowAdvanceSearch" class="auto-width">Advance Search</label>
            </div>

            <div class="row stacked float-right">
                <label for="groupResultBy">Group Results By:</label>
                <select id="groupResultBy" input-resize-enabled="true">
                    <option value="noGrouping">No Grouping</option>
                    <option value="clientName">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Name</option>
                    <option value="date">Date</option>
                    <option value="category">Category</option>
                </select>
            </div>
            <div id="advanceSearch" style="display: none;">
                <div class="row stacked">
                    <label for="SearchCriteria_ClientIdOrName">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Name/ID #</label>
                    <input class="text-box single-line" id="SearchCriteria_ClientIdOrName" name="SearchCriteria.ClientIdOrName" type="text" value="" input-resize-enabled="true" disabled="disabled">
                </div>
                <div class="row stacked">
                    <input id="SearchCriteria_HideAccepted" name="SearchCriteria.HideAccepted" type="checkbox" value="true" disabled="disabled"><input name="SearchCriteria.HideAccepted" type="hidden" value="false" disabled="disabled">
                    <label for="SearchCriteria_HideAccepted" class="auto-width">Hide Accepted</label>
                </div>
            </div>
            <div class="searchspace-footer-bar">
                <input type="submit" value="Submit" title="Submit">
                <button type="button" onclick="clearSearchCriteria()">Clear</button>
                <div id="alertActionBtn" class="float-right">
                    <span>Mark as:</span>
                    <button type="button" id="unreadBtn" disabled="disabled">Unread</button>
                    <button type="button" id="readBtn" disabled="disabled">Read</button>
                    <button type="button" id="acceptBtn" disabled="disabled">Accept</button>
                    <button type="button" id="archiveBtn" disabled="disabled">Archive</button>
                </div>
            </div>
        </fieldset>
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
                    <a href="'.base_url()."index.php/levelofcare/details".'">View</a>
                    <a href="#">Print</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
'?>

