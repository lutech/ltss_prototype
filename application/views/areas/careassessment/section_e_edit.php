<?php $WorkspaceHeader = '
    <h3>CARE Assessment - V. Impairments</h3>
      <div class="read-edit-toggle">
            <a href="'.base_url().'/index.php/careassessment/section_e_details">View</a>
            <span>Edit</span>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="btnPrev" onclick="goToPrevCareSection(\'sectione\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Previous</button>
            <button id="btnNext" onclick="goToNextCareSection(\'sectione\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Next</button>
        </div>
    </div>
'?>

<?php require 'application/views/areas/careassessment/shared/section_e.php'; ?>