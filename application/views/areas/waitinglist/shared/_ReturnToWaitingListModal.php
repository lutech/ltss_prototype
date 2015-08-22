<div id="returnToWaitingListModal" style="display: none; max-width: 600px">
    <form>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Return to Waiting List</legend>
            <div class="row">
                <label for="" class="complete-required">Reason</label>
                <select class="required" required="required">
                    <option value="0"></option>
                    <option value="1">Military Hold</option>
                    <option value="2">Voluntary Hold</option>
                    <option value="3">Other Hold</option>
                    <option value="4">Other (Return as Active)</option>
                </select>
            </div>
            <div class="row">
                <label for="">Comments:</label>
                <textarea class="comments-textarea"></textarea>
            </div>
        </fieldset>
        <div class="searchspace-footer-bar text-right">
            <button type="button" id="btnCancel" onclick="closeDialog()">Cancel</button>
            <button type="button" id="btnOk" onclick="closeDialog();">Submit</button>
        </div>
    </form>
</div>