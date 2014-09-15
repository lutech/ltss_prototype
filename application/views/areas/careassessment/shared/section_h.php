<?php require "application/views/shared/assessment_builder.php"; ?>

<?php $Body = '
    <div class="genericform-style">
        <h4>IX. ICD-9 Coding Information</h4>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">A. Principal Diagnosis (Optional)</legend>
            <span class="header-info">
                Indicate the <strong>principal diagnosis for billing purposes.  Indicate the ICD-9 CM code.</strong> for <strong>V-codes,</strong> also indicate the medical diagnosis and associated ICD-9 CM code.  Be specific as possible.
            </span>'
            .new IformQuestion("A1","ICD-9 CM code for Principal Diagnosis at Assessment", 2, null, null,
                new TextBoxQuestionData("ICD-9 CM code:", "date"))
            .new IformQuestion(null, "A1a. Principal Diagnosis at Assessment", 2, null, null,
                new TextSummaryQuestionData(null))
            .new IformQuestion("A2","If Principal Diagnosis was a V-code, what was the ICD-9 CM code for the primary medical condition or injury being treated?", 2, null, null,
                new TextBoxQuestionData("ICD-9 CM code:", "date"))
            .new IformQuestion(null, "A2a. If Principal Diagnosis was a V-Code, what was the primary medical condition or injury being treated", 2, null, null,
                new TextSummaryQuestionData(null))
        .'</fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">B. Other Diagnoses, Comorbidities, Complications (Optional on PAC Admission only.)</legend>
            <span class="header-info">
                List up to 15 <strong>ICD-9 CM codes</strong> and associated diagnoses being treated, managed, or monitored in this setting. Include all diagnoses (e.g., depression, schizophrenia, dementia, protein calorie malnutrition). If a V-code is listed, also provide the <strong>ICD-9 CM code</strong> for the medical diagnosis being treated.
            </span>
            <div data-bind="foreach: Diseases">
                <fieldset class="fieldset-container-four ">
                    <legend class="legend-header-four">Disease&nbsp;<span data-bind="text: \'#\' + ($index() + 1)"></span></legend>
                    <div class="header-link">
                        <a href="#" role="button" title="Delete Disease" data-bind="click:$root.removeDisease">Delete</a>
                    </div>
                    <div class="row">
                        <label>ICD-9 CM Code</label>
                        <input type="text" data-bind="val: icdCode" />
                    </div>
                    <div class="row">
                        <label>Diagnosis</label>
                        <input type="text" data-bind="val: diagnosis" />
                    </div>
                    <hr/>
                </fieldset>
            </div>
            <div class="add-button">
                <a href="#" id="ButtonAddMedication" data-bind="click: addDisease">
                    Add Medication
                </a>
            </div>'
            .new IformQuestion("B16", "Is this list complete?", 2, null , null,
                new RadioQuestionData("B16", array(
                        new RadioCheckQuestion("0. No", "1"),
                        new RadioCheckQuestion("1. Yes", "2"))
                )
            )
        .'</fieldset>
    </div>
'?>

<script type="text/javascript">
    var Disease = function() {
        var self = this;
        self.icdCode = ko.observable();
        self.diagnosis = ko.observable();
    };

    var viewModel = function() {
        var self = this;
        self.Diseases = ko.observableArray();

        self.addDisease = function() {
            self.Diseases.push(new Disease());
        }

        self.removeDisease = function(disease) {
            self.Diseases.remove(disease)
        }
    };

    $(document).ready(function() {
        ko.applyBindings(new viewModel());
    })
</script>