<?php

$documentationContent = '

<div class="tableRowEditSelected tableRowHighlight edit-mode" style="display: none"><span class="icon-pencil"></span><b> Editing Selected Item...</b></div>
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">Documentation</legend>
    <div class="header-info">
        <span class="icon-info-sign"></span> The following documents are either required or recommended prior to submitting:
        <br/>
        <br/>
        <div class="row" style="margin-left: 40px" id="applicationDocumentCheckList">
            <span class="icon-check-empty"></span> Application (Required)
        </div>
        <div class="row" style="margin-left: 40px" id="psychologicalEvaluationsDocumentCheckList">
            <span class="icon-check-empty"></span> Psychological Evaluations (Recommended)
        </div>
        <div class="row" style="margin-left: 40px" id="specialEducationRecordsDocumentCheckList">
            <span class="icon-check-empty"></span> Special Education Records (Recommended)
        </div>
    </div>
        <br/>
    <form id="manageDocumentation">
        <input type="hidden" id="documentId"/>
        <div class="row">
            <label for="documentCategory">Category:</label>
            <select name="documentCategory" id="documentCategory">
                <option value="" selected></option>
                <option value="application">Application</option>
                <option value="medicaidCard">Medicaid Card</option>
                <option value="socialSecurityCard">Social Security Card</option>
                <option value="authorizationToRequestServices">Authorization to Request and Recieve Services</option>
                <option value="medicalRecords">Medical Records</option>
                <option value="psychologicalEvaluations">Psychological Evaluations</option>
                <option value="neuropsychologicalEvaluations">NeuropsychologicalEvaluations</option>
                <option value="specialEducationRecords">Special Education Records</option>
                <option value="vocationalEvaluations">Vocational Evaluations</option>
                <option value="otherProfessionalsAssessments">Other Professional Assessments</option>
            </select>
        </div>
        <div id="documentInfoContainer" style="display: none">
        <br/>
            <div class="row">
                <label class="complete-required" for="fileName">File Name:</label>
                <input type="text" id="fileName" class="required" required="required" readonly="readonly"/>
                <button type="button" id="browseButton">Browse</button>
            </div>
            <div class="row">
                <label for="documentTitle" class="complete-required">Title:</label>
                <input type="text" id="documentTitle" class="required" required="required"/>
            </div>
            <div class="row">
                <label for="documentDescription" class="complete-required">Description:</label>
                <textarea name="documentDescription" id="documentDescription" class="required" required="required"></textarea>
            </div>
        </div>
    </form>
</fieldset>
    <div class="add-to-table">
        <div class="center" id="saveCancelDocument" style="display: none;">
            <span class="addTo-button">
                <a href="#" id="saveDocument">Save</a>
            </span>
            <span class="CancelEdit-link">
                <a href="#" id="cancelDocument">Cancel</a>
            </span>
        </div>
         <table class="generalTable" noinit id="manageDocumentsTable">
            <thead>
                <tr>
                    <th>
                        Category
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        File Name
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

<script type="text/javascript">
      function clearForm() {
        $("#fileName").val("");
        $("#documentId").val("");
        $("#documentCategory").val("").change();
        $("#documentTitle").val("");
        $("#documentDescription").val("");
      }

        function loadTable(){
            if (ddaEligbilityApplicationDocuments.queryAll("documents").length > 0){

                reloadTable();

            } else {
            $("#manageDocumentsTable tbody").append("<tr><td colspan=\'5\' class=\'text-center\' id=\'noDataRow\'>No data available in table</td></tr>");
            }
        }
      function reloadTable() {
      var documents = ddaEligbilityApplicationDocuments.queryAll("documents"),
          tableRows = "";

          documents.forEach(function(document) {
            var manageLinks = "";

            if (document.uploadedBy == "'.$_COOKIE["role"].'") {
                manageLinks = "<span class=\'tableRowActions\'>" +
                                    "<a href=\'#\' id=\'editDocumentRow" + document.ID + "\' onclick=\'enableEditManageTable(this); editDocument\(" + document.ID + "\)\'>" +
                                    "Edit</a>" +
                                    "<a href=\'#\' id=\'deleteDocumentRow" + document.ID + "\' onclick=\'deleteDocument\(" + document.ID + "\)\'>" +
                                    "Delete</a>" +
                                "</span>"
            }
            tableRows += "<tr class=\'editItemRow\'>" +
                "<td>" +
                    document.categoryName +
                "</td>" +
                "<td>" +
                    document.title +
                "</td>" +
                "<td>" +
                    document.description +
                "</td>" +
                "<td>" +
                    "<a href=\''.base_url("application/content/files/sample_document.pdf").'\' target=\'_blank\' id=\'viewDocument" + document.ID + "\'>" +
                    "sample_document.pdf</a>" +
                "</td>" +
                "<td>" +
                     manageLinks +
                    "<span class=\'editRowIndicator\' style=\'display: none;\'>" +
                        "<span class=\'icon-pencil\'></span>" +
                        "<b>Editing...</b> " +
                    "</span>" +
                "</td>" +
             "</tr>";
            });

            $("#manageDocumentsTable tbody").html(tableRows);
      }

      function editDocument(documentId) {
        var documentId = documentId,
            document = ddaEligbilityApplicationDocuments.queryAll("documents", {
                query: {ID : documentId}
            });

            $("#documentId").val(documentId);
            $("#fileName").val("sample_document.pdf");
            $("#documentCategory").val(document[0].category).change(),
            $("#documentTitle").val(document[0].title),
            $("#documentDescription").val(document[0].description);
      }

      function deleteDocument(documentID) {
        var documentId = documentID;
            ddaEligbilityApplicationDocuments.deleteRows("documents", {ID: documentId});
            ddaEligbilityApplicationDocuments.commit();
            clearForm();
            reloadTable();
            loadTable();
            updateCheckList();
      }
        function loadTable(){
             if (ddaEligbilityApplicationDocuments.queryAll("documents").length > 0){

                reloadTable();

            } else {
                $("#manageDocumentsTable tbody").append("<tr><td colspan=\'5\' class=\'text-center\' id=\'noDataRow\'>No data available in table</td></tr>");
            }
        }
        function updateCheckList() {
        var checked = "<span class=\'icon-check\'></span>",
            unchecked = "<span class=\'icon-check-empty\'></span>";
        if (ddaEligbilityApplicationDocuments.queryAll("documents", {query : {category : "application"}}).length > 0 ){
            $("#applicationDocumentCheckList span").remove();
            $("#applicationDocumentCheckList").prepend(checked);
        } else {
            $("#applicationDocumentCheckList span").remove();
            $("#applicationDocumentCheckList").prepend(unchecked);
        }
        if (ddaEligbilityApplicationDocuments.queryAll("documents", {query : {category : "psychologicalEvaluations"}}).length > 0 ){
            $("#psychologicalEvaluationsDocumentCheckList span").remove();
            $("#psychologicalEvaluationsDocumentCheckList").prepend(checked);
        } else {
            $("#psychologicalEvaluationsDocumentCheckList span").remove();
            $("#psychologicalEvaluationsDocumentCheckList").prepend(unchecked);
        }
        if (ddaEligbilityApplicationDocuments.queryAll("documents", {query : {category : "specialEducationRecords"}}).length > 0 ){
            $("#specialEducationRecordsDocumentCheckList span").remove();
            $("#specialEducationRecordsDocumentCheckList").prepend(checked);
        } else {
            $("#specialEducationRecordsDocumentCheckList span").remove();
            $("#specialEducationRecordsDocumentCheckList").prepend(unchecked);
        }
    }
    $(document).ready(function(){

        loadTable();
        updateCheckList();

        $("#documentCategory").change( function(){
            if ($(this).val() != "") {
                $("#documentInfoContainer").show();
                $("#saveCancelDocument").show();
            } else {
                $("#documentInfoContainer").hide();
                $("#saveCancelDocument").hide();
            }
        })

        $("#saveDocument").on("click", function(){
        var form = "#manageDocumentation",
            documentId = $("#documentId").val(),
            category = $("#documentCategory").val(),
            categoryName = $("#documentCategory option:selected").text(),
            title = $("#documentTitle").val(),
            description = $("#documentDescription").val(),
            uploadedBy = "'.$_COOKIE["role"].'";
            $(form).valid();

            if ($(form).valid() && documentId == "") {
                ddaEligbilityApplicationDocuments.insert("documents", {category: category, categoryName: categoryName, title: title, description: description, uploadedBy: uploadedBy});
                ddaEligbilityApplicationDocuments.commit();
                $("#noDataRow").remove();
                clearForm();
                reloadTable();
                updateCheckList();
                disableEditManageTable();
                showSuccessMessage("Record has been saved.");

            } else if ($(form).valid() && documentId != "") {
                ddaEligbilityApplicationDocuments.insertOrUpdate("documents", {ID: documentId},{ category: category, categoryName: categoryName, title: title, description: description, uploadedBy: uploadedBy});
                ddaEligbilityApplicationDocuments.commit();
                $("#noDataRow").remove();
                clearForm();
                reloadTable();
                updateCheckList();
                disableEditManageTable();
                showSuccessMessage("Record has been saved.");
            }

        })



        $("#browseButton").on("click", function(){
            $("#fileName").val("sample_document.pdf");
        })
        $("#cancelDocument").on("click", function(){
            clearForm();
            disableEditManageTable();
        })

    });
</script>
'
?>

<script>


</script>