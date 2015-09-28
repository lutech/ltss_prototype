<?php $WorkspaceHeader = '
    <h3>SSM &mdash; SSM Type</h3>
    <div class="workspace-header-bar">

    </div>
'?>

<?php
if (!isset($_COOKIE['locstatus'])){
    setcookie('locstatus', 'In Progress');
};
$Body = '
<div class="genericform-style">
    <h4>SSM Type</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Program and Client Information</legend>
        <div class="column-left">
            <div class="row summary">
                <span class="label">Program Type:</span>
                <span class="data-element">ID/DD</span>
            </div>
            <div class="row summary">
                <span class="label">Person Name:</span>
                <span class="data-element">ASHLEY JONES</span>
            </div>
            <div class="row summary">
                <span class="label">SSN:</span>
                <span class="data-element">***-**-0642</span>
            </div>
        </div>
        <div class="column-right">
            <div class="row summary">
                <span class="label">Medicaid #</span>
                <span class="data-element">454545454</span>
            </div>
            <div class="row summary">
                <span class="label">Support Coordinator:</span>
                <span class="data-element">Support Coordinator Jyothi</span>
            </div>
            <div class="row summary">
                <span class="label">Targeted Case Manager:</span>
                <span class="data-element">Targeted Case Manager Jyothi</span>
            </div>
        </div>
    </fieldset>

    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">SSM Contact Information</legend>
        <div class="row">
            <label for="ServiceSupportMonitoring_ContactSetting_Id">Contact Setting:</label>
            <select class="withguid" id="ServiceSupportMonitoring_ContactSetting_Id" name="ServiceSupportMonitoring.ContactSetting.Id" input-resize-enabled="true"><option value=""></option>
                <option data-guid="db35bebf-b21d-402a-80b6-5bf97846e8de" selected="selected" value="lookupitems/idddssmcontactsettingtypes/db35bebf-b21d-402a-80b6-5bf97846e8de">In Person</option>
                <option data-guid="5b44c7db-b02e-46a7-a473-9dbc83debf69" value="lookupitems/idddssmcontactsettingtypes/5b44c7db-b02e-46a7-a473-9dbc83debf69">Phone</option>
            </select>
            <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.ContactSetting.Id" data-valmsg-replace="true"></span>
        </div>
        <div class="row" style="display:none;">
            <fieldset class="fieldset-container-three" id="SsmLocation_Div">
                <legend class="legend-header-three" style="background-color: transparent !important"></legend>
                <div class="row">
                    <label class="complete-required" for="ServiceSupportMonitoring_Location">Locations<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide hide-for-print complete-required-title">This field is required to save.</span></label>
                </div>
                <div class="row">
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/6db45842-0576-463c-8269-97b1cfc9be1a" id="lookupitems_idddssmlocationservicestypes_6db45842-0576-463c-8269-97b1cfc9be1a">
                                <label for="lookupitems_idddssmlocationservicestypes_6db45842-0576-463c-8269-97b1cfc9be1a" class="auto-width">Home</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/774f89f9-7173-4ecd-b9da-a553741c44f8" id="lookupitems_idddssmlocationservicestypes_774f89f9-7173-4ecd-b9da-a553741c44f8" checked="checked">
                                <label for="lookupitems_idddssmlocationservicestypes_774f89f9-7173-4ecd-b9da-a553741c44f8" class="auto-width">Day Services Adult</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/1cf25d96-5255-461c-8f46-6947241d6999" id="lookupitems_idddssmlocationservicestypes_1cf25d96-5255-461c-8f46-6947241d6999">
                                <label for="lookupitems_idddssmlocationservicestypes_1cf25d96-5255-461c-8f46-6947241d6999" class="auto-width">Pre Vocational Services</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/de371e63-43cf-4c34-871e-498885d1e26c" id="lookupitems_idddssmlocationservicestypes_de371e63-43cf-4c34-871e-498885d1e26c">
                                <label for="lookupitems_idddssmlocationservicestypes_de371e63-43cf-4c34-871e-498885d1e26c" class="auto-width">In Home Nursing Respite</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/30f74c12-8912-4709-93d5-e7674621caea" id="lookupitems_idddssmlocationservicestypes_30f74c12-8912-4709-93d5-e7674621caea">
                                <label for="lookupitems_idddssmlocationservicestypes_30f74c12-8912-4709-93d5-e7674621caea" class="auto-width">Home and Communtity Supports</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/2ecf7de9-f11f-4a01-b403-f4252d45c379" id="lookupitems_idddssmlocationservicestypes_2ecf7de9-f11f-4a01-b403-f4252d45c379">
                                <label for="lookupitems_idddssmlocationservicestypes_2ecf7de9-f11f-4a01-b403-f4252d45c379" class="auto-width">Supported Employment</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/a8289017-4dfc-4717-a3d2-a52510fcfae7" id="lookupitems_idddssmlocationservicestypes_a8289017-4dfc-4717-a3d2-a52510fcfae7">
                                <label for="lookupitems_idddssmlocationservicestypes_a8289017-4dfc-4717-a3d2-a52510fcfae7" class="auto-width">Behavior Support</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/7d9eb950-c3c6-452d-b376-40d8c451ceaf" id="lookupitems_idddssmlocationservicestypes_7d9eb950-c3c6-452d-b376-40d8c451ceaf">
                                <label for="lookupitems_idddssmlocationservicestypes_7d9eb950-c3c6-452d-b376-40d8c451ceaf" class="auto-width">Crisis Intervention	</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/d177dd87-e2f5-46c4-9db7-71c6cef1dc41" id="lookupitems_idddssmlocationservicestypes_d177dd87-e2f5-46c4-9db7-71c6cef1dc41">
                                <label for="lookupitems_idddssmlocationservicestypes_d177dd87-e2f5-46c4-9db7-71c6cef1dc41" class="auto-width">Crisis Support</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/98d60c3f-0f29-48dd-8f35-88080606a60f" id="lookupitems_idddssmlocationservicestypes_98d60c3f-0f29-48dd-8f35-88080606a60f">
                                <label for="lookupitems_idddssmlocationservicestypes_98d60c3f-0f29-48dd-8f35-88080606a60f" class="auto-width">Host Home</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/aabdc92f-b022-49e8-bf81-4d2eb17f3a7e" id="lookupitems_idddssmlocationservicestypes_aabdc92f-b022-49e8-bf81-4d2eb17f3a7e">
                                <label for="lookupitems_idddssmlocationservicestypes_aabdc92f-b022-49e8-bf81-4d2eb17f3a7e" class="auto-width">Supervised Living</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/caed8f47-e595-4c98-85de-5fa471835c02" id="lookupitems_idddssmlocationservicestypes_caed8f47-e595-4c98-85de-5fa471835c02">
                                <label for="lookupitems_idddssmlocationservicestypes_caed8f47-e595-4c98-85de-5fa471835c02" class="auto-width">Supported Living</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/5227e0a8-cfc5-4013-9a85-90e69077c5fc" id="lookupitems_idddssmlocationservicestypes_5227e0a8-cfc5-4013-9a85-90e69077c5fc">
                                <label for="lookupitems_idddssmlocationservicestypes_5227e0a8-cfc5-4013-9a85-90e69077c5fc" class="auto-width">Job Discovery</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/a147f346-a3f4-4138-a582-a1c7c1f4af41" id="lookupitems_idddssmlocationservicestypes_a147f346-a3f4-4138-a582-a1c7c1f4af41">
                                <label for="lookupitems_idddssmlocationservicestypes_a147f346-a3f4-4138-a582-a1c7c1f4af41" class="auto-width">Physical Therapy</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/44f2fc4b-c5d9-411a-a358-7ab4cc413cb0" id="lookupitems_idddssmlocationservicestypes_44f2fc4b-c5d9-411a-a358-7ab4cc413cb0">
                                <label for="lookupitems_idddssmlocationservicestypes_44f2fc4b-c5d9-411a-a358-7ab4cc413cb0" class="auto-width">Speech Therapy</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/589723e8-9105-4d9a-b482-6f34395d4fe7" id="lookupitems_idddssmlocationservicestypes_589723e8-9105-4d9a-b482-6f34395d4fe7">
                                <label for="lookupitems_idddssmlocationservicestypes_589723e8-9105-4d9a-b482-6f34395d4fe7" class="auto-width">Occupational Therapy</label>
                            </div>
                        </div>
                    <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.LocationIds" data-valmsg-replace="true"></span>
                </div>
                <div class="row" id="PeoplePresentInPersonVisits_Div" style="">
                    <label class="complete-required" for="ServiceSupportMonitoring_PeoplePresentInPersonVisits">People present during in person visits<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide hide-for-print complete-required-title">This field is required to save.</span></label>
                    <textarea class="comments-textarea required" cols="20" id="ServiceSupportMonitoring_PeoplePresentInPersonVisits" name="ServiceSupportMonitoring.PeoplePresentInPersonVisits" rows="2" input-resize-enabled="true">tgegtrt</textarea>
                    <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.PeoplePresentInPersonVisits" data-valmsg-replace="true"></span>
                </div>
            </fieldset>
        </div>

        <div class="row">
            <label class="complete-required" for="ServiceSupportMonitoring_DateOfContact">Date of Contact:<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide hide-for-print complete-required-title">This field is required to save.</span></label>
            <span class="k-widget k-datepicker k-header dateUS noFutureDate required"><span class="k-picker-wrap k-state-default"><input id="ServiceSupportMonitoring_DateOfContact" name="ServiceSupportMonitoring.DateOfContact" type="text" value="09/21/2015 00:00:00" class="dateUS noFutureDate required k-input" data-role="datepicker" role="combobox" aria-expanded="false" aria-owns="ServiceSupportMonitoring_DateOfContact_dateview" aria-disabled="false" aria-readonly="false" title="" input-resize-enabled="true" style="width: inherit;"><span unselectable="on" class="k-select" role="button" aria-controls="ServiceSupportMonitoring_DateOfContact_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span>
            <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.DateOfContact" data-valmsg-replace="true"></span>
        </div>

        <div class="row">



            <!-- <select class="required" id="ServiceSupportMonitoring_TypeOfContact_Id" name="ServiceSupportMonitoring.TypeOfContact.Id" input-resize-enabled="true"><option value=""></option>
                <option selected="selected" value="lookupitems/idddssmtypeofcontacttypes/0a01b045-132a-4f11-9acd-f9de869e63cf">Monthly</option>
                <option value="lookupitems/idddssmtypeofcontacttypes/84a75b34-be4f-4621-b30a-7633df26548f">Quarterly</option>
            </select>
            <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.TypeOfContact.Id" data-valmsg-replace="true"></span>
        </div>

        <div class="fieldset-container-three"> -->

<!-- <fieldset class="fieldset-container-two">
                            <legend class="legend-header-two">Quarter 2 <span style="font-size:80%; font-weight:normal; color:black;">09/01/2015 to 11/30/2015</span></legend>
                            <span class="header-info"><span class="icon-info-sign"></span>The SSM quarters are calculated based on the enrollment (Lock In Span) dates which are 06/01/2015 to 05/31/2016. </span>
                            <div class="row"><strong>Type of Contact</strong>:</div>
                            <hr /> -->

                    <div class="column-left">
                        <fieldset class=" fieldset-container-two" for="ServiceSupportMonitoring_TypeOfContact_Id">
                            <legend class="legend-header-two complete-required">Type of Contact:</legend>
                            <div class="row">Based on the date of contact that you have selected, this SSM falls under Quarter 2 which span from 09/01/2015 through 11/30/2016.</div><hr />
                            <div class="row"><input type="radio" name="monthly"><label class="auto-width">Monthly 1</label></div>
                            <div class="row"><input type="radio" name="monthly"><label class="auto-width">Monthly 2</label></div>
                        </fieldset>
                        <!-- </fieldset> -->

                    </div>

                    <div class="column-right">
                        <table style="margin-top:15px;" class="inline-dataTable">
                            <caption class="caption-header">SSM Quarterly Overview for 06/01/2015 &ndash; 05/31/2016 Enrollment</caption>
                                <thead>
                                    <tr>
                                        <th>QUARTER 1 <span style="padding-top:5px; font-weight:normal; display: inline-block;">06/01/2015 to 08/31/2015</span></th>
                                        <th>QUARTER 2 <span style="padding-top:5px; font-weight:normal; display: inline-block;">09/01/2015 to 11/30/2016</span></th>
                                        <th>QUARTER 3 <span style="padding-top:5px; font-weight:normal; display: inline-block;">12/01/2015 to 02/29/2016</span></th>
                                        <th>QUARTER 4 <span style="padding-top:5px; font-weight:normal; display: inline-block;">03/01/2016 to 05/31/2016</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="icon-ok-circle"></span><span class="auto-width">Monthly 1</span></td>
                                        <td><span class="icon-circle-blank"></span><span class="auto-width">Monthly 1</span></td>
                                        <td><span class="icon-lock"></span><span class="auto-width">Monthly 1</span></td>
                                        <td><span class="icon-lock"></span><span class="auto-width">Monthly 1</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="icon-ok-circle"></span><span class="auto-width">Monthly 2</span></td>
                                        <td><span class="icon-circle-blank"></span><span class="auto-width">Monthly 2</span></td>
                                        <td><span class="icon-lock"></span><span class="auto-width">Monthly 2</span></td>
                                        <td><span class="icon-lock"></span><span class="auto-width">Monthly 2</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="icon-circle-blank"></span><span class="auto-width">Quarterly</span></td>
                                        <td><span class="icon-ok-circle"></span><span class="auto-width">Quarterly</span></td>
                                        <td><span class="icon-lock"></span><span class="auto-width">Quarterly</span></td>
                                        <td><span class="icon-lock"></span><span class="auto-width">Quarterly</span></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>

        </fieldset>
    </fieldset>


    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">SSM Contact Information</legend>
        <div class="row">
            <label for="ServiceSupportMonitoring_ContactSetting_Id">Contact Setting:</label>
            <select class="withguid" id="ServiceSupportMonitoring_ContactSetting_Id" name="ServiceSupportMonitoring.ContactSetting.Id" input-resize-enabled="true"><option value=""></option>
                <option data-guid="db35bebf-b21d-402a-80b6-5bf97846e8de" selected="selected" value="lookupitems/idddssmcontactsettingtypes/db35bebf-b21d-402a-80b6-5bf97846e8de">In Person</option>
                <option data-guid="5b44c7db-b02e-46a7-a473-9dbc83debf69" value="lookupitems/idddssmcontactsettingtypes/5b44c7db-b02e-46a7-a473-9dbc83debf69">Phone</option>
            </select>
            <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.ContactSetting.Id" data-valmsg-replace="true"></span>
        </div>
        <div class="row" style="display:none;">
            <fieldset class="fieldset-container-three" id="SsmLocation_Div">
                <legend class="legend-header-three" style="background-color: transparent !important"></legend>
                <div class="row">
                    <label class="complete-required" for="ServiceSupportMonitoring_Location">Locations<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide hide-for-print complete-required-title">This field is required to save.</span></label>
                </div>
                <div class="row">
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/6db45842-0576-463c-8269-97b1cfc9be1a" id="lookupitems_idddssmlocationservicestypes_6db45842-0576-463c-8269-97b1cfc9be1a">
                                <label for="lookupitems_idddssmlocationservicestypes_6db45842-0576-463c-8269-97b1cfc9be1a" class="auto-width">Home</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/774f89f9-7173-4ecd-b9da-a553741c44f8" id="lookupitems_idddssmlocationservicestypes_774f89f9-7173-4ecd-b9da-a553741c44f8" checked="checked">
                                <label for="lookupitems_idddssmlocationservicestypes_774f89f9-7173-4ecd-b9da-a553741c44f8" class="auto-width">Day Services Adult</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/1cf25d96-5255-461c-8f46-6947241d6999" id="lookupitems_idddssmlocationservicestypes_1cf25d96-5255-461c-8f46-6947241d6999">
                                <label for="lookupitems_idddssmlocationservicestypes_1cf25d96-5255-461c-8f46-6947241d6999" class="auto-width">Pre Vocational Services</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/de371e63-43cf-4c34-871e-498885d1e26c" id="lookupitems_idddssmlocationservicestypes_de371e63-43cf-4c34-871e-498885d1e26c">
                                <label for="lookupitems_idddssmlocationservicestypes_de371e63-43cf-4c34-871e-498885d1e26c" class="auto-width">In Home Nursing Respite</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/30f74c12-8912-4709-93d5-e7674621caea" id="lookupitems_idddssmlocationservicestypes_30f74c12-8912-4709-93d5-e7674621caea">
                                <label for="lookupitems_idddssmlocationservicestypes_30f74c12-8912-4709-93d5-e7674621caea" class="auto-width">Home and Communtity Supports</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/2ecf7de9-f11f-4a01-b403-f4252d45c379" id="lookupitems_idddssmlocationservicestypes_2ecf7de9-f11f-4a01-b403-f4252d45c379">
                                <label for="lookupitems_idddssmlocationservicestypes_2ecf7de9-f11f-4a01-b403-f4252d45c379" class="auto-width">Supported Employment</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/a8289017-4dfc-4717-a3d2-a52510fcfae7" id="lookupitems_idddssmlocationservicestypes_a8289017-4dfc-4717-a3d2-a52510fcfae7">
                                <label for="lookupitems_idddssmlocationservicestypes_a8289017-4dfc-4717-a3d2-a52510fcfae7" class="auto-width">Behavior Support</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/7d9eb950-c3c6-452d-b376-40d8c451ceaf" id="lookupitems_idddssmlocationservicestypes_7d9eb950-c3c6-452d-b376-40d8c451ceaf">
                                <label for="lookupitems_idddssmlocationservicestypes_7d9eb950-c3c6-452d-b376-40d8c451ceaf" class="auto-width">Crisis Intervention	</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/d177dd87-e2f5-46c4-9db7-71c6cef1dc41" id="lookupitems_idddssmlocationservicestypes_d177dd87-e2f5-46c4-9db7-71c6cef1dc41">
                                <label for="lookupitems_idddssmlocationservicestypes_d177dd87-e2f5-46c4-9db7-71c6cef1dc41" class="auto-width">Crisis Support</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/98d60c3f-0f29-48dd-8f35-88080606a60f" id="lookupitems_idddssmlocationservicestypes_98d60c3f-0f29-48dd-8f35-88080606a60f">
                                <label for="lookupitems_idddssmlocationservicestypes_98d60c3f-0f29-48dd-8f35-88080606a60f" class="auto-width">Host Home</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/aabdc92f-b022-49e8-bf81-4d2eb17f3a7e" id="lookupitems_idddssmlocationservicestypes_aabdc92f-b022-49e8-bf81-4d2eb17f3a7e">
                                <label for="lookupitems_idddssmlocationservicestypes_aabdc92f-b022-49e8-bf81-4d2eb17f3a7e" class="auto-width">Supervised Living</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/caed8f47-e595-4c98-85de-5fa471835c02" id="lookupitems_idddssmlocationservicestypes_caed8f47-e595-4c98-85de-5fa471835c02">
                                <label for="lookupitems_idddssmlocationservicestypes_caed8f47-e595-4c98-85de-5fa471835c02" class="auto-width">Supported Living</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/5227e0a8-cfc5-4013-9a85-90e69077c5fc" id="lookupitems_idddssmlocationservicestypes_5227e0a8-cfc5-4013-9a85-90e69077c5fc">
                                <label for="lookupitems_idddssmlocationservicestypes_5227e0a8-cfc5-4013-9a85-90e69077c5fc" class="auto-width">Job Discovery</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/a147f346-a3f4-4138-a582-a1c7c1f4af41" id="lookupitems_idddssmlocationservicestypes_a147f346-a3f4-4138-a582-a1c7c1f4af41">
                                <label for="lookupitems_idddssmlocationservicestypes_a147f346-a3f4-4138-a582-a1c7c1f4af41" class="auto-width">Physical Therapy</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/44f2fc4b-c5d9-411a-a358-7ab4cc413cb0" id="lookupitems_idddssmlocationservicestypes_44f2fc4b-c5d9-411a-a358-7ab4cc413cb0">
                                <label for="lookupitems_idddssmlocationservicestypes_44f2fc4b-c5d9-411a-a358-7ab4cc413cb0" class="auto-width">Speech Therapy</label>
                            </div>
                        </div>
                        <div class="column-left">
                            <div class="row">
                                    <input class="required" name="ServiceSupportMonitoring.LocationIds" type="checkbox" value="lookupitems/idddssmlocationservicestypes/589723e8-9105-4d9a-b482-6f34395d4fe7" id="lookupitems_idddssmlocationservicestypes_589723e8-9105-4d9a-b482-6f34395d4fe7">
                                <label for="lookupitems_idddssmlocationservicestypes_589723e8-9105-4d9a-b482-6f34395d4fe7" class="auto-width">Occupational Therapy</label>
                            </div>
                        </div>
                    <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.LocationIds" data-valmsg-replace="true"></span>
                </div>
                <div class="row" id="PeoplePresentInPersonVisits_Div" style="">
                    <label class="complete-required" for="ServiceSupportMonitoring_PeoplePresentInPersonVisits">People present during in person visits<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide hide-for-print complete-required-title">This field is required to save.</span></label>
                    <textarea class="comments-textarea required" cols="20" id="ServiceSupportMonitoring_PeoplePresentInPersonVisits" name="ServiceSupportMonitoring.PeoplePresentInPersonVisits" rows="2" input-resize-enabled="true">tgegtrt</textarea>
                    <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.PeoplePresentInPersonVisits" data-valmsg-replace="true"></span>
                </div>
            </fieldset>
        </div>

        <div class="row">
            <label class="complete-required" for="ServiceSupportMonitoring_DateOfContact">Date of Contact:<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide hide-for-print complete-required-title">This field is required to save.</span></label>
            <span class="k-widget k-datepicker k-header dateUS noFutureDate required"><span class="k-picker-wrap k-state-default"><input id="ServiceSupportMonitoring_DateOfContact" name="ServiceSupportMonitoring.DateOfContact" type="text" value="09/21/2015 00:00:00" class="dateUS noFutureDate required k-input" data-role="datepicker" role="combobox" aria-expanded="false" aria-owns="ServiceSupportMonitoring_DateOfContact_dateview" aria-disabled="false" aria-readonly="false" title="" input-resize-enabled="true" style="width: inherit;"><span unselectable="on" class="k-select" role="button" aria-controls="ServiceSupportMonitoring_DateOfContact_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span>
            <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.DateOfContact" data-valmsg-replace="true"></span>
        </div>

        <div class="row">
            <fieldset class=" fieldset-container-two" for="ServiceSupportMonitoring_TypeOfContact_Id">
                <legend class="legend-header-two complete-required">Type of Contact:</legend>
                <span class="header-info"><span class="icon-info-sign"></span>The SSM quarters are calculated based on the enrollment (Lock In Span) dates which are 06/01/2015 through 05/31/2016. </span>

            <!-- <select class="required" id="ServiceSupportMonitoring_TypeOfContact_Id" name="ServiceSupportMonitoring.TypeOfContact.Id" input-resize-enabled="true"><option value=""></option>
                <option selected="selected" value="lookupitems/idddssmtypeofcontacttypes/0a01b045-132a-4f11-9acd-f9de869e63cf">Monthly</option>
                <option value="lookupitems/idddssmtypeofcontacttypes/84a75b34-be4f-4621-b30a-7633df26548f">Quarterly</option>
            </select>
            <span class="field-validation-valid" data-valmsg-for="ServiceSupportMonitoring.TypeOfContact.Id" data-valmsg-replace="true"></span>
        </div>

        <div class="fieldset-container-three"> -->
                <div class="row">
                    <div class="column-left">
                        <div class="column-left">
                            <h5 style="margin-left:0; color: #177BC1; font-size:110%">Quarter 1</h5>
                            <div class="fieldset-container-two">
                                <div class="row"><strong>06/01/2015</strong> &ndash; <strong>08/31/2015</strong></div>
                                <hr />
                                <div class="row"><span class="icon-ok-circle"></span><span class="auto-width">Monthly 1</span></div>
                                <div class="row"><span class="icon-ok-circle"></span><span class="auto-width">Monthly 2</span></div>
                                <div class="row"><span class="icon-circle-blank"></span><span class="auto-width">Quarterly</span></div>
                            </div>
                        </div>
                        <div class="column-right">
                        <h5 style="margin-left:0; color: #177BC1; font-size:110%">Quarter 2</h5>
                            <div class="fieldset-container-two">
                                <div class="row"><strong>09/01/2015</strong> &ndash; <strong>11/30/2015</strong></div>
                                <hr />
                                <div class="row"><input type="radio" name="monthly"><label class="auto-width">Monthly 1</label></div>
                                <div class="row"><input type="radio" name="monthly"><label class="auto-width">Monthly 2</label></div>
                                <div class="row"><span class="icon-ok-circle"></span><span class="auto-width">Quarterly</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="column-right">
                        <div class="column-left">
                            <h5 style="margin-left:0; color: #177BC1; font-size:110%">Quarter 3</h5>
                            <div class="fieldset-container-two">
                                <div class="row"><strong>12/01/2015</strong> &ndash; <strong>02/29/2016</strong></div>
                                <hr />
                                <div class="row"><span class="icon-lock"></span><span class="auto-width">Monthly 1</span></div>
                                <div class="row"><span class="icon-lock"></span><span class="auto-width">Monthly 2</span></div>
                                <div class="row"><span class="icon-lock"></span><span class="auto-width">Quarterly</span></div>
                            </div>
                        </div>
                        <div class="column-right">
                            <h5 style="margin-left:0; color: #177BC1; font-size:110%">Quarter 4</h5>
                            <div class="fieldset-container-two">
                                <div class="row"><strong>03/01/2016</strong> &ndash; <strong>05/31/2016</strong></div>
                                <hr />
                                <div class="row"><span class="icon-lock"></span><span class="auto-width">Monthly 1</span></div>
                                <div class="row"><span class="icon-lock"></span><span class="auto-width">Monthly 2</span></div>
                                <div class="row"><span class="icon-lock"></span><span class="auto-width">Quarterly</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </fieldset>
    </fieldset>
</div>


'?>

