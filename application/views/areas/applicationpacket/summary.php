<?php $WorkspaceHeader = '
    <h3>Application Packet — Summary</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
if (!isset($_COOKIE['locstatus'])) {
    setcookie('locstatus', 'In Progress');
};
$Body = '
<div class="panelbar-task-style">
    <div class="panel startExpanded">
        <div class="header">
            <h5>Overview</h5>
        </div>
        <div class="body">
            <div class="panelbar-content">
            <h5>Overview Information</h5>
                <div class="fieldset-container-one">
                    <div class="column-left">
                        <p class="row summary">
                            <span class="label">Create Date:</span>
                            <span class="data-element">01/22/2015</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Status:</span>
                            <span class="data-element">Approved</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">Created By:</span>
                            <span class="data-element">John Wall</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Application Type:</span>
                            <span class="data-element">Initial</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Referral Agency:</span>
                            <span class="data-element">DOM AL</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>Enrollment Checklist</h5>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Form Name
                            </th>
                            <th>
                                Submit Date
                            </th>
                            <th>
                                Additional Information
                            </th>
                            <th class="actions">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="icon-ok-sign" title="Submitted."></span>
                                Level of Care
                            </td>
                            <td>
                                07/20/2015
                            </td>
                            <td>
                                <span style="margin-right: 20px"><strong>Effective Date: </strong><span class="data-element">07/23/2015</span></span>
                                <span style="margin-right: 20px"><strong>LOC Decision: </strong><span class="data-element">Approved</span></span>
                            </td>
                            <td>
                                <a href="#">Quick View</a>
                                <a href="#">View List</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon-ok-sign" title="Submitted."></span>
                                Individual Plan
                            </td>
                            <td>
                                07/20/2015
                            </td>
                            <td>
                                <span style="margin-right: 20px"><strong>Effective Date: </strong><span class="data-element">07/23/2015</span></span>
                            </td>
                            <td>
                                <a href="#">Quick View</a>
                                <a href="#">View List</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>Attachments</h5>
            <div class="TaskDetailLink">
                <a href="#">Upload Document</a>
            </div>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Create Date
                            </th>
                            <th>
                                Document Name
                            </th>
                            <th>
                                Comments
                            </th>
                            <th>
                                Uploaded By
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel startExpanded">
        <div class="header">
            <h5>Workflow History</h5>
        </div>
        <div class="body">
            <div class="panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Event/Action
                            </th>
                            <th>
                                By
                            </th>
                            <th>
                                Comment
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
'?>

