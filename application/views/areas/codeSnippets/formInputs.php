//Check Box
<div class="row">
    <input type="checkbox" id="physician-locdecisionsignature"/>
    <label for="physician-locdecisionsignature" class="complete-required">Signature Captured on File:</label>
</div>

//Date Field
<div class="row">
    <label for="InformedChoice_CreatedDate" class="submit-required">Date:</label>
    <input type="text" id="InformedChoice_CreatedDate" class="date"/>
</div>

//Inline Radio Buttons
<div class="row">
    <fieldset class="grouped-radiobuttons">
        <legend>Transfer small objects from one hand to the other hand:</legend>
        <input type="radio"><label>1</label>
        <input type="radio"><label>2</label>
        <input type="radio"><label>3</label>
        <input type="radio"><label>4</label>
    </fieldset>
</div>

//Text Input
<div class="row">
    <label for="loctype" class="complete-required">LOC Type:</label>
    <input type="text" id="loctype"/>
</div>

//Summary Info
<fieldset class="fieldset-container-one">
    <legend class="legend-header-one">General Information</legend>
    <div class="column-left">
        <p class="row summary">
            <span class="label">LOC Recommended?</span>
            <span class="data-element">Yes</span>
        </p>
    </div>
    <div class="column-right">
        <p class="row summary">
            <span class="label">LOC Source:</span>
            <span class="data-element">InterRAI</span>
        </p>
    </div>
</fieldset>

//Text Area
<div class="row">
    <label for="message" class="submit-required">Comments:</label>
    <textarea name="" id="message" rows="80" class="comments-textarea-tall" style="height:280px;"></textarea>
</div>

//Select (Drop Down List)
<div class="row">
    <label for="nurse-nflocdecision" class="complete-required">NF LOC Decision:</label>
    <select id="nurse-nflocdecision">
        <option value="Approve">Approve</option>
        <option value="Refer to Physician">Refer to Physician</option>
    </select>
</div>