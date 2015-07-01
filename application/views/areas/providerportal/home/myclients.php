<?php $WorkspaceHeader = '
    <h3>My Clients</h3>
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
            <legend>Filter By</legend>
            <div class="row stacked">
                <label class="filter-required" for="FilterItem">Show me:<span class="filter-required-indicator" title="Selection required to apply filter." aria-hidden="true" role="presentation">*</span><span class="ui-hide filter-required-title">Selection required to apply filter.</span></label>
                <select class="required input-auto-resize selector-medium" id="FilterItem" name="FilterItem" input-resize-enabled="true"><option value="PeopleWithInProgressPss">Clients with In Progress POS</option>
<option value="PeopleWithPendingReviewPss">Clients with Pending Review POS</option>
<option value="PeopleWithClarificationRequestedPss">Clients with Clarification Requested POS</option>
<option value="MyPeopleWithInProgressPss">My Clients with In Progress POS</option>
<option value="MyPeopleWithPendingReviewPss">My Clients with Pending Review POS</option>
<option value="MyPeopleWithClarificationRequestedPss">My Clients with Clarification Requested POS</option>
</select>
                <span class="field-validation-valid" data-valmsg-for="FilterItem" data-valmsg-replace="true"></span>
            </div>
            <div class="row stacked">
                <label class="filter-required" for="ProgramTypeFilterItem">Waiver:<span class="filter-required-indicator" title="Selection required to apply filter." aria-hidden="true" role="presentation">*</span><span class="ui-hide filter-required-title">Selection required to apply filter.</span></label>
                <select class="required input-auto-resize" id="ProgramTypeFilterItem" name="ProgramTypeFilterItem" input-resize-enabled="true"><option value="programtypes/-1">MAPC</option>
<option value="lookupitems/programtypes/-1">TBI/SCI</option>
<option value="programtypes/-2">MFP</option>
<option value="lookupitems/programtypes/-2">IL</option>
<option value="programtypes/-3">LAH</option>
<option value="lookupitems/programtypes/-3">AL</option>
<option value="programtypes/-4">WOA</option>
<option value="programtypes/-5">ICS (Legacy)</option>
<option value="lookupitems/programtypes/-5">E&amp;D</option>
<option value="programtypes/-6">CO</option>
<option value="programtypes/-8">CFC</option>
<option value="programtypes/-9">ICS</option>
<option value="programtypes/-10">DD</option>
</select>
                <span class="field-validation-valid" data-valmsg-for="ProgramTypeFilterItem" data-valmsg-replace="true"></span>
            </div>
            <div class="row stacked">
                <label class="filter-required" for="PssTypeFilterItem">PSS Type:<span class="filter-required-indicator" title="Selection required to apply filter." aria-hidden="true" role="presentation">*</span><span class="ui-hide filter-required-title">Selection required to apply filter.</span></label>
                <select class="required input-auto-resize" id="PssTypeFilterItem" name="PssTypeFilterItem" input-resize-enabled="true"><option value="">All</option>
<option value="lookupitems/planofservicetypes/-1">Initial</option>
<option value="lookupitems/planofservicetypes/-2">Change Request</option>
<option value="lookupitems/planofservicetypes/-3">Recertification</option>
</select>
                <span class="field-validation-valid" data-valmsg-for="PssTypeFilterItem" data-valmsg-replace="true"></span>
            </div>
            <div class="searchspace-footer-bar">
                <div class="float-left">
                    <button id="submit" type="submit">
                        Filter
                    </button>
                </div>
            </div>
        </fieldset>
</div>
<div class="LeftNav-Fixed-Workarea">
<table class="dataTable-list-style" summary="Nurse Monitoring List">
        <thead>
            <tr>
                <th>
                    Client ID
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    First Name
                </th>
                <th>
                    County
                </th>
                <th>
                    POS Type
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    684SGSRG84S6G84S6G84S
                </td>
                <td>
                    Smith
                </td>
                <td>
                    Cicio
                </td>
                <td>
                    Adams
                </td>
                <td>
                    Initial
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

