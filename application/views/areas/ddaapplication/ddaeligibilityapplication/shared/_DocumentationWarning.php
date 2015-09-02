<div id="documentationWarningDialog" style="display: none; max-width: 600px; min-width: 500px">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Are you sure you would like to submit?</legend>
            <span class="icon-warning-sign"></span> The following documents have not been uploaded:
            <style>
                #missingDocumentsList {
                    padding-left: 40px;
                    margin: 20px 0;
                    display: block;
                    list-style: disc !important;
                    list-style-type: disc !important;
                    -webkit-margin-before: 1em;
                    -webkit-margin-after: 1em;
                    -webkit-margin-start: 0px;
                    -webkit-margin-end: 0px;
                    -webkit-padding-start: 40px;
                }
                #missingDocumentsList li {
                    margin: 5px 0;
                    list-style: inherit;
                    list-style-type: inherit;
                }
            </style>
            <ul id="missingDocumentsList">
            </ul>
        </fieldset>
    <br/>
        <div class="searchspace-footer-bar text-center">
            <?php echo $submitDdaEligibilityApplication ?>
            <button type="button" id="btnCancel" onclick="closeDialog()">Cancel</button>
        </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var missingDocuments = "";
            if (ddaEligbilityApplicationDocuments.queryAll("documents", {query : {category : "psychologicalEvaluations"}}).length == 0 ){
                missingDocuments += "<li>Psychological Evaluations</li>";
            }
            if (ddaEligbilityApplicationDocuments.queryAll("documents", {query : {category : "specialEducationRecords"}}).length == 0 ){
                missingDocuments += "<li>Special Education Records</li>";
            }
            $("#missingDocumentsList").html(missingDocuments);
        });
    </script>
</div>