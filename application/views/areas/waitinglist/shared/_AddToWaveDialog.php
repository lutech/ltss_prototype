<div id="addToWaveDialog" style="display: none; max-width: 600px">
    <form>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Add to Wave</legend>
            <div class="row">
                <label for="" class="complete-required">Wave #</label>
                <input type="text" class="extension required" required="required"/>
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