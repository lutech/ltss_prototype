<?php $WorkspaceHeader = '
<h3>Level of Care - Summary</h3>
<div class="workspace-header-bar">

    <div class="float-left">
        <button type="button" onclick="window.location.href= \''.base_url('/index.php/levelofcare/history').'\'">Back to List</button>
    </div>

    <div class="float-right">
        <button type="button">Request Clarification</button>
        <button type="button">Submit</button>
        <button id="expandCollapseAll" runat="server"></button>
    </div>

</div>
';?>
<?php $Body = '

<div class="genericform-style read-only panelbar-formheader-style">
    <div class="panel">
        <div class="header">
            <h4>Level of Care Information</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">General Information</legend>
                    <div class="column-left">
                        <p class="row summary">
                            <span class="label">LOC Recommended?</span>
                            <span class="data-element">Yes</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">LOC Source:</span>
                            <span class="data-element">InterRAI</span>
                        </p>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Nurse LOC Decision</h4>
            <div class="TaskDetailLink">
                <a href="#" onclick="window.location.href= \''.base_url('/index.php/levelofcare/nursedecision_edit').'\'">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Decision Information</legend>
                    <div class="row">
                        <label for="loctype" class="complete-required">LOC Type:</label>
                        <input type="text" id="loctype"/>
                    </div>
                    <div class="row">
                        <label for="nurse-nflocdecision" class="complete-required">NF LOC Decision:</label>
                        <input type="text" id="nurse-nflocdecision"/>
                    </div>
                    <div class="row">
                        <label for="nurse-loceffectivedate" class="complete-required">Effective Date:</label>
                        <input type="text" id="nurse-loceffectivedate" class="date"/>
                    </div>
                    <div class="row">
                        <label for="nurse-locdecisiondate" class="complete-required">Decision Date:</label>
                        <input type="text" id="nurse-locdecisiondate" class="date"/>
                    </div>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Signature</legend>
                    <div class="row">
                        <input type="checkbox" id="nurse-locdecisionsignature"/>
                        <label for="nurse-locdecisionsignature" class="complete-required">Signature Captured on File:</label>
                    </div>
                    </fieldset>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Physician LOC Decision</h4>
            <div class="TaskDetailLink">
                <a href="#" onclick="window.location.href= \''.base_url('/index.php/levelofcare/physiciandecision_edit').'\'">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Decision Information</legend>
                    <div class="row">
                        <label for="physician-nflocdecision" class="complete-required">NF LOC Decision:</label>
                        <input type="text" id="physician-nflocdecision"/>
                    </div>
                    <div class="row">
                        <label for="physician-loceffectivedate" class="complete-required">Effective Date:</label>
                        <input type="text" id="physician-loceffectivedate" class="date"/>
                    </div>
                    <div class="row">
                        <label for="physician-locdecisiondate" class="complete-required">Decision Date:</label>
                        <input type="text" id="physician-locdecisiondate" class="date"/>
                    </div>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">Signature</legend>
                    <div class="row">
                        <input type="checkbox" id="physician-locdecisionsignature"/>
                        <label for="physician-locdecisionsignature" class="complete-required">Signature Captured on File:</label>
                    </div>
                    </fieldset>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>Workflow History</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-table noInit">
                    <thead>
                        <tr>
                            <th>
                                Attachment Name
                            </th>
                            <th>
                                Attachment Type
                            </th>
                            <th>
                                Create Date
                            </th>
                            <th>
                                Comments
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" style="text-align: center   ">
                                No data available to display
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="header">
            <h4>Attachments</h4>
            <div class="TaskDetailLink">
                <a href="#">Add</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-table noInit">
                    <thead>
                        <tr>
                            <th>
                                Attachment Name
                            </th>
                            <th>
                                Attachment Type
                            </th>
                            <th>
                                Create Date
                            </th>
                            <th>
                                Comments
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" style="text-align: center   ">
                                No data available to display
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

';?>