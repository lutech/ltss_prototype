<?php $WorkspaceHeader = '
<h3>PSS <span>Status: Pending Review</span></h3>

<div class="read-edit-toggle">
    <span>Manage</span>
</div>

<div class="workspace-header-bar">
    <div class="float-left">
    </div>
    <div class="float-right">
    </div>
</div>
';?>
<?php

$providerESignature ="";
$pssSuccessMessage ="false";
$signatureTypeSaved ="";
$signatureType ="";
$providerSignatureDate ="";
if (isset($_COOKIE['providerESignature'])){
    $providerESignature = $_COOKIE['providerESignature'];
}
if (isset($_COOKIE['pssSuccessMessage'])){
    $pssSuccessMessage = $_COOKIE['pssSuccessMessage'];
}
if (isset($_COOKIE['signatureTypeSaved'])){
    $signatureTypeSaved = $_COOKIE['signatureTypeSaved'];
}
if (isset($_COOKIE['signatureType'])){
    $signatureType = $_COOKIE['signatureType'];
}
if (isset($_COOKIE['providerSignatureDate'])){
    $providerSignatureDate = $_COOKIE['providerSignatureDate'];
}

$Body = '
<div id="signaturesDiv" class="genericform-style">
    <h4>Signatures</h4>
    <div id="editSelectedItem" class="tableRowEditSelected tableRowHighlight" style="display: none;"><span class="icon-pencil"></span><b> Signing Selected Item...</b></div>
        <div class="header-info">
            <span class="icon-info-sign" title="Note"></span>Note: Please select an item from the table to sign, edit or retract signature.
        </div>
        <div id="signatureToEdit" style="display: none;">

            <fieldset class="fieldset-container-one" role="presentation">
                <legend class="legend-header-one" role="presentation" >Sign Signature</legend>

                <input id="Id" name="Id" type="hidden" value="idddplanofservices/1582daf0-ac9b-4e15-8c5d-f9160667a2a5">
                <input id="ClientId" name="ClientId" type="hidden" value="clients/85c24ab0-0c2e-44ed-a7f9-76122ecb0d0e">
                <input data-bind="value: SignatureId" id="SignatureToSign_Id" name="SignatureToSign.Id" type="hidden" value="providerprofiles/c396aa55-e436-4748-bccf-d8c29fac8134">
                <input id="Etag" name="Etag" type="hidden" value="">

                <div class="row">
                    <span class="label">Type:</span>
                    <span data-bind="text: TypeDescription">Provider</span>
                </div>

                <div class="row">
                    <span class="label">Name:</span>
                    <span data-bind="text: Name">STATE OF MS/BOSWELL REGIONAL CENTER</span>
                </div>

                <div class="row" data-bind="visible: HasServices()">
                    <span class="label">Services:</span>
                    <span data-bind="text: ServicesFormatted">Hot Stone Massage</span>
                </div>

                <div class="row">
                    <label class="complete-required" for="SignatureToSign_Signature_SignedName">Signature Type:<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide complete-required-title">This field is required to save.</span></label>
                    <select name="" class="required" required="required" id="signatureType">
                        <option value="0"></option>
                        <option value="1">e-Signature</option>
                        <option value="2">Signed, Paper Copy on File</option>
                        <option value="3">Manual Entry</option>
                    </select>
                    <button id="signBtn" style="display: none">Sign</button>
                    <div id="providerSignatureInfo" class="signature">
                        <div id="providerESignature" class="data-element"></div>
                        <div class="signatureLine">
                        </div>
                    </div>
                </div>
                <div class="row" id="manualEntry" style="display: none">
                    <label class="complete-required" for="SignatureToSign_Signature_SignedName">Signature Name:<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide complete-required-title">This field is required to save.</span></label>
                    <input class="required" data-bind="value: SignedName" id="SignatureToSign_Signature_SignedName" name="SignatureToSign.Signature.SignedName" type="text" value="">
                    <span class="field-validation-valid" data-valmsg-for="SignatureToSign.Signature.SignedName" data-valmsg-replace="true"></span>
                </div>
                <div class="row">
                    <label class="complete-required" for="SignatureToSign_Signature_SignedDate">Signature Date:<span class="complete-required-indicator" title="This field is required to save." aria-hidden="true" role="presentation">*</span><span class="ui-hide complete-required-title">This field is required to save.</span></label>
                    <input class="date dateUS noFutureDate required" id="SignatureToSign_Signature_SignedDate" name="SignatureToSign.Signature.SignedDate" type="text" value="" >
                    <span class="field-validation-valid" data-valmsg-for="SignatureToSign.Signature.SignedDate" data-valmsg-replace="true"></span>
                </div>

            </fieldset>
        </div>
<form action="/MS-LTSSHotFix-RC-QC/Ltss.Web/IdddPlanOfService/Signatures/EditSignature/" id="editSignatureForm" method="post" novalidate="novalidate">        <div data-bind="with: signatureToEdit"></div>
</form>    <form action="/MS-LTSSHotFix-RC-QC/Ltss.Web/IdddPlanOfService/Signatures/RetractSignature/" id="retractSignatureForm" method="post" novalidate="novalidate">        <div data-bind="with: signatureToRetract"></div>
</form>    <div class="add-to-table">
        <div class="center">
            <span class="addTo-button">
                <a href="#" id="saveSignatureBtn" style="display: none;">Save</a>
                <a href="#" id="RetractSignatureBtn" data-bind="visible: $root.signatureToRetract()" title="Retract" style="display: none;">Retract</a>
            </span>
            <span class="CancelEdit-link">
                <a href="#" id="cancelSignatureBtn" title="Cancel and Undo Changes" style="display: none;">Cancel</a>
            </span>
        </div>
        <table class="generalTable" noinit="true" summary="Current Signatures">
        <caption class="caption-header">
            <span>Current Signatures</span>
        </caption>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Services</th>
                    <th>Signature Type</th>
                    <th>Signature Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody data-bind="foreach: signatures">
            <style>
                .icon-ok-sign {
                    color: #03A103;
                }
            </style>
                <tr data-bind="css: { tableRowHighlight: $root.actualSelectedSignature() == $data }" class="">
                    <td data-bind="text: TypeDescription">Person</td>
                    <td data-bind="text: Name">Cicio Smith </td>
                    <td data-bind="text: ServicesFormatted"></td>
                    <td data-bind="text: SignedName">
                            <div id="personsESignature" class="data-element"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMzAwIiBoZWlnaHQ9Ijg0Ij48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDU2IDE0IGMgLTAuMDIgMC4wNyAtMS4xNCA0LjEgLTEgNCBjIDAuMjkgLTAuMjIgNC4wNyAtNC43NyA1IC03IGMgMC41NCAtMS4zIDAuNDQgLTMuNjggMCAtNSBjIC0wLjQ0IC0xLjMyIC0xLjgzIC0zLjQxIC0zIC00IGMgLTEuNjYgLTAuODMgLTUuMjMgLTEuNjMgLTcgLTEgYyAtMy4wNiAxLjA4IC02LjkyIDQuMzQgLTEwIDcgYyAtNi42MSA1LjcgLTEyLjk1IDExLjcyIC0xOSAxOCBjIC0yLjYzIDIuNzQgLTUuMTkgNS43NSAtNyA5IGMgLTQuNDEgNy45IC05LjMgMTYuODkgLTEyIDI1IGMgLTEuMzcgNC4xIC0xLjQgOS44NSAtMSAxNCBjIDAuMjEgMi4yNSAxLjY3IDUuNTEgMyA3IGMgMC45NCAxLjA2IDMuMzUgMS44MSA1IDIgYyAzLjY3IDAuNDMgOC43OSAxLjI0IDEyIDAgYyA2LjAyIC0yLjMzIDEzLjEzIC03LjY1IDE5IC0xMiBsIDggLTgiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDU0IDcwIGMgMC4xMiAtMC4xMSA1LjExIC0zLjc0IDcgLTYgYyAyLjk1IC0zLjU0IDcuODUgLTExLjggOCAtMTIgYyAwLjEgLTAuMTMgLTMuOTQgNS4yOCAtNSA4IGMgLTEuMTQgMi45NCAtMi4xOSA3Ljc4IC0yIDEwIGMgMC4wNyAwLjc5IDIuMzMgMi4zIDMgMiBjIDEuOTggLTAuOSA1Ljc2IC00LjQ0IDggLTcgYyAyLjI4IC0yLjYxIDMuNzYgLTYuMzkgNiAtOSBjIDEuNjIgLTEuODkgNS4wMyAtNC44NiA2IC01IGMgMC41MSAtMC4wNyAxIDQgMSA0IGMgMCAwIC0wLjM5IC0zLjkxIC0xIC00IGMgLTEgLTAuMTQgLTQuMjUgMS44MyAtNiAzIGMgLTEuMTEgMC43NCAtMi41NyAxLjg3IC0zIDMgYyAtMS4wNCAyLjcxIC0yLjE5IDcuNTUgLTIgMTAgYyAwLjA4IDEuMDIgMS45MiAyLjQ2IDMgMyBjIDEuMyAwLjY1IDMuNiAxLjE2IDUgMSBjIDEuMjMgLTAuMTQgMi44NSAtMS4xNCA0IC0yIGMgMi43MyAtMi4wNSA1LjczIC00LjQyIDggLTcgYyAyLjYxIC0yLjk2IDYuODcgLTkuODMgNyAtMTAgYyAwLjA4IC0wLjEgLTIuOTcgMy45MyAtNCA2IGMgLTAuOTEgMS44MSAtMS4zOCAzLjkzIC0yIDYgYyAtMC40IDEuMzUgLTEuMTQgMi44OSAtMSA0IGMgMC4xNSAxLjIgMS4xMiAzLjUgMiA0IGMgMC45OCAwLjU2IDMuNjYgMC41MiA1IDAgYyAyLjUzIC0wLjk3IDUuNjUgLTMuMDQgOCAtNSBjIDMuNTMgLTIuOTQgOC41NCAtNy42MyAxMCAtMTAgYyAwLjM3IC0wLjYgLTEuNTMgLTMuMjMgLTIgLTMgYyAtMS4xOSAwLjYgLTQuNTIgNC41OSAtNiA3IGMgLTEuMDIgMS42NSAtMi4yNyA0LjUxIC0yIDYgYyAwLjI3IDEuNTEgMi41MiA0LjM4IDQgNSBjIDEuODUgMC43NyA1LjggMC43NyA4IDAgYyAzLjgyIC0xLjM0IDkuMzkgLTQuNTkgMTIgLTcgYyAwLjk2IC0wLjg4IDEuMjcgLTMuNjYgMSAtNSBjIC0wLjMxIC0xLjUzIC0xLjg2IC0zLjY3IC0zIC01IGMgLTAuNzEgLTAuODIgLTEuOTUgLTEuNDcgLTMgLTIgYyAtMS41NyAtMC43OSAtMy4zOCAtMS42OCAtNSAtMiBsIC01IDAiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDc5IDM3IGwgMSAxIi8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSAxNDAgODIgYyAwLjMxIC0wLjI2IDEyLjQzIC05LjYyIDE4IC0xNSBjIDQuMDUgLTMuOTEgNy42NiAtOC4zOSAxMSAtMTMgYyAzLjcgLTUuMSA2LjgyIC0xMC40NCAxMCAtMTYgYyAyLjI2IC0zLjk1IDQuOCAtOC4wNCA2IC0xMiBjIDAuOTkgLTMuMjYgMS4yNCAtOS45MyAxIC0xMSBjIC0wLjA4IC0wLjM1IC0yLjMzIDEuMTkgLTMgMiBjIC0wLjg0IDEgLTEuNzEgMi43IC0yIDQgYyAtMC4zMiAxLjQ2IC0wLjQ5IDMuNjIgMCA1IGMgMS4wMiAyLjg1IDMuNyA1Ljg3IDUgOSBjIDIgNC44MSAzLjU3IDkuODggNSAxNSBjIDAuOTIgMy4zIDEuNTkgNi42OCAyIDEwIGMgMC4yNCAxLjk1IDAuMzUgNC4yNCAwIDYgYyAtMC4yNiAxLjMxIC0xLjE2IDMgLTIgNCBjIC0wLjY3IDAuODEgLTEuOTYgMS43OSAtMyAyIGMgLTMuNDcgMC42OSAtOC4zIDEuMzQgLTEyIDEgYyAtMy4yMSAtMC4yOSAtNi45NyAtMS41NCAtMTAgLTMgYyAtNS4wOCAtMi40NCAtMTMuMzggLTcuNTEgLTE1IC05IGMgLTAuMzMgLTAuMzEgMS45NiAtMS43NCAzIC0yIGMgMi42MSAtMC42NSA2LjIxIC0xLjQzIDkgLTEgYyA5LjUgMS40NiAyMS40IDUuNzcgMzAgNyBjIDEuNSAwLjIxIDQuMDggLTAuODUgNSAtMiBjIDIuNTEgLTMuMTQgNi4xOSAtMTIuMDkgNyAtMTMgYyAwLjIzIC0wLjI1IDEgMi43NiAxIDQgYyAwIDEuNTMgLTAuNDUgMy40MSAtMSA1IGMgLTIuMSA2LjAzIC02Ljg3IDE3LjY5IC03IDE4IGMgLTAuMDMgMC4wNyAwLjM2IC0yLjg4IDEgLTQgYyAzLjE1IC01LjUxIDcuMTIgLTEyLjIxIDExIC0xNyBjIDEuMzggLTEuNzEgNS4wNiAtNC4xMyA2IC00IGMgMC42NiAwLjA5IDEuMzMgMy41OSAxIDUgYyAtMC44NSAzLjU5IC01LjI0IDEyLjE0IC01IDEyIGMgMC4zMyAtMC4yIDYuNjUgLTEwLjYyIDEwIC0xNSBjIDAuNjcgLTAuODggMi44MyAtMi4yNiAzIC0yIGMgMC4yNSAwLjM3IC0wLjQgMy40NiAtMSA1IGMgLTEuNjggNC4zMiAtNi4yMiAxMi44OSAtNiAxMyBsIDggLTEyIi8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSAyMjUgNTggYyAtMC4wNSAwLjA0IC0yLjQ4IDEuMTMgLTMgMiBjIC0xLjIzIDIuMDUgLTIuNCA1LjQyIC0zIDggYyAtMC4zNSAxLjUxIC0wLjU2IDQuMTYgMCA1IGMgMC40NiAwLjY5IDIuNzggMSA0IDEgYyAxLjIyIDAgMi45NCAtMC4zNiA0IC0xIGMgMi4wMSAtMS4yMSA0LjU2IC0zLjA4IDYgLTUgYyAyLjMyIC0zLjA5IDQuMyAtNy4zNSA2IC0xMSBjIDAuNTYgLTEuMiAxLjAyIC00LjA3IDEgLTQgYyAtMC4wOSAwLjMgLTQuMzMgMTIuMzMgLTUgMTcgYyAtMC4xNyAxLjE4IDEuMTYgMy42NCAyIDQgYyAwLjk2IDAuNDEgMy41NCAtMC40NSA1IC0xIGMgMS4wMyAtMC4zOSAyLjI3IC0xLjE3IDMgLTIgYyAxLjQ1IC0xLjY2IDMuMTMgLTMuODggNCAtNiBjIDIuMDIgLTQuOTQgMi45OCAtMTAuNjkgNSAtMTYgYyAzLjQxIC04Ljk1IDEwLjg0IC0yNS41MyAxMSAtMjYgYyAwLjA2IC0wLjE3IC0zLjcgNS44NSAtNSA5IGMgLTIuNjggNi40OCAtNC45NiAxMy4yMSAtNyAyMCBjIC0wLjk4IDMuMjcgLTEuNTkgNi42OCAtMiAxMCBjIC0wLjI0IDEuOTUgLTAuMzcgNC4zMyAwIDYgYyAwLjIyIDEgMS4yNCAyLjA5IDIgMyBjIDAuODkgMS4wNyAyLjExIDMgMyAzIGMgMS40MSAwIDUuMjYgLTEuNCA2IC0zIGMgNC4xNyAtOS4wNCAxMS4xIC0zMy43OCAxMiAtMzYgYyAwLjEgLTAuMjQgMS4yNiAyLjgzIDEgNCBjIC0xLjggNy45OCAtNS44OSAxOC4zIC04IDI3IGMgLTAuNDUgMS44NSAtMC41IDUuNjMgMCA2IGMgMC40MSAwLjMxIDIuOTYgLTEuODMgNCAtMyBjIDEuNSAtMS42OCAyLjQ2IC00LjMgNCAtNiBjIDEuNjcgLTEuODQgNS4yNCAtNSA2IC01IGMgMC40OSAwIC0wLjQ2IDMuNzcgMCA1IGMgMC4zOSAxLjA0IDEuOTIgMi40NiAzIDMgYyAxLjMgMC42NSAzLjM4IDEgNSAxIGwgMTAgLTEiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDI1MCA0OCBsIDE2IDAiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDI0MyAzNyBsIDMgLTIiLz48L3N2Zz4="></div>
</td>
                    <td data-bind="text: SignedDate">02/18/2015</td>
                    <td style="min-width:80px">
                        <span data-bind="visible: !$root.actualSelectedSignature()">
                           <!-- <a href="#" data-bind="click: $root.selectSignatureToEdit, text: EditOrSignLabelName">Edit</a>
                            <a href="#" data-bind="visible: IsSigned(), click: $root.selectSignatureToRetract">Retract</a>-->
                        </span>
                        <span data-bind="visible: $root.actualSelectedSignature() == $data" style="display: none;">
                            <span class="icon-pencil"></span><b data-bind="text: \' \' + $root.EditSignOrRetractTextForForm() + \'ing...\'"> ing...</b>
                        </span>
                    </td>
                </tr>

                <tr data-bind="css: { tableRowHighlight: $root.actualSelectedSignature() == $data }">
                    <td data-bind="text: TypeDescription">Support Coordinator/Targeted Case Manager</td>
                    <td data-bind="text: Name">Leo Smith</td>
                    <td data-bind="text: ServicesFormatted"></td>
                    <td data-bind="text: SignedName">
                    <div id="casemanagerESignature" class="data-element"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMzc2IiBoZWlnaHQ9Ijc4Ij48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDEzIDcgYyAwLjA1IDAuMDUgMi44MyAxLjkgMyAzIGMgMC42NiA0LjE1IDAuNTEgMTAuNzggMCAxNiBjIC0wLjQ4IDQuOTkgLTEuNTYgMTAuMTIgLTMgMTUgYyAtMS45IDYuNDYgLTQuMzUgMTIuODEgLTcgMTkgYyAtMS4zNSAzLjE1IC01Ljg5IDguODMgLTUgOSBjIDEuODggMC4zNSAxNC4yMSAtNC40MyAyMSAtNiBjIDEuNTUgLTAuMzYgMy4zMiAtMC4xMiA1IDAgYyAzLjA1IDAuMjIgNi4wMyAwLjM0IDkgMSBjIDE4LjIyIDQuMDUgMzYuMjcgMTAuOTEgNTQgMTMgYyAxNS4zMiAxLjggNDggLTEgNDggLTEiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDc5IDU5IGMgMC4xNiAtMC4wNSA2LjE5IC0xLjgzIDkgLTMgYyAxLjA3IC0wLjQ0IDIuMzMgLTEuMTkgMyAtMiBjIDAuODQgLTEgMi40NCAtMy43OCAyIC00IGMgLTAuNzkgLTAuMzkgLTUuODggMC4wOSAtOCAxIGMgLTIuMDYgMC44OCAtNC42MSAzLjE0IC02IDUgYyAtMS4zNiAxLjgxIC0zIDUuMzQgLTMgNyBjIDAgMC45MiAxLjg5IDIuNjYgMyAzIGMgMi42MyAwLjgxIDcuMDMgMS42MyAxMCAxIGMgNy4xOCAtMS41MiAxNi42OSAtNC45NiAyMyAtOCBjIDEuNjYgLTAuOCA0IC00LjE5IDQgLTUgYyAwIC0wLjUyIC0zLjQgLTEuNTIgLTQgLTEgYyAtMS4xMSAwLjk2IC0yLjgzIDUuMDggLTMgNyBjIC0wLjEgMS4xMyAxLjEyIDMuMTIgMiA0IGMgMC44OCAwLjg4IDIuNzcgMS44NiA0IDIgYyAxLjQgMC4xNiAzLjUyIC0wLjQxIDUgLTEgYyAxLjY5IC0wLjY4IDQuNTYgLTEuNzkgNSAtMyBjIDAuNjEgLTEuNjggMC4zIC02LjcgLTEgLTggYyAtMS44OCAtMS44OCAtNy40NyAtMy4xMiAtMTEgLTQgbCAtNSAwIi8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSAyNDQgMyBjIC0wLjA1IC0wLjA0IC0yIC0xLjc1IC0zIC0yIGMgLTEuMzggLTAuMzQgLTMuNCAtMC4yOSAtNSAwIGMgLTUuNTcgMS4wMSAtMTEuNjUgMi4wMyAtMTcgNCBjIC03LjEyIDIuNjIgLTE0LjE1IDYuMzQgLTIxIDEwIGMgLTMuMTkgMS43IC02LjIxIDMuODEgLTkgNiBjIC0xLjgyIDEuNDMgLTQuNzEgMy42OCAtNSA1IGMgLTAuMjEgMC45MyAxLjcgMy40OSAzIDQgYyA4LjE0IDMuMiAyMC42MSA1LjIxIDMwIDkgYyA1LjkxIDIuMzkgMTQuODMgNi4yMyAxNyAxMCBjIDEuNzggMy4wOCAtMC4xNyAxMi42NyAtMiAxNiBjIC0xLjEyIDIuMDMgLTUuOTYgMy4zMyAtOSA0IGMgLTUuNTggMS4yNCAtMTEuOTggMS44NSAtMTggMiBjIC02Ljk5IDAuMTggLTEzLjg2IC0wLjM1IC0yMSAtMSBjIC03Ljg3IC0wLjcyIC0yMyAtMyAtMjMgLTMiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNIDI0MyA2NiBjIDAuMDcgLTAuMTYgMi40NyAtNi4xMiA0IC05IGMgMS4xMiAtMi4xMSAzLjM2IC02LjQgNCAtNiBjIDEuMDQgMC42NSAyLjQyIDcuODUgNCAxMSBjIDAuNTcgMS4xNCAyLjA0IDIuNzMgMyAzIGMgMC45MyAwLjI3IDMuMjkgLTAuMTcgNCAtMSBjIDIuNjIgLTMuMDYgNy4wNSAtMTIuMTUgOCAtMTMgYyAwLjMyIC0wLjI4IDAuNDQgMy40NCAxIDUgYyAxLjA4IDMuMDIgMi40OCA2LjYxIDQgOSBjIDAuNTYgMC44NyAyLjMgMi4xMiAzIDIgYyAwLjgyIC0wLjE0IDIuMjIgLTEuODcgMyAtMyBjIDIuMTQgLTMuMDkgNS43NSAtOS43MSA2IC0xMCBjIDAuMDkgLTAuMSAtMS4xNCAyLjg5IC0xIDQgYyAwLjE1IDEuMiAxLjA0IDMuMjUgMiA0IGMgMS42MyAxLjI3IDQuOTIgMi42MiA3IDMgYyAxLjEzIDAuMiAzLjA5IC0wLjI5IDQgLTEgYyAxLjcyIC0xLjM0IDQuMyAtMy43OCA1IC02IGMgMy4yMyAtMTAuMTkgNy44NSAtMzQuMzkgOCAtMzUgYyAwLjA2IC0wLjI0IC0yLjU2IDkuMzUgLTMgMTQgYyAtMC41NSA1Ljg1IC0wLjgyIDEyLjY5IDAgMTggYyAwLjQxIDIuNjQgMi40OSA1LjYzIDQgOCBjIDAuNzIgMS4xMiAyLjE4IDIuODYgMyAzIGMgMC43IDAuMTIgMi4zMyAtMS4xOSAzIC0yIGMgMC44NCAtMSAxLjU3IC0yLjYxIDIgLTQgYyAxLjIgLTMuODQgMS44IC04LjE2IDMgLTEyIGMgMC40MyAtMS4zOSAxLjkzIC00LjIyIDIgLTQgYyAwLjE2IDAuNDkgLTAuNzkgNy4zMSAwIDEwIGMgMC42OCAyLjMyIDMuMiA1LjIgNSA3IGMgMC45NCAwLjk0IDIuNzcgMS44NiA0IDIgYyAxLjQgMC4xNiAzLjYyIC0wLjMxIDUgLTEgYyAyLjMzIC0xLjE3IDQuOTUgLTQuNTMgNyAtNSBjIDEuNTEgLTAuMzUgNC4zNSAxLjA4IDYgMiBjIDEuMTEgMC42MSAxLjg5IDIuMzkgMyAzIGMgMS42NSAwLjkyIDMuOTggMS42OCA2IDIgbCAxMyAxIi8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSAyOTkgNDIgYyAwLjA3IDAuMDIgMi43IDEgNCAxIGMgNS4zOCAwIDExLjU2IC0wLjA0IDE3IC0xIGMgNS42NyAtMSAxNyAtNSAxNyAtNSIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik0gMjg5IDQxIGwgMSAxIi8+PC9zdmc+"></div>
                    <td data-bind="text: SignedDate">02/18/2015</td>
                    <td style="min-width:80px">
                        <span data-bind="visible: !$root.actualSelectedSignature()">
                            <!--<a href="#" data-bind="click: $root.selectSignatureToEdit, text: EditOrSignLabelName">Edit</a>
                            <a href="#" data-bind="visible: IsSigned(), click: $root.selectSignatureToRetract">Retract</a>-->
                        </span>
                        <span data-bind="visible: $root.actualSelectedSignature() == $data" style="display: none;">
                            <span class="icon-pencil"></span><b data-bind="text: \' \' + $root.EditSignOrRetractTextForForm() + \'ing...\'"> ing...</b>
                        </span>
                    </td>
                </tr>

                <tr data-bind="css: { tableRowHighlight: $root.actualSelectedSignature() == $data }">
                    <td data-bind="text: TypeDescription">Guardian/Legal Representative</td>
                    <td data-bind="text: Name">Jane Smith</td>
                    <td data-bind="text: ServicesFormatted"></td>
                    <td data-bind="text: SignedName">
                         <div id="repESignature" class="data-element"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMzc5IiBoZWlnaHQ9IjEyMCI+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSA0MyA3NCBjIC0wLjA5IDAuMDIgLTMuNDQgMSAtNSAxIGMgLTEuNTYgMCAtMy43IC0wLjM1IC01IC0xIGMgLTEuMDggLTAuNTQgLTIuMDYgLTEuOTIgLTMgLTMgYyAtMS40MiAtMS42MyAtMy4xMyAtMy4xOCAtNCAtNSBjIC0yLjMxIC00Ljg2IC00Ljc1IC0xMC42IC02IC0xNiBjIC0xLjY5IC03LjMzIC0zLjM1IC0xNS45MyAtMyAtMjMgYyAwLjI4IC01LjcgMS45NiAtMTUuNDkgNSAtMTggYyAyLjk0IC0yLjQzIDEzLjA3IC0xLjkxIDE4IC0xIGMgMi45NiAwLjU1IDYuMjMgMy43OCA5IDYgYyAyLjE3IDEuNzQgNC41NyAzLjc5IDYgNiBjIDIuMDQgMy4xNSAzLjcxIDcuMzQgNSAxMSBjIDAuNjUgMS44NCAxLjA3IDQuMDUgMSA2IGMgLTAuMjUgNi43NyAwLjA2IDE0LjcyIC0yIDIxIGMgLTQuMjggMTMuMDcgLTEwLjY2IDI4LjcxIC0xOCA0MCBjIC00Ljg1IDcuNDYgLTE0LjM3IDE1LjUxIC0yMSAyMCBjIC0yLjMgMS41NiAtNi43OCAxIC0xMCAxIGMgLTEuOTUgMCAtNC4yNSAtMC40MiAtNiAtMSBjIC0xLjA0IC0wLjM1IC0yLjY2IC0xLjIgLTMgLTIgYyAtMC40NyAtMS4xMSAtMC40NiAtMy42MSAwIC01IGMgMC43NCAtMi4yMyAyLjQ0IC00Ljg3IDQgLTcgYyAyLjA2IC0yLjgxIDQuMzYgLTUuOCA3IC04IGMgNS4xNyAtNC4zMSAxMS4wMSAtOC4wNSAxNyAtMTIgYyAxMS4yNSAtNy40MyAyMS45OCAtMTQuMzMgMzMgLTIxIGwgNSAtMiIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik0gODAgNTkgYyAtMC4wNSAtMC4wNCAtMi4yNiAtMi4yMiAtMyAtMiBjIC0xLjc3IDAuNTMgLTUuMDkgMy4wOSAtNyA1IGMgLTEuOTEgMS45MSAtNC40OCA1LjEgLTUgNyBjIC0wLjI3IDAuOTkgMS4zMSA0LjE3IDIgNCBjIDEuODggLTAuNDcgNy4xOSAtNC4zNSAxMCAtNyBjIDIuNjMgLTIuNDcgNi4wMiAtOC4zOSA3IC05IGMgMC4zNSAtMC4yMiAwLjkxIDIuNjcgMSA0IGMgMC4yMyAzLjIyIC0wLjA0IDkuNzMgMCAxMCBjIDAuMDIgMC4xMSAwLjM5IC0yLjg4IDEgLTQgYyAxLjI3IC0yLjMzIDMuMTIgLTQuOTYgNSAtNyBjIDIuMDIgLTIuMTkgNi4zNSAtNi40MyA3IC02IGMgMC43MSAwLjQ3IC0xIDYuODIgLTEgMTAgYyAwIDEuNjIgMC4yNyA0LjEyIDEgNSBjIDAuNTkgMC43MSAzLjIxIDEuNTggNCAxIGMgNC43NyAtMy40NyAxMy45MyAtMTIuMDMgMTggLTE3IGMgMC44MiAtMSAwLjUzIC00Ljc5IDAgLTUgYyAtMC42MiAtMC4yNSAtNC4xNSAxLjYzIC01IDMgYyAtMi4wNCAzLjI2IC00LjM5IDkuMzQgLTUgMTMgYyAtMC4yNCAxLjQyIDEuMTMgMy42MSAyIDUgYyAwLjY5IDEuMSAxLjg5IDIuNjMgMyAzIGMgMi4zNiAwLjc5IDYuMjUgMS40NCA5IDEgYyA2LjkzIC0xLjEyIDIyIC02IDIyIC02Ii8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSAxNjggNzAgYyAwLjQ2IC0wLjMxIDE3LjM1IC0xMS40NiAyNiAtMTggYyAxNi43NCAtMTIuNjcgMzIuNDggLTI0LjgxIDQ4IC0zOCBjIDQuNDggLTMuODEgMTEuMzcgLTEyLjA1IDEyIC0xMyBjIDAuMTUgLTAuMjIgLTIuOCAwLjQ1IC00IDEgYyAtMi4zNCAxLjA3IC00Ljg3IDIuNDEgLTcgNCBjIC00LjQ5IDMuMzcgLTkuMDMgNy4zIC0xMyAxMSBjIC0wLjg0IDAuNzggLTEuNzIgMS45NCAtMiAzIGMgLTAuOTUgMy41NiAtMi4xOSA4LjYgLTIgMTIgYyAwLjEgMS44OCAxLjgyIDQuMTUgMyA2IGMgMS4xMiAxLjc2IDIuNDUgMy42NiA0IDUgYyAzLjI5IDIuODUgNy43MyA1LjIgMTEgOCBjIDEuMiAxLjAzIDIuMzkgMi42MyAzIDQgYyAwLjYyIDEuNCAxLjQ5IDMuODMgMSA1IGMgLTAuODggMi4xMiAtMy44IDUuOTYgLTYgNyBjIC0yLjY0IDEuMjQgLTcuNDQgMS4yMyAtMTEgMSBjIC02LjUzIC0wLjQyIC0xMy4yNiAtMS42OSAtMjAgLTMgYyAtNS40OSAtMS4wNyAtMTAuNzMgLTIuMjQgLTE2IC00IGMgLTkuOTEgLTMuMyAtMjguODggLTkuMTQgLTI5IC0xMSBjIC0wLjExIC0xLjcxIDE4LjY0IC00LjEzIDI4IC01IGMgOC41NSAtMC43OSAxNy4yOSAwLjQyIDI2IDAgbCAxNSAtMiIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik0gMjU5IDUwIGMgMC4wOSAtMC4wMyAzLjcgLTIgNSAtMiBjIDAuODcgMCAzLjEgMS4yNiAzIDIgYyAtMC41OSA0LjMgLTUuOTIgMTkuNjQgLTYgMjAgYyAtMC4wMyAwLjEzIDEuNTUgLTUuMTYgMyAtNyBjIDMuMjMgLTQuMSA3LjkzIC04LjIgMTIgLTEyIGMgMC44NiAtMC44MSAyLjk2IC0yLjMyIDMgLTIgYyAwLjExIDAuOTkgLTAuOTcgNy42OSAtMiAxMSBjIC0wLjU0IDEuNzIgLTMuMDYgNS4wOCAtMyA1IGMgMC4xNSAtMC4yMSA1LjA1IC04LjY1IDggLTEyIGMgMS43NiAtMiA2LjA5IC01IDcgLTUgYyAwLjUzIDAgMC40MiAzLjU0IDAgNSBjIC0wLjgyIDIuODcgLTMuMTggNi4xMyAtNCA5IGMgLTAuNDIgMS40NiAtMC4zNCAzLjYyIDAgNSBjIDAuMjUgMSAxLjM4IDIuODggMiAzIGMgMC42MiAwLjEyIDIuMjIgLTEuMjIgMyAtMiBjIDAuNzggLTAuNzggMS4yMiAtMi4yMiAyIC0zIGMgMC43OCAtMC43OCAyLjI3IC0xLjE3IDMgLTIgYyAxLjQ1IC0xLjY2IDMuMDkgLTMuOTkgNCAtNiBjIDAuNjUgLTEuNDIgMS4xIC00LjggMSAtNSBjIC0wLjA3IC0wLjE0IC0xLjYyIDEuOTQgLTIgMyBjIC0wLjg4IDIuNDIgLTIuMTUgNS43MiAtMiA4IGMgMC4xNCAyLjExIDEuODkgNi4wNCAzIDcgYyAwLjYgMC41MiAzLjA5IC0wLjI5IDQgLTEgYyAxLjcyIC0xLjM0IDMuNjEgLTMuODUgNSAtNiBjIDIuMjMgLTMuNDUgNC42OSAtNy4xOSA2IC0xMSBjIDIuNTggLTcuNTMgNiAtMjQuNDMgNiAtMjQgYyAwIDAuNDcgLTQuODggMTcuNjggLTYgMjYgYyAtMC40NyAzLjQ0IDAuMTkgOC4zNSAxIDExIGMgMC4yNyAwLjg2IDIuMSAyIDMgMiBjIDEuNTcgMCA0LjUxIC0xLjAxIDYgLTIgYyAxLjE4IC0wLjc4IDIuMjcgLTIuNTQgMyAtNCBjIDUuODMgLTExLjY2IDE2LjQ2IC0zNS4wNiAxNyAtMzYgYyAwLjE0IC0wLjI0IC0xLjAxIDYuNzIgLTIgMTAgYyAtMy4wNSAxMC4xOCAtMTAuNCAyOC4yOCAtMTAgMzAgYyAwLjI0IDEuMDQgMTEuNjMgLTEyLjQ0IDE0IC0xMyBjIDEuMTggLTAuMjggMS44MyA2LjE5IDMgOSBjIDAuNDQgMS4wNyAxLjIgMi4yIDIgMyBjIDEuMSAxLjEgMi41OSAyLjQxIDQgMyBjIDIuMzMgMC45NyA1LjM2IDEuNjUgOCAyIGMgMi4yNCAwLjMgNC42OSAwLjE4IDcgMCBjIDIuMDEgLTAuMTUgNC41OSAtMC4zIDYgLTEgbCAyIC0zIi8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTSAzMTAgNDYgYyAwLjMgLTAuMDUgMTEuNDkgLTEuNzUgMTcgLTMgYyAxLjcyIC0wLjM5IDUgLTIgNSAtMiIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik0gMzAyIDM4IGwgMSAxIi8+PC9zdmc+"></div>
                    </td>
                    <td data-bind="text: SignedDate">02/18/2015</td>
                    <td style="min-width:80px">
                        <span data-bind="visible: !$root.actualSelectedSignature()">
                           <!-- <a href="#" data-bind="click: $root.selectSignatureToEdit, text: EditOrSignLabelName">Edit</a>
                            <a href="#" data-bind="visible: IsSigned(), click: $root.selectSignatureToRetract">Retract</a>-->
                        </span>
                        <span data-bind="visible: $root.actualSelectedSignature() == $data" style="display: none;">
                            <span class="icon-pencil"></span><b data-bind="text: \' \' + $root.EditSignOrRetractTextForForm() + \'ing...\'"> ing...</b>
                        </span>
                    </td>
                </tr>

                <tr data-bind="css: { tableRowHighlight: $root.actualSelectedSignature() == $data }" class="">
                    <td data-bind="text: TypeDescription">Provider</td>
                    <td data-bind="text: Name">Bronsone Industries</td>
                    <td data-bind="text: ServicesFormatted">Hot Stone Massage</td>
                    <td data-bind="text: SignedName">Signed, Paper Copy on File</td>
                    <td data-bind="text: SignedDate">02/17/2015</td>
                    <td style="min-width:80px">
                        <span data-bind="visible: !$root.actualSelectedSignature()">
                            <!--<a href="#" data-bind="click: $root.selectSignatureToEdit, text: EditOrSignLabelName">Edit</a>
                            <a href="#" data-bind="visible: IsSigned(), click: $root.selectSignatureToRetract">Retract</a>-->
                        </span>
                        <span data-bind="visible: $root.actualSelectedSignature() == $data" style="display: none;">
                            <span class="icon-pencil"></span><b data-bind="text: \' \' + $root.EditSignOrRetractTextForForm() + \'ing...\'"> ing...</b>
                        </span>
                    </td>
                </tr>

                <tr id="providerTableRow">
                    <td data-bind="text: TypeDescription">Provider</td>
                    <td data-bind="text: Name">STATE OF MS/BOSWELL REGIONAL CENTER</td>
                    <td data-bind="text: ServicesFormatted">Hot Stone Massage</td>
                    <td data-bind="text: SignedName" id="providerSignatureTypeCell">
                        <span id="providerESignatureTable" class="data-element" style="display: none"></div>
                    </td>
                    <td id="SignedDate"></td>
                    <td style="min-width:80px">
                        <span id="actionsCell">
                            <a href="#" id="providerSignBtn" data-bind="click: $root.selectSignatureToEdit, text: EditOrSignLabelName">Sign</a>
                            <a href="#" id="providerRetractBtn" style="display: none;">Retract</a>
                        </span>
                        <span id="iconPencil" style="display: none;">
                            <span class="icon-pencil"></span><b>Editing...</b>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="signatureViewWindow" style="display: none;">
        <div data-bind="template: { name: \'SignatureViewTemplate\', data: signatureToView }">
    <fieldset class="fieldset-container-one" role="presentation">
        <legend class="legend-header-one" role="presentation">Signature Information</legend>

        <div class="row">
            <span class="label">Type:</span>
            <span data-bind="text: TypeDescription"></span>
        </div>

        <div class="row">
            <span class="label">Name:</span>
            <span data-bind="text: Name"></span>
        </div>

        <div class="row" data-bind="visible: HasServices()" style="display: none;">
            <span class="label">Services:</span>
            <ul data-bind="foreach: Services"></ul>
        </div>

        <div class="row">
            <span class="label">Signature Name:</span>
            <span data-bind="text: SignedName"></span>
        </div>

        <div class="row">
            <span class="label">Signature Date:</span>
            <span data-bind="text: SignedDate"></span>
        </div>
    </fieldset>
</div>
    </div>


</div>
<script type="text/javascript">


</script>
';

require "application/views/shared/_signatureDialog.php";
?>
<?php $Script='
    <script type="text/javascript">

        function initSignaturePopup(){
            $("#signatureDialog").dialog({
                modal: true,
                height: 400,
                width: 800,
                resizable: false,
                draggable : false,
                fluid: true,
                buttons: {

                    "Cancel": function() {
                        $("#signaturePanel").jSignature("reset");
                        localStorage.setItem("providerESignature","");
                        $(this).dialog("close");
                    },
                    "Clear Signature" : function() {
                        $("#signaturePanel").jSignature("reset");
                    },
                    "Continue": function(){
                            var datapair = $("#signaturePanel").jSignature("getData", "svgbase64");
                            var signatureData = JSON.stringify(datapair);
                            var i = new Image();
                            var newDate = new Date(),
                                date =  (newDate.getMonth() + 1).padLeft() + "/" + newDate.getDate().padLeft() + "/" + newDate.getFullYear();
                            i.src = "data:" + datapair[0] + "," + datapair[1];
                            localStorage.setItem("providerESignature", signatureData);
                            document.cookie="providerSignatureDate="+ date +"";
                            $("#signaturePanel").jSignature("reset");
                            $("#signatureType, #signBtn").hide();
                            $(i).prependTo($("#providerESignature")); // append the image (SVG) to DOM.
                            $("#providerSignatureInfo").css("display", "inline-block");
                            $("#SignatureToSign_Signature_SignedDate").val(date).removeClass("required")
                            var datepicker = $("#SignatureToSign_Signature_SignedDate").data("kendoDatePicker");
                            datepicker.readonly();
                            $(this).dialog("close");
                        }
                },
                open: function(){
                    $(".ui-dialog-title").html("Plan of Services and Supports - Signature (1 of 1)");
                    $("#signatureHeader").html("Provider Signature:")
                    $(window).resize();
                }
            });
        }

        $(document).ready(function(){

            $("#signaturePanel").jSignature();

            $("#signBtn").on("click", function() {
                initSignaturePopup();
            });

            $("#signatureType").on("change", function(){
                $("#signBtn").hide();
                $("#manualEntry").hide();
                if ($(this).val() == "1") {
                    $("#signBtn").show();
                } else if ($(this).val() == "3") {
                    $("#manualEntry").show();
                }
            });

            $("#saveSignatureBtn").on("click", function(){
                var signatureTypeValue = $("#signatureType").val();
                document.cookie="signatureTypeSaved=true";
                document.cookie="pssSuccessMessage=true";
                document.cookie="signatureType="+signatureTypeValue+"";
                location.reload();
            });
             $("#providerRetractBtn").on("click", function(){
                document.cookie="signatureTypeSaved=false";
                location.reload();
            });
            $("#cancelSignatureBtn").on("click", function(){
                localStorage.setItem("providerESignature", "");
                document.cookie="signatureTypeSaved=false";
                document.cookie="providerESignature=";
                document.cookie="providerSignatureDate=";
                $("#signatureType").val("0");
                location.reload();
            });
            if ("'.$signatureTypeSaved.'" == "true"){
                $("#providerSignBtn").hide();
                $("#providerRetractBtn").show();

                if ("'.$signatureType.'" == "1") {
                    var providerESignature;
                    if (localStorage.getItem("providerESignature")) {
                        providerESignature = localStorage.getItem("providerESignature");
                    } else {
                        providerESignature = "";
                    }
                     if (providerESignature != ""){
                        var datapair = JSON.parse(providerESignature);
                        var i = new Image();
                        i.src = "data:" + datapair[0] + "," + datapair[1];
                        console.log(i);
                        $(i).prependTo();
                        $("#providerESignatureTable").html(i)
                        $("#SignedDate").html("'.$providerSignatureDate.'")
                        $("#providerESignatureTable").css("display", "inline-block");
                    }
                } else if ("'.$signatureType.'" == "2") {
                    $("#providerSignatureTypeCell").prepend("Signed, Paper Copy on File");
                } else if ("'.$signatureType.'" == "3") {
                    $("#providerSignatureTypeCell").prepend("Manual Entry");
                }

            } else if ("'.$signatureTypeSaved.'" == "false"){
                $("#providerSignBtn").show();
                $("#providerRetractBtn").hide();
            }

            $("#providerSignBtn").on("click", function(){
                $("#editSelectedItem, #signatureToEdit, #iconPencil, #saveSignatureBtn, #cancelSignatureBtn").show();
                $(".header-info, #actionsCell").hide();
                $("#providerTableRow").addClass("tableRowHighlight");
            });

            $("#cancelSignatureBtn").on("click", function(){
                $("#editSelectedItem, #signatureToEdit, #iconPencil, #saveSignatureBtn, #cancelSignatureBtn").hide();
                $(".header-info, #actionsCell").show();
                $("#providerTableRow").removeClass("tableRowHighlight");
            });

            $("#personsESignature").qtip({
                 content: {
                     text: $("#personESignaturePanel").children()
                 },
                 hide: {
                    fixed: true,
                    delay: 300
                },
                position : {
                    my : "bottom center",
                    at: "bottom left",
                    adjust: {
                        y: -15,
                        x: 4
                    }
                }
             });

             $("#caseManagerESignature").qtip({
                 content: {
                     text: $("#caseManagerESignaturePanel").children()
                 },
                 hide: {
                    fixed: true,
                    delay: 300
                },
                position : {
                    my : "bottom center",
                    at: "bottom left",
                    adjust: {
                        y: -15,
                        x: 4
                    }
                }
             });

             $("#representativeESignature").qtip({
                 content: {
                     text: $("#repESignaturePanel").children()
                 },
                 hide: {
                    fixed: true,
                    delay: 300
                },
                position : {
                    my : "bottom center",
                    at: "bottom left",
                    adjust: {
                        y: -15,
                        x: 4
                    }
                }
            });

             if ("'.$pssSuccessMessage.'" == "true") {
               document.cookie="pssSuccessMessage=false";
                showSuccessMessage("Signature has been saved.");
            }

        });
    </script>
'?>