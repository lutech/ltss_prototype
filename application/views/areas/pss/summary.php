<?php $WorkspaceHeader ='
    <h3>PSS — Summary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Status: In Progress</span>&nbsp;&nbsp;&nbsp;<span>Program: AL</span></h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button style="min-width: 20px !important;"><span class="icon-print"></span></button>
            <button runat="server">Discard
            </button>
            <button id="expandCollapseAll" runat="server">
            </button>
        </div>
    </div>
'?>


<?php $Body ='
<div class="panelbar-formheader-style genericform-style read-only">
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;Overview Information</h4>
            <div class="form-action TaskDetailLink">
                <a href="overview">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">General Information</legend>
                    <div class="column-left">
                        <div class="row summary">
                            <span class="label">Person’s Name:</span>
                            <span class="data-element">Cicio Smith</span>
                        </div>
                        <div class="row summary">
                            <span class="label">Preferred Name:</span>
                            <span class="data-element">Cicio Smith</span>
                        </div>
                        <div class="row summary">
                            <span class="label">Primary Phone #</span>
                            <span class="data-element">(123) 456-7890</span>
                        </div>
                        <div class="row summary">
                            <span class="label">DOB:</span>
                            <span class="data-element">01/01/1950</span>
                        </div>
                        <div class="row summary">
                            <span class="label">Age:</span>
                            <span class="data-element">65</span>
                        </div>

                    </div>
                    <div class="column-right">
                        <div class="row summary">
                            <span class="label">MA#</span>
                            <span class="data-element">68434684684</span>
                        </div>
                        <div class="row summary">
                            <span class="label">MA# Coverage Group:</span>
                            <span class="data-element">68434684684</span>
                        </div>
                        <div class="row summary">
                            <span class="label">MA# Start Date:</span>
                            <span class="data-element">XX/XX/XXXX</span>
                        </div>
                        <div class="row summary">
                            <span class="label">MA# End Date:</span>
                            <span class="data-element">XX/XX/XXXX</span>
                        </div>

                        <div class="row summary">
                            <span class="label">Guardian of Person:</span>
                            <span class="data-element">Yes</span>
                        </div>

                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Preference that are Important To:</legend>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">#1 Prefference:</legend>
                        <div class="row">
                            <SPAN CLASS="LABEL section-submit-required ui-hide">Comments:</SPAN>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">#2 Prefference:</legend>
                        <div class="row">
                            <SPAN CLASS="LABEL section-submit-required ui-hide">Comments:</SPAN>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Clinical and Support Needs that are Important For:</legend>
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two">#1 Need:</legend>
                        <div class="row">
                            <SPAN CLASS="LABEL section-submit-required ui-hide">Comments:</SPAN>
                            <textarea class="comments-textarea"></textarea>
                        </div>
                    </fieldset>
                </fieldset>

                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Overview</legend>
                    <div class="row">
                        <div class="column-left">
                            <div class="row summary">
                                <label>Create Date:</label>
                                <span class="data-element">MM/DD/YYYY</span>
                            </div>
                            <div class="row summary">
                                <label>PSS End Date:</label>
                                <span class="data-element">MM/DD/YYYY</span>
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="row summary">
                                <label>Individual is enrolled in:</label>
                                <span class="data-element">AL</span>
                            </div>

                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <label class="section-submit-required">Waiver:</label>
                        <select type="text" value="1">
                            <option value="1" checked>AL</option>
                            <option value="2" checked>E&D</option>
                            <option value="3" checked>TBI/SCI</option>
                            <option value="4" checked>IL</option>
                        </select>
                    </div>
                    <div class="row">
                        <label class="section-submit-required">PSS Type:</label>
                        <select type="text" value="2">
                        <option value="1" checked></option>
                            <option value="1" checked>Initial</option>
                            <option value="2" checked>Recertification</option>
                            <option value="3" checked>Change Request</option>
                        </select>
                    </div>
                    <div class="row">
                        <label class="section-submit-required">PSS Effective Date:</label>
                        <input class="readonly" type="text" value="MM/DD/YYYY" />
                    </div>
                    <div class="row">
                        <label class="section-submit-required">Reason for New PSS:</label>
                         <select class="readonly">
                        	<option value="0" checked></option>
                        	<option value="1" checked>Change in Services</option>
                        	<option value="2" checked>Change in Health</option>
                        	<option value="3" checked>Change in Provider</option>
                        	<option value="4" checked>Other</option>
                        </select>
                    </div>
                    <div class="row">
                       <label class="section-submit-required">Comments:</label>
                    	<textarea class="comments-textarea"></textarea>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Address to Receive Services</legend>
                        <div class="row">
                           <label class="section-submit-required">Street Address:</label>
                            <select class="readonly" value="0">
                                <option value="0" checked>123 Main Way, Baltimore, MD 20010</option>
                                <option value="1" checked>Alternative Address</option>
                            </select>
                        </div>
                        <div class="row">
                           <label>Address:</label>
                            <span class="data-element">????????</span>
                        <div class="row">
                           <label>Number of People in Home:</label>
                           <span class="data-element">3</span>
                        </div>
                        <div class="row">
                           <label>Lives With:</label>
                           <span class="data-element">Mother, Brother</span>
                        </div>
                        <div class="row">
                           <label>Is setting chosen by the participant?</label>
                           <span class="data-element">Yes</span>
                        </div>
                        <fieldset class="grouped-radiobuttons">
                            <legend class="section-submit-required">Were you given a choice of living setting?</legend>
                            <div class="row">
                                <input type="radio" checked="checked" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">Yes</label>
                                <input type="radio" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">No</label>
                            </div>
                        </fieldset>
                        <fieldset class="grouped-radiobuttons">
                            <legend class="section-submit-required">Have you been given the opportunity to seek work?</legend>
                            <div class="row">
                                <input type="radio" checked="checked" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">Yes</label>
                                <input type="radio" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">No</label>
                                <input type="radio" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">N/A</label>
                            </div>
                        </fieldset>
                        <fieldset class="grouped-radiobuttons">
                            <legend class="section-submit-required">Are you given an opportunity to participate in community activities?</legend>
                            <div class="row">
                                <input type="radio" checked="checked" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">Yes</label>
                                <input type="radio" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">No</label>
                            </div>
                        </fieldset>
                        <fieldset class="grouped-radiobuttons">
                            <legend class="section-submit-required">Do you have control of your personal resources?</legend>
                            <div class="row">
                                <input type="radio" checked="checked" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">Yes</label>
                                <input type="radio" class="readonly" readonly="readonly" disabled="disabled">
                                <label class="grouped-radiobuttons-label">No</label>
                            </div>
                        </fieldset>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: not started"></span>&nbsp;&nbsp;&nbsp;Strengths</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-dataTable" summary="Strengths">
                    <thead>
                        <tr>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Date Created
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Strength Detail
                            </th>
<!--                            <th class="ACTIONS" role="columnheader" tabindex="0" >
                                Actions
                            </th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td role="gridcell" class=" ">
                                05/27/2014
                            </td>
                            <td class=" ">
                                Client is not willing to give up on herself
                            </td>
                            <!--<td class=" ">
                                <A href="#">Edit</A>
                                <A href="#">Remove</A>
                            </td>-->
                        </tr>
                        <tr class="even">
                            <td class=" ">
                                05/27/2014
                            </td>
                            <td class=" ">
                                Client is getting her physical strength back well
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-adjust" title="Section status: in progress"></span>&nbsp;&nbsp;&nbsp;Personal Goals</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-dataTable" summary="Strengths">
                    <thead>
                        <tr>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Date Created
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Goal Category
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Desired Goal
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Steps/Actions
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Progress
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td role="gridcell" class=" ">
                                05/27/2014
                            </td>
                            <td class=" ">
                                Goal Category
                            </td>
                            <td class=" ">
                                desired goal
                            </td>
                            <td class=" ">
                                steps/actions
                            </td>
                            <td class=" ">
                                progress
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-adjust" title="Section status: in progress"></span>&nbsp;&nbsp;&nbsp;Risks</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-dataTable" summary="Strengths">
                    <thead>
                        <tr>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Date Created
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Risk Source
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Risk Detail
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Measures to Minimize Risk
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td role="gridcell" class=" ">
                                05/27/2014
                            </td>
                            <td class=" ">
                                InterRAI Assessment
                            </td>
                            <td class=" ">
                                text
                            </td>
                            <td class=" ">
                                text
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--<div class="panel">
        <div class="header">
            <h4 class="section-submit-required">Self-Direction</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <h5>Current Address</h5>
                <div class="fieldset-container-one">
                    <div class="row">
                        <label class="complete-required">Address Type:</label>
                        <select class="readonly">
                            <option value="0"checked>Facility</option>
                        </select>
                    </div>
                    <div class="row">
                        <label class="complete-required">Address Description:</label>
                        <input type="text" readonly="readonly" class="readonly"/>
                    </div>
                    <div class="row">
                        <span class="label">Address:</span>
                        <div class="data-element">
                        	<span>
                            	123 Main Wasy <br/>
                                Baltimore, MD 20010
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <label>Notes:</label>
                        <textarea class="comments-textarea"readonly="readonly" class="readonly"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;Emergency Preparedness Plan</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                    <!--<h5>Representative</h5>
                    <div class="fieldset-container-one">
                        <nav class="header-link">
                           <a href="#">Edit</a>
                           <a href="#">Delete</a>
                        </nav>
                        <div class="row">
                        <div class="column-left">
                            <p class="row summary">
                                <span class="label">Name:</span>
                                <span class="data-element">John Doe</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Relationship:</span>

                                <span class="data-element">Name:</span>Guardian
                            </p>
                            <p class="row summary">
                                <span class="label">Primary Phone #</span>
                                <span class="data-element"(456) 487-8592</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Address:</span>
                                <span class="data-element">
                                	456 Ivy Way<br/>
                                    Baltimore, MD 20010
                                </span>
                            </p>

                            <p class="row summary">
                                <span class="label">Guardian of Person:</span>
                                <span class="data-element">Yes</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Guardian of Property:</span>
                                <span class="data-element">Yes</span>
                            </p>

                            <p class="row summary">
                                <span class="label">Surrogate:</span>
                                <span class="data-element">No</span>
                            </p>

                            <p class="row summary">
                                <span class="label">Current Representative Payee:</span>
                                <span class="data-element">Yes</span>
                            </p>

                            <p class="row summary">
                                <span class="label">Current Power of Attorney Contact:</span>
                                <span class="data-element">Yes</span>
                            </p>
                        </div>
                            <div class="column-right">
                                <p class="row summary">
                                    <span class="label">Current Durable Power of Attorney Contact:</span>
                                    <span class="data-element">No</span>
                                </p>
                                <p class="row summary">
                                    <span class="label">Current Casemanager or Service Coordinator Contact:</span>
                                    <span class="data-element">No</span>
                                </p>

                                <p class="row summary">
                                    <span class="label">Current Physician:</span>
                                    <span class="data-element">No</span>
                                </p>

                                <p class="row summary">
                                    <span class="label">Current Emergency Contact:</span>
                                    <span class="data-element">Yes</span>
                                </p>
                                <p class="row summary">
                                    <span class="label">Receive copies of all letters about my eligibility and discuss my eligibility:</span>
                                    <span class="data-element">Yes</span>
                                </p>
                                <div class="row summary">
                                    <span class="label">Receive and complete my annual application form for me:</span>
                                    <span class="data-element">Yes</span>
                                </div>
                                <p class="row summary">
                                    <span class="label">Receive a Medicaid Card on my behalf:</span>
                                    <span class="data-element">Yes</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <label>Notes:</label>
                            <textarea class="comments-textarea"readonly="readonly" class="readonly"></textarea>
                        </div>
                    </div>-->
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;Back-up Providers</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-dataTable" summary="Strengths">
                    <thead>
                        <tr>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Primary
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Name
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Relationship
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                MA Enrolled
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Provider Name
                            </th>
                            <th class="ui-state-default" role="columnheader" tabindex="0" >
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td role="gridcell" class=" ">
                                Yes
                            </td>
                            <td class=" ">
                                text
                            </td>
                            <td class=" ">
                                text
                            </td>
                            <td class=" ">
                                text
                            </td>
                            <td class=" ">
                                text
                            </td>
                            <td class=" ">
                                <a href="">Quick View</a>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;Clinical Supports and Needs</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <h5>Continence</h5>
                <div class="fieldset-container-one">
                    <div class="row">
                        <div class="column-left">
                            <p class="row summary">
                                <span class="label">Bladder Continence:</span>
                                <span class="data-element">Continent</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Urinary Collection Device:</span>
                                <span class="data-element">Condom catheter</span>
                            </p>
                        </div>
                        <div class="column-right">
                           <p class="row summary">
                                <span class="label">Bowel Continence:</span>
                                <span class="data-element">Continent</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Pads or Briefs Worn:</span>
                                <span class="data-element">No</span>
                            </p>
                        </div>
                    </div>
                </div>

                <h5>Disease Diagnoses</h5>
                <div class="fieldset-container-one">
                   <div class="column-left">
                        <p class="row summary">
                            <span class="label">Hip fracture during last 30 days (or since last assessment if less than 30 days):</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Other fracture during last 30 days (or since last assessment if less than 30 days):</span>
                            <span class="data-element">Not present</span>
                        </p>
                       <p class="row summary">
                            <span class="label">Alzheimer’s disease:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Dementia other than Alzheimer’s disease:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Hemiplegia:</span>
                            <span class="data-element">Diagnosis present, receiving active treatmentt</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Multiple sclerosis:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Paraplegia:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Parkinson’s disease:</span>
                            <span class="data-element">Not present</span>
                        </p>
                         <p class="row summary">
                            <span class="label">Quadriplegia:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Stroke/CVA:</span>
                            <span class="data-element">Diagnosis present, receiving active treatment</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Coronary heart disease:</span>
                            <span class="data-element">Diagnosis present, receiving active treatment</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">Chronic obstructive pulmonary disease:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Congestive heart failure:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Anxiety:</span>
                            <span class="data-element">Not present</span>
                        </p>
                       <p class="row summary">
                            <span class="label">Bipolar disorder:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Depression:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Schizophrenia:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Pneumonia:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Urinary tract infection in last 30 days:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Cancer:</span>
                            <span class="data-element">Not present</span>
                        </p>
                         <p class="row summary">
                            <span class="label">Diabetes mellitus:</span>
                            <span class="data-element">Diagnosis present, receiving active treatmentt</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Traumatic Brain Injury:</span>
                            <span class="data-element"></span>
                        </p>
                        <p class="row summary">
                            <span class="label">Sever orthopedic or neurological impairment:</span>
                            <span class="data-element"></span>
                        </p>
                        <p class="row summary">
                            <span class="label">Intellectual/Developmental Disability:</span>
                            <span class="data-element"></span>
                        </p>
                    </div>
                </div>

                <h5>Health Conditions</h5>
                <div class="fieldset-container-one">
                   <div class="column-left">
                        <p class="row summary">
                            <span class="label">Falls:</span>
                            <span class="data-element">No fall in last 90 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Recent Falls:</span>
                            <span class="data-element"></span>
                        </p>
                       <p class="row summary">
                            <span class="label">Difficult or unable to move self to standing position unassisted:</span>
                            <span class="data-element">Exhibited daily in last 3 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Difficult or unable to turn self around and face the opposite direction:</span>
                            <span class="data-element">Exhibited daily in last 3 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Dizziness:</span>
                            <span class="data-element">Exhibited daily in last 3 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Unsteady gait:</span>
                            <span class="data-element">Exhibited daily in last 3 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Chest pain:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Difficulty clearing airway secretions:</span>
                            <span class="data-element">Not present</span>
                        </p>
                         <p class="row summary">
                            <span class="label">Abnormal though process:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Delusion – fixed false beliefs:</span>
                            <span class="data-element">Diagnosis present, receiving active treatment</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Hallucinations – false sensory perception:</span>
                            <span class="data-element">Diagnosis present, receiving active treatment</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Aphasia:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Acid reflux – regurgitation of acid from stomach to throat:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Constipation – no bowel movement in 3 days or difficult passage of hard stool:</span>
                            <span class="data-element">Not present</span>
                        </p>
                       <p class="row summary">
                            <span class="label">Diarrhea:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Vomiting:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Difficulty falling asleep or staying asleep, waking up too early, restlessness, non-restful sleep:</span>
                            <span class="data-element">Exhibited daily in last 3 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Too much sleep – excessive amount of sleep that interferes with person’s normal functioning:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Aspiration:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Fever:</span>
                            <span class="data-element">Not present</span>
                        </p>
                    </div>
                    <div class="column-right">
                        <p class="row summary">
                            <span class="label">GI or GU bleeding:</span>
                            <span class="data-element">Diagnosis present, receiving active treatmentt</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Hygiene – unusually poor hygiene, unkempt, disheveled:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Peripheral edema:</span>
                            <span class="data-element">Not present</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Shortness of breath:</span>
                            <span class="data-element">Absence of symptom</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Fatigue (Inability to complete normal daily activities – e.g. ADLs, IADLs):</span>
                            <span class="data-element">Minimal – Diminished energy but complete normal day-to-day activities</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Frequency with which person complains or shows evidence of pain:</span>
                            <span class="data-element">Exhibited daily in last 3 days</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Intensity of highest level of pain present:</span>
                            <span class="data-element">imes when pain is horrible or excruciating</span>
                        </p>
                         <p class="row summary">
                            <span class="label">Consistency of pain:</span>
                            <span class="data-element">Constant</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Breakthrough pain – times in last 3 days when person experienced sudden, acute flare-ups of pain:</span>
                            <span class="data-element">Yes</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Pain control:</span>
                            <span class="data-element">Therapeutic regimen followed, but pain control not adequate</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Conditions/disease make cognitive, ADL, mood or behavior patterns unstable (fluctuating, precarious, or deteriorating):</span>
                            <span class="data-element">Yes</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Experiencing an acute episode, or a flare-up of a recurrent or chronic problem:</span>
                            <span class="data-element">No</span>
                        </p>
                        <p class="row summary">
                            <span class="label">End-stage disease, 6 or fewer months to live:</span>
                            <span class="data-element">Yes</span>
                        </p>
                         <p class="row summary">
                            <span class="label">Self-reported health:</span>
                            <span class="data-element">Good</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Smokes tobacco daily:</span>
                            <span class="data-element">Yes</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Alcohol – highest number of drinks in any "single sitting" in last 14 days:</span>
                            <span class="data-element">None</span>
                        </p>
                        <p class="row summary">
                            <span class="label">Substance abuse:</span>
                            <span class="data-element">No</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-circle-blank" title="Section status: not started"></span>&nbsp;&nbsp;&nbsp;Services</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>PSS Service</th>
                            <th>Service Type</th>
                            <th> Provider Name(s)</th>
                            <th>Units</th>
                            <th>Frequency</th>
                            <th>Rate</th>
                            <th>Cost</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-circle-blank" title="Section status: not started"></span>&nbsp;&nbsp;&nbsp;Service Goals</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>Service(s)</th>
                            <th>Service Goal</th>
                            <th>Desired Outcome</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>&nbsp;&nbsp;<span class="icon-circle-blank" title="Section status: not started"></span>&nbsp;&nbsp;&nbsp;Signatures</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                 <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Signature Name</th>
                            <th>Signature Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;Review</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <h5>PSS Summary Information</h5>
                <div class="fieldset-container-one">
                    <div class="column-left">
                        <div class="row summary">
                            <label>Person currently enrolled?</label>
                            <span class="data-element">Yes</span>
                        </div>
                        <div class="row summary">
                            <label>InterRAI Submit Date</label>
                            <span class="data-element">MM/DD/YYYY</span>
                        </div>
                        <div class="row summary">
                            <label>LOC Effective Date</label>
                            <span class="data-element">MM/DD/YYYY</span>
                        </div>
                        <div class="row summary">
                            <label>Provider names entered?</label>
                            <span class="data-element">Yes</span>
                        </div>

                    </div>
                    <div class="column-right">
                        <div class="row summary">
                            <label>Total PSS Cost</label>
                            <span class="data-element">$XX,XXX.XX</span>
                        </div>
                        <div class="row summary">
                            <label>Cost Neutrality Limit</label>
                            <span class="data-element">$XX,XXX.XX</span>
                        </div>
                        <div class="row summary">
                            <label>Person’s signature captured?</label>
                            <span class="data-element">Yes</span>
                        </div>
                    </div>
                </div>
                <h5>Person’s health and safety needs</h5>
                <div class="fieldset-container-one">
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Does the PSS meet the person’s health and safety needs?</legend>
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">No</label>
                        </legend>
                    </div>
                    <div class="row">
                        <label>Additional Information:</label>
                        <textarea class="comments-textarea">Text area</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>&nbsp;&nbsp;<span class="icon-lock" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;&nbsp;Decision and Clarification Requests</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <!--<h5>Plan of Service Decision</h5>
                <div class="fieldset-container-one">
                    <div class="column-left">
                        <div class="row summary">
                            <label>PSS Status:</label>
                            <span class="data-element">In Progress</span>
                        </div>
                        <div class="row summary">
                            <label>Decision Staff Name:</label>
                            <span class="data-element">MM/DD/YYYY</span>
                        </div>
                        <div class="row summary">
                            <label>LOC Effective Date</label>
                            <span class="data-element">MM/DD/YYYY</span>
                        </div>
                        <div class="row summary">
                            <label>Provider names entered?</label>
                            <span class="data-element">Yes</span>
                        </div>

                    </div>
                    <div class="column-right">
                        <div class="row summary">
                            <label>Total PSS Cost</label>
                            <span class="data-element">$XX,XXX.XX</span>
                        </div>
                        <div class="row summary">
                            <label>Cost Neutrality Limit</label>
                            <span class="data-element">$XX,XXX.XX</span>
                        </div>
                        <div class="row summary">
                            <label>Person’s signature captured?</label>
                            <span class="data-element">Yes</span>
                        </div>
                    </div>
                </div>
                <h5>Person’s health and safety needs</h5>
                <div class="fieldset-container-one">
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Does the PSS meet the person’s health and safety needs?</legend>
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" />
                            <label class="grouped-radiobuttons-label">No</label>
                        </legend>
                    </div>
                    <div class="row">
                        <label>Additional Information:</label>
                        <textarea class="comments-textarea">Text area</textarea>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="header">
            <h4>&nbsp;&nbsp;<span class="icon-lock" title="Section status: not started"></span>&nbsp;&nbsp;&nbsp;Workflow History</h4>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                 <table class="inline-dataTable">
                    <thead>
                        <tr>
                            <th>Action Taken</th>
                            <th>By Whom</th>
                            <th>Date</th>
                            <th>From Status</th>
                            <th>To Status</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--<div class="panel">
        <div class="header">
            <h4>Service History/Vocational History</h4>
        </div>
        <div class="body">
        &lt;!&ndash;
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Outcome #2</legend>
                    <div class="row">
                        <span class="label section-submit-required">What are the Desired Outcomes?</span>
                        <textarea class="comments-textarea"></textarea>
                    </div>

                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two section-submit-required">Who is Going to Provide Support(s)?</legend>

                            <div class="row">
                                <input type="checkbox" checked>
                                <label class="auto-width">Provider 1</label>
                                <fieldset class="fieldset-container-three">
                                    <legend class="legend-header-three section-submit-required" style="margin: 0px 0px 20px 0px;">Associated Services</legend>
                                    <div class="row">
                                        <input type="checkbox" checked>
                                        <label class="auto-width">Service 1</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox">
                                        <label class="auto-width">Service 2</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox">
                                        <label class="auto-width">Service 3</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="row">
                                <input type="checkbox" value="true">
                                <label class="auto-width">Provider 2</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" value="true" checked>
                                <label class="auto-width">Provider 3</label>

                                <fieldset class="fieldset-container-three">
                                    <legend class="legend-header-three section-submit-required" style="margin: 0px 0px 20px 0px;">Associated Services</legend>
                                    <div class="row">
                                        <input type="checkbox" checked>
                                        <label class="auto-width">Service 1</label>
                                    </div>
                                    <div class="row">
                                        <input type="checkbox" checked>
                                        <label class="auto-width">Service 4</label>
                                    </div>
                                </fieldset>
                            </div>
                            <br />
                            <div class="row">
                                <span class="label section-submit-required">How Often or by When?</span>
                                <textarea class="comments-textarea"></textarea>
                            </div>
                </fieldset>
                </fieldset>
            </div>
    <div class="add-to-table">
                <div class="center">
                <span class="addTo-button">
                    <a href="#" data-bind="visible: !$root.SelectedEmergencyBackup().EditMode(), click: $root.saveEmergencyBackup" role="button">Add Outcome</a>
                </span>
                <span class="CancelEdit-link">
                    <a href="#" data-bind="visible: $root.SelectedEmergencyBackup().EditMode(), click: $root.cancelEmergencyBackup" role="button" onclick="removeHighlightTd()" style="display: none;">Cancel</a>
                </span>
            </div>
                <table class="generalTable">
                    <caption class="caption-header">Saved Outcomes</caption>
                    <thead>
                        <tr>
                            <th>Outcome #</th>
                            <th>Desired Outcome</th>
                            <th>Provider/Services</th>
                            <th>How Often</th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</th>
                            <td>Text Here</th>
                            <td>
                                Provider 2/Service 1, Service 4, Service 7;<br />
                                Provider 3/Service 1, Service 3;
                            </th>
                            <td>Text Here</th>
                            <td class="actions"><a>Edit</a>  <a>Delete</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            &ndash;&gt;
        <h5>History Details</h5>
        <div class="fieldset-container-one">
            <div class="header-info"><span class="icon-info-sign"></span>Attach available reports in documentation section</div>
            <div class="row">
            <table class="generalTable">
                <caption class="caption-header">Has the family ever consulted/been seen by anyone about the issues before now?
                    <a href="#"  class="form-action TaskDetailLink">Add</a>
                </caption>
                <thead>
                    <tr>
                        <th>By Whom?</th>
                        <th>When</th>
                        <th>Where</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Text Here</th>
                        <td>XX/XX/XXXX</th>
                        <td>Text Here</th>
                        <td class="actions"><a>Edit</a>  <a>Delete</a></th>
                    </tr>
                </tbody>
            </table>
            </div>
            <br />
            <div class="row">
            <table class="generalTable">
                <caption class="caption-header">Has Cicio Smith ever had a psychological examination?
                    <a href="#"  class="form-action TaskDetailLink">Add</a>
                </caption>
                <thead>
                        <tr>
                            <th>By Whom?</th>
                            <th>When</th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Text Here</th>
                            <td>XX/XX/XXXX</th>
                            <td class="actions"><a>Edit</a>  <a>Delete</a></th>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>-->

</div>
'?>

<?php $Script ='
<script type="text/javascript">
</script>
'?>