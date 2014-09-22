<div id="attachmentDialog" title="Add Attachment" style="display: none">
    <form action="submit">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">New Attachment</legend>
            <div class="row">
                <label for="documentType" class="submit-required" style="width: 100px">Document Type:</label>
                <select id="documentType">
                    <option value="0">Option 1</option>
                    <option value="1">Option 2</option>
                    <option value="2">Option 3</option>
                </select>
            </div>
            <div class="row">
                <label for="attachment" class="submit-required" style="width: 100px">Attachment:</label>
                <input type="text" id="attachment" placeholder="no attachments" disabled class="readonly" class="textbox-medium">
                <button type="button" style="margin: 0;height: 25px;font-size: 11px;line-height: 11px;">Browse</button>
            </div>
            <div class="row">
                <label for="attachmentComment" class="submit-required">Comment:</label>
                <textarea name="" id="attachmentComment" rows="80" class="comments-textarea-tall"></textarea>
            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript">
    function addAttachment(){
        $( "#attachmentDialog" ).dialog({
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