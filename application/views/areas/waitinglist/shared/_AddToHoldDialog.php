<div id="addToHoldDialog" style="display: none; max-width: 600px">
    <form>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Place Client On Hold</legend>
            <div class="row">
                <label for="" class="complete-required">Reason:</label>
                <select name="" id="" class="required">
                    <option value="0"></option>
                    <option value="1">Military Family</option>
                    <option value="2">Voluntary Hold</option>
                    <option value="3">Other</option>
                </select>
            </div>
            <div class="row">
                <label for="" class="complete-required">Comments:</label>
                <textarea class="required comments-textarea" required="required"></textarea>
            </div>
        </fieldset>
        <div class="searchspace-footer-bar text-right">
            <button type="button" id="btnCancel" onclick="closeDialog()">Cancel</button>
            <button type="button" id="btnOk" onclick="closeDialog();">Continue</button>
        </div>
    </form>
</div>