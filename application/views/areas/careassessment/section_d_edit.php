<?php $WorkspaceHeader = '
    <h3>CARE Assessment - IV. Cognitive Status, Mood & Pain</h3>
      <div class="read-edit-toggle">
            <a href="'.base_url().'/index.php/careassessment/section_d_details">View</a>
            <span>Edit</span>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="btnPrev" onclick="goToPrevCareSection(\'sectiond\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Previous</button>
            <button id="btnNext" onclick="goToNextCareSection(\'sectiond\', \''.base_url().'/index.php/careassessment/\', \'edit\')">Save & Next</button>
        </div>
    </div>
'?>

<?php require 'application/views/areas/careassessment/shared/section_d.php'; ?>