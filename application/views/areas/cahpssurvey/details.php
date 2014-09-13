<?php $WorkspaceHeader = '
    <h3>CAHPS Survey</h3>
      <div class="read-edit-toggle">
            <span>View</span>
            <a href="'.base_url().'/index.php/cahpssurvey/edit">Edit</a>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">

            <button id="expandCollapseAll" runat="server">
            </button>
            <a class="button-style" href="'.base_url().'/index.php/cahpssurvey/history">Submit</a>
        </div>
    </div>
'?>

<?php require 'application/views/areas/cahpssurvey/shared/_CahpsSurveyQuestionsPartial.php'; ?>

<?php $Script = '
    <script type="text/javascript">
        makeReadOnly();
    </script>
'?>
