<?php $WorkspaceHeader ='
    <h3>PSS — Overview Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Status: In Progress</span>&nbsp;&nbsp;&nbsp;<span>Program: AL</span></h3>
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
<div class="genericform-style">
    <h4 class="section-submit-required">&nbsp;&nbsp;<span class="icon-ok-sign" title="Section status: ready for submission"></span>&nbsp;&nbsp;&nbsp;Overview Information</h4>
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
            <legend class="legend-header-two">#1 Preference:</legend><div class="header-link"><a href="#">Delete</a></div>
            <div class="row">
                <SPAN CLASS="LABEL section-submit-required ui-hide">Comments:</SPAN>
                <textarea class="comments-textarea"></textarea>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">#2 Preference:</legend><div class="header-link"><a href="#">Delete</a></div>
            <div class="row">
                <SPAN CLASS="LABEL section-submit-required ui-hide">Comments:</SPAN>
                <textarea class="comments-textarea"></textarea>
            </div>
        </fieldset>
        <div class="add-button">
            <a href="#" data-bind="click: $root.addPhone" id="btnAddPhone">Add Preference</a>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Clinical and Support Needs that are Important For:</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">#1 Need:</legend><div class="header-link"><a href="#">Delete</a></div>
            <div class="row">
                <SPAN CLASS="LABEL section-submit-required ui-hide">Comments:</SPAN>
                <textarea class="comments-textarea"></textarea>
            </div>
        </fieldset>
        <div class="add-button">
            <a href="#" data-bind="click: $root.addPhone" id="btnAddPhone">Add Need</a>
        </div>
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
                <option value="0"></option>
                    <option value="1">123 Main Way, Baltimore, MD 20010</option>
                    <option value="2">Alternative Address</option>
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
                    <input type="radio" checked="checked" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">Yes</label>
                    <input type="radio" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">No</label>
                </div>
            </fieldset>
            <fieldset class="grouped-radiobuttons">
                <legend class="section-submit-required">Have you been given the opportunity to seek work?</legend>
                <div class="row">
                    <input type="radio" checked="checked" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">Yes</label>
                    <input type="radio" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">No</label>
                    <input type="radio" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">N/A</label>
                </div>
            </fieldset>
            <fieldset class="grouped-radiobuttons">
                <legend class="section-submit-required">Are you given an opportunity to participate in community activities?</legend>
                <div class="row">
                    <input type="radio" checked="checked" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">Yes</label>
                    <input type="radio" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">No</label>
                </div>
            </fieldset>
            <fieldset class="grouped-radiobuttons">
                <legend class="section-submit-required">Do you have control of your personal resources?</legend>
                <div class="row">
                    <input type="radio" checked="checked" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">Yes</label>
                    <input type="radio" class="readonly" disabled="disabled">
                    <label class="grouped-radiobuttons-label">No</label>
                </div>
            </fieldset>
    </fieldset>
</div>
'?>

<?php $Script ='
<script type="text/javascript">
</script>
'?>