<?php $WorkspaceHeader = '
    <h3>CAHPS Survey</h3>
      <div class="read-edit-toggle">
            <span>View</span>
            <a href="'.base_url().'/index.php/cahpssurvey/edit">Edit</a>
      </div>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button type="button" id="submitCahpsSurvey">Submit</button>
            <button id="expandCollapseAll" runat="server">
            </button>
        </div>
    </div>
'?>

<?php require 'application/views/areas/cahpssurvey/shared/_CahpsSurveyQuestionsPartial.php'; ?>

<?php
    $url = base_url().'index.php/cahpssurvey/history';
    $Script = '
    <script type="text/javascript">
        makeReadOnly();
        $(document).ready(function(){
            $("#submitCahpsSurvey").on("click", function(){window.location.href = "'.$url.'"});
        });
    </script>
'?>
