<div id="selectProgramDialog" title="Add Attachment" style="display: none">
    <form action="submit">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Select Program</legend>
            <div class="row">
                <label for="documentType" class="submit-required" style="width: 100px">Program:</label>
                <select id="documentType">
                    <option value="0"></option>
                    <option value="1">AL</option>
                    <option value="2">ID/DD</option>
                    <option value="3">E&D</option>
                    <option value="4">IL</option>
                    <option value="5">TBI/SCI</option>
                </select>
            </div>
            <div class="row">
                <label for="documentType" class="submit-required" style="width: 100px">Program Type:</label>
                <select id="documentType">
                    <option value="0"></option>
                    <option value="1">Initial</option>
                    <option value="2">Recertification</option>
                    <option value="3">Change Request</option>
                </select>
            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript">
    function selectProgram(){
        $( "#selectProgramDialog" ).dialog({
            modal: true,
            height: "auto",
            width: "auto",
            maxHeight: 600,
            maxWidth: 800,
            resizable: false,
            draggable : false,
            fluid: true,
            buttons: {
                'Submit': function() {
                    $(this).dialog('close');
                },
                'Cancel': function() {
                    $(this).dialog('close');
                }
            }
        });
    }
</script>