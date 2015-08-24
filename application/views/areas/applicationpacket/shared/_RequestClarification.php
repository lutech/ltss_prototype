<div id="requestClarificationDdaApplicationPacketDialog" style="display: none; max-width: 600">
    <form id="requestClarificationDdaApplicationPacketForm" method="post" name="form" action="<?php echo base_url().'index.php/applicationpacket/requestclarification'?>">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Clarification Request</legend>
            <div class="row">
                <label for="" class="complete-required">Comments:</label>
                <textarea class="required comments-textarea" required="required"></textarea>
            </div>
        </fieldset>
        <div class="searchspace-footer-bar text-center">
            <?php echo $submitClarificationRequestDdaApplicationPacket ?>
            <button type="button" id="btnCancel" onclick="closeDialog()">Cancel</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    function closeDialog() {
        ltss.overlay.close();
    }
</script>