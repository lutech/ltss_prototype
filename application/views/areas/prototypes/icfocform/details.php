<?php $WorkspaceHeader = '
<h3>Informed Choice/Freedom of Choice <span>Status: '.((isset($_COOKIE["locstatus"])) ? $_COOKIE["locstatus"] : "In Progress" ).'</span></h3>

<div class="read-edit-toggle">
    <span>View</span>
    <a href="#" onclick="window.location.href= \''.base_url('/index.php/prototypes/icfocedit').'\'">Edit</a>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
    </div>
    <div class="float-right">
        <button type="button" id="submitLoc">Submit</button>
    </div>
</div>
';?>
<?php $Body = '
<div class="genericform-style read-only">
    <h4>Informed Choice/Freedom of Choice</h4>

    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Person Information</legend>
        <div class="column-left">
            <div class="row summary">
                <span class="label">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Full Name:</span>
                <span class="data-element">Cicio Smith</span>
            </div>
            <div class="row summary">
                <span class="label">SSN:</span>
                <span class="data-element">987-45-287</span>
            </div>
            <div class="row summary">
                <span class="label">Medicaid #:</span>
                <span class="data-element">58743969875</span>
            </div>
        </div>
        <div class="column-right">
            <div class="row summary">
                <span class="label">Program Type:</span>
                <span class="data-element">Assisted Living</span>
            </div>
            <div class="row summary">
                <span class="label">Staff Completing Form:</span>
                <span class="data-element">Ben Howard</span>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <label for="InformedChoice_CreatedDate" class="submit-required">Date:</label>
            <input type="text" id="InformedChoice_CreatedDate" class="date" value="01/20/2015"/>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Informed Choice</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Persons Choice of Setting</legend>
            <div class="header-info"><span class="icon-info-sign"></span>By initialing and signing below, I hereby acknowledge my participation in selecting the setting I want and that long term services and supports options were explained to me.</div>
            <div class="row">
                <fieldset class="grouped-radiobuttons">
                    <legend class="grouped-radiobuttons-label full-width selection-submit-required">Options Presented to Person:</legend>
                        <div class="row">
                            <input type="checkbox" id="institionalSettingCheck" checked="checked"/>
                            <label for="institionalSettingCheck" class="">Institutional Setting (Nursing Facility)</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="homeCommunityBasedCheck" checked="checked"/>
                            <label for="homeCommunityBasedCheck" class="">Home and Community-based Setting (Waiver)</label>
                        </div>
                </fieldset>
            </div>
            <br>
            <div class="row">
                <fieldset class="grouped-radiobuttons">
                    <legend class="grouped-radiobuttons-label full-width selection-submit-required">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Choice:</legend>
                    <div class="row">
                        <input type="radio" id="institionalSettingRadio" name="choiceRadio" checked="checked"/>
                        <label for="institionalSettingRadio" class="">Institutional Setting (Nursing Facility)</label>
                    </div>
                    <div class="row">
                        <input type="radio" id="homeCommunityBasedRadio" name="choiceRadio"/>
                        <label for="homeCommunityBasedRadio" class="">Home and Community-based Setting (Waiver)</label>
                    </div>
                </fieldset>
            </div>
            <div id="HcbsInformation">
                <fieldset class="fieldset-container-two">
                    <legend class="legend-header-two">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Choice of HCBS (Waiver)</legend>
                    <div class="header-info"><span class="icon-info-sign"></span>By initialing and signing below, I hereby acknowledge my participation in selecting the waiver I want and that long term services and supports options were explained to me.</div>
                <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend class="grouped-radiobuttons-label full-width selection-submit-required">HCBS (Waiver) Options Presented to Person:</legend>
                            <div class="row">
                                <input type="checkbox" id="alwaiver-checkbox" checked="checked"/>
                                <label for="alwaiver-checkbox" class="">Assisted Living Waiver</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="edwaiver-checkbox" checked="checked"/>
                                <label for="edwaiver-checkbox" class="">Elderly & Disabled Waiver</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="independentlivingwaiver-checkbox"/>
                                <label for="independentlivingwaiver-checkbox" class="">Independent Living Waiver</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="idddwaiver-checkbox"/>
                                <label for="idddwaiver-checkbox" class="">Intellectually Disabled/Developmentally Disabled Waiver</label>
                            </div>
                            <div class="row">
                                <input type="checkbox" id="tbiwiaver-checkbox"/>
                                <label for="tbiwiaver-checkbox" class="">Traumatic Brain Injury Waiver</label>
                            </div>
                        </fieldset>
                    </div>
                    <br>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend class="grouped-radiobuttons-label full-width selection-submit-required">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Choice of HCBS (Waiver):</legend>
                            <div class="row">
                                <input type="radio" id="alwaiver-radio" name="hcbsChoice" checked="checked"/>
                                <label for="alwaiver-radio" class="">Assisted Living Waiver</label>
                            </div>
                            <div class="row">
                                <input type="radio" id="edwaiver-radio" name="hcbsChoice"/>
                                <label for="edwaiver-radio" class="">Elderly & Disabled Waiver</label>
                            </div>
                            <div class="row">
                                <input type="radio" id="independentlivingwaiver-radio" name="hcbsChoice"/>
                                <label for="independentlivingwaiver-radio" class="">Independent Living Waiver</label>
                            </div>
                            <div class="row">
                                <input type="radio" id="idddwaiver-radio" name="hcbsChoice"/>
                                <label for="idddwaiver-radio" class="">Intellectually Disabled/Developmentally Disabled Waiver</label>
                            </div>
                            <div class="row">
                                <input type="radio" id="tbiwiaver-radio" name="hcbsChoice"/>
                                <label for="tbiwiaver-radio" class="">Traumatic Brain Injury Waiver</label>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
            </div>
    </fieldset>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Freedom of Choice</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Provider</legend>
            <div class="row">
                <label for="nurse-nflocdecision" class="submit-required">List of Providers Presented?</label>
                <input type="text" id="nurse-nflocdecision" value="Yes"/>
                <select id="nurse-nflocdecision" style="display: none">
                    <option value="0"></option>
                    <option value="1" selected>Yes</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="row">
                <label for="nurse-nflocdecision" class="submit-required">Provider Chosen:</label>
                <input type="text" id="nurse-nflocdecision" value="A+ Provider"/>
                <select id="nurse-nflocdecision" style="display: none">
                    <option value="0"></option>
                    <option value="1" selected>A+ Provider</option>
                </select>
            </div>
        </fieldset>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Signature:</legend>
        <div class="header-info"><span class="icon-info-sign"></span>I hereby acknowledge that I have also been informed that the Medicaid Program has financial eligibility requirements.  I authorize the agency or attending physician to provide DOM with the information necessary to meet Federal requirements for review and/or assist me in seeking long-term care services</div>
        <div class="row">
            <label for="personsSignature" class="complete-required">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Signature:</label>
            <input type="text" id="personsSignature" value="Signed, paper copy on file."/>
        </div>
        <div class="row" style="display: none" id="AdditionalPersonSignatureInformation">
            <fieldset class="fieldset-container-three">
                <legend class="ui-hide">Explain Other:</legend>
                <div class="row">
@Html.LabelFor(m => m.InformedChoice.PersonSignature.OtherStatus, "Explain:", new { @class="submit-required" })
                    @Html.TextAreaFor(m => m.InformedChoice.PersonSignature.OtherStatus, new { @class = "comments-textarea" })
                </div>
            </fieldset>
        </div>
        <div class="row"  id="RepresentativeInformation">
            <label for="personSignatureDate" class="complete-required">'.$_COOKIE["CommonLabel_Clients_Ownership"].'Signature Date:</label>
            <input type="text" id="personSignatureDate" class="date" value="01/20/2015"/>
        </div>
        <div class="row" style="display: none" id="AdditionalRepresentativeInformation">
            <fieldset class="fieldset-container-three">
                <legend class="ui-hide">Other Representative:</legend>
@Html.EditorFor(m => m.InformedChoice.OtherRepresentative, "PersonNameFirstAndLastOnly")
            </fieldset>
        </div>
        <div class="row" style="display: none" id="PersonRepresentativeSignatureDate">
@Html.LabelFor(m => m.InformedChoice.PersonSignature.StatusDate, "Signature Date:", new { @class="submit-required" })
            @Html.EditorFor(m => m.InformedChoice.PersonSignature.StatusDate, new { type = "date-only", maxDate = "today" })
        </div>
        <div class="row">
            <label for="witnessSignature" class="complete-required">Witness Signature:</label>
            <input type="text" id="witnessSignature" value="Signed, paper copy on file."/>
        </div>
        <div class="row" style="display: none" id="WitnessSignatureInformation">
            <fieldset class="fieldset-container-three">
                <legend class="ui-hide">Explain:</legend>
                <div class="row">
@Html.LabelFor(m => m.InformedChoice.WitnessSignature.OtherStatus, "Explain:", new { @class="submit-required" })
                    @Html.TextAreaFor(m => m.InformedChoice.WitnessSignature.OtherStatus, new { @class = "comments-textarea" })
                </div>
            </fieldset>
        </div>
        <div class="row" id="">
            <label for="witnessSignatureDate" class="complete-required">Witness Signature Date:</label>
            <input type="text" id="witnessSignatureDate" class="date" value="01/20/2015"/>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Case Manager Signature:</legend>
        <div class="header-info"><span class="icon-info-sign"></span>I have informed the Person and/or the '.$_COOKIE["CommonLabel_Clients_Ownership"].' legal representative of the available long-term care options.</div>
        <div class="row">
            <span for="personsSignature" class="label">Person Completing Form:</span>
            <span class="data-element">Ben Howard</span>
        </div>
        <div class="row">
            <label for="personsSignature" class="complete-required">Case Manager Signature:</label>
            <input type="text" id="personsSignature" value="Signed, paper copy on file."/>
        </div>
        <div class="row" style="display: none" id="AdditionalPersonSignatureInformation">
            <fieldset class="fieldset-container-three">
                <legend class="ui-hide">Explain Other:</legend>
                <div class="row">
@Html.LabelFor(m => m.InformedChoice.PersonSignature.OtherStatus, "Explain:", new { @class="submit-required" })
                    @Html.TextAreaFor(m => m.InformedChoice.PersonSignature.OtherStatus, new { @class = "comments-textarea" })
                </div>
            </fieldset>
        </div>
        <div class="row"  id="RepresentativeInformation">
            <label for="personSignatureDate" class="complete-required">Case Manager Signature Date:</label>
            <input type="text" id="personSignatureDate" class="date" value="01/20/2015"/>
        </div>
        <div class="row" style="display: none" id="AdditionalRepresentativeInformation">
            <fieldset class="fieldset-container-three">
                <legend class="ui-hide">Other Representative:</legend>
@Html.EditorFor(m => m.InformedChoice.OtherRepresentative, "PersonNameFirstAndLastOnly")
            </fieldset>
        </div>
        <div class="row" style="display: none" id="PersonRepresentativeSignatureDate">
@Html.LabelFor(m => m.InformedChoice.PersonSignature.StatusDate, "Signature Date:", new { @class="submit-required" })
            @Html.EditorFor(m => m.InformedChoice.PersonSignature.StatusDate, new { type = "date-only", maxDate = "today" })
        </div>
        <div class="row">
            <label for="witnessSignature" class="complete-required">Credentials:</label>
            <input type="text" id="witnessSignature" value="Sample Credentials"/>
        </div>
        <div class="row" style="display: none" id="WitnessSignatureInformation">
            <fieldset class="fieldset-container-three">
                <legend class="ui-hide">Explain:</legend>
                <div class="row">
@Html.LabelFor(m => m.InformedChoice.WitnessSignature.OtherStatus, "Explain:", new { @class="submit-required" })
                    @Html.TextAreaFor(m => m.InformedChoice.WitnessSignature.OtherStatus, new { @class = "comments-textarea" })
                </div>
            </fieldset>
        </div>
    </fieldset>
    </div>
</div>

';?>

<?php $Script='
    <script type="text/javascript">
        $(document).ready(function(){

        });

});
    </script>
'?>