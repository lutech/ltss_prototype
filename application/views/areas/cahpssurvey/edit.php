<?php $WorkspaceHeader = '
    <h3>CAHPS Survey</h3>
      <div class="read-edit-toggle">
            <a href="'.base_url().'/index.php/cahpssurvey/details">View</a>
            <span>Edit</span>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">

            <button id="expandCollapseAll" runat="server">
            </button>
            <a class="button-style" href="'.base_url().'/index.php/cahpssurvey/details">Save</a>
        </div>
    </div>
'?>

<?php require 'application/views/areas/cahpssurvey/shared/_CahpsSurveyQuestionsPartial.php'; ?>

<?php $Script = '
    <script type="text/javascript">
    </script>
'?>
