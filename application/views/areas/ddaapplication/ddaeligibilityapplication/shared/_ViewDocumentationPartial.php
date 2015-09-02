<?php
$documentationContent = '
 <table class="inline-table" id="manageDocumentsTable">
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
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script type="text/javascript">
    function loadTable(){
            if (ddaEligbilityApplicationDocuments.queryAll("documents").length > 0){

                reloadTable();

            } else {
            $("#manageDocumentsTable tbody").html("<tr><td colspan=\'4\' class=\'text-center\' id=\'noDataRow\'>No data available in table</td></tr>");
            }
        }
      function reloadTable() {
      var documents = ddaEligbilityApplicationDocuments.queryAll("documents"),
          tableRows = "";

          documents.forEach(function(document) {
            tableRows += "<tr>" +
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
                    "<a href=\''.base_url("application/content/files/sample_document.pdf").'\' target=\'_blank\' id=\'viewDocument\'>" +
                    "sample_document.pdf</a>" +
                "</td>" +
             "</tr>";
            });

            $("#manageDocumentsTable tbody").html(tableRows);
      }
      $(document).ready(function(){
        loadTable();
      });
</script>
'
?>