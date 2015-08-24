<?php $WorkspaceHeader = '
    <h3>Application Packet — Summary <span>Status: '.$ddaApplicationPacketData->status.'</span><span>Program Type: '.$ddaApplicationPacketData->programtype.'</span></h3>
    <div class="workspace-header-bar">
        <div class="float-left">
            <button type="button" onclick="window.location.href= \''.base_url('/index.php/applicationpacket/history').'\'">Back to List</button>
        </div>
        <div class="float-right">
            '.$requestClarificationDdaApplicationPacket.'
            '.$submitDdaApplicationPacket.'
            '.$discardDdaApplicationPacket.'
            <button id="expandCollapseAll" runat="server"></button>
        </div>
    </div>
'?>

<?php

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
                            <span class="data-element">'.$ddaApplicationPacketData->date->created.'</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Status:</span>
                            <span class="data-element">'.$ddaApplicationPacketData->status.'</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Eligibility Type:</span>
                            <span class="data-element">DDA</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">Created By:</span>
                            <span class="data-element">'.$ddaApplicationPacketData->createdby.'</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Application Type:</span>
                            <span class="data-element">Initial</span>
                        </p>
                        <p class="row summary">
                            <span class="label">CCS Provider Agency:</span>
                            <span class="data-element">CCS Agency</span>
                        </p>
                    </div>
                </div>
                <h5>Waiver Application Status</h5>
                <div class="fieldset-container-one">
                    <div class="column-left">
                        <p class="row summary">
                            <span class="label">ATP Status:</span>
                            <span class="data-element">Active</span>
                        </p>
                        <p class="row summary">
                            <span class="label">ATP Submission Date:</span>
                            <span class="data-element">07/01/2015</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">Financial Decision:</span>
                            <span class="data-element">Approved</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Overall Decision:</span>
                            <span class="data-element">Approved</span>
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
                                06/15/2015
                            </td>
                            <td>
                                <span style="margin-right: 20px"><strong>Effective Date: </strong><span class="data-element">07/23/2015</span></span>
                                <span style="margin-right: 20px"><strong>LOC Decision: </strong><span class="data-element">Approved</span></span>
                            </td>
                            <td>
                                <a href="#">Quick View</a>
                                <a href="'.base_url()."index.php/levelofcare/history".'">View List</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon-ok-sign" title="Submitted."></span>
                                Individual Plan
                            </td>
                            <td>
                                06/15/2015
                            </td>
                            <td>
                                <span style="margin-right: 20px"><strong>Effective Date: </strong><span class="data-element">07/23/2015</span></span>
                            </td>
                            <td>
                                <a href="#">Quick View</a>
                                <a href="'.base_url()."index.php/individualplan/history".'">View List</a>
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
                '.$uploadDocumentDdaApplicationPacket.'
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
                            <th class="actions">
                                Actions
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

<?php require_once "shared/_RequestClarification.php"?>

<?php
$Script='
    <script type="text/javascript">
        $(document).ready(function(){

            $("#requestClarificationDdaApplicationPacket").on("click", function(){
                ltss.overlay.show(
                    {
                    contentSelector: "#requestClarificationDdaApplicationPacketDialog",
                    options: {
                            modal: true,
                            helpers: {
                            overlay: {
                                    opacity: 0.3
                                    }
                            }
                    }
                });

            });

        });
    </script>
'?>

