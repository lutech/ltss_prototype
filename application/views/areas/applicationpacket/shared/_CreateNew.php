<div id="createNewDdaApplicationPacketDialog" style="display: none; max-width: 600">
    <form id="createNewDdaApplicationPacketForm" method="post" name="form" action="<?php echo base_url().'index.php/applicationpacket/save'?>">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">New Application Packet</legend>
            <div class="row">
                <label for="programtype" class="complete-required">Program Type:</label>
                <select class="required" required="required" name="programtype" id="programtype">
                    <option value="0"></option>
                    <option value="1">NRW</option>
                </select>
            </div>
        </fieldset>
        <div class="searchspace-footer-bar text-center">
            <?php echo $saveDdaApplicationPacket ?>
            <button type="button" id="btnCancel" onclick="closeDialog()">Cancel</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    function closeDialog() {
        ltss.overlay.close();
    }
</script>