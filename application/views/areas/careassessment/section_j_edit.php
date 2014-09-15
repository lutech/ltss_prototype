<?php $WorkspaceHeader = '
    <h3>CARE Assessment - X. Other Useful Information</h3>
      <div class="read-edit-toggle">
            <a href="'.base_url().'/index.php/careassessment/section_j_details">View</a>
            <span>Edit</span>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="btnPrev" onclick="goToPrevCareSection(\'sectionj\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Previous</button>
        </div>
    </div>
'?>

<?php require 'application/views/areas/careassessment/shared/section_j.php'; ?>