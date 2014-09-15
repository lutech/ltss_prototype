<?php $WorkspaceHeader = '
    <h3>CARE Assessment - X. Other Useful Information</h3>
      <div class="read-edit-toggle">
            <span>View</span>
            <a href="'.base_url().'/index.php/careassessment/section_j_edit">Edit</a>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="btnPrev" onclick="goToPrevCareSection(\'sectionj\', \''.base_url().'/index.php/careassessment/\', \'details\')">Save & Previous</button>
        </div>
    </div>
'?>

<?php require 'application/views/areas/careassessment/shared/section_j.php'; ?>

<?php
$Script = '
    <script type="text/javascript">
        makeReadOnly();
    </script>
'?>