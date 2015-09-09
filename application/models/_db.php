<?php
$DataBase = '
<script type="text/javascript">
//    LOCAL STORAGE DB SCHEMAS


    //DDA Eligibliity Application - Documents
    var ddaEligbilityApplicationDocuments = new localStorageDB("ddaEligbilityApplicationDocuments", localStorage);

    if( ddaEligbilityApplicationDocuments.isNew() ) {
        ddaEligbilityApplicationDocuments.createTable("documents", ["category", "categoryName", "title", "description", "uploadedBy"]);
        ddaEligbilityApplicationDocuments.commit();
    }

    //Reset
    if ("'.$ddaEligibilityApplicationData->reset.'" == "true"){
//            ddaEligbilityApplicationDocuments.deleteRows("documents", []);
//            ddaEligbilityApplicationDocuments.commit();
            localStorage.removeItem("db_ddaEligbilityApplicationDocuments");
            document.cookie="ddaeligibilityapplicationreset=;path=/";
    }

</script>
';

echo $DataBase;