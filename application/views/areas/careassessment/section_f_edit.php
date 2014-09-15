<?php $WorkspaceHeader = '
    <h3>CARE Assessment - VI. Functional Status: Usual Performance</h3>
      <div class="read-edit-toggle">
            <a href="'.base_url().'/index.php/careassessment/section_f_details">View</a>
            <span>Edit</span>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="btnPrev" onclick="goToPrevCareSection(\'sectionf\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Previous</button>
            <button id="btnNext" onclick="goToNextCareSection(\'sectionf\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Next</button>
        </div>
    </div>
'?>

<?php require 'application/views/areas/careassessment/shared/section_f.php'; ?>