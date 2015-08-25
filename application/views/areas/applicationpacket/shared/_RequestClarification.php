<div id="requestClarificationDdaApplicationPacketDialog" style="display: none;">
    <form id="requestClarificationDdaApplicationPacketForm" method="post" name="form" action="<?php echo base_url().'index.php/applicationpacket/requestclarification'?>">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Specify form(s) which require clarification</legend>
            <div class="row">
                <input type="checkbox" id="ddalevelofcare"/>
                <label for="ddalevelofcare">DDA Level of Care Form</label>
                <div class="fieldset-container-three" style="display: none">
                    <div class="row">
                        <label for="loccomments" class="complete-required">Comments:</label>
                        <textarea class="comments-textarea required" required="required" id="loccomments"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="checkbox" id="ddaindividualplan"/>
                <label for="ddaindividualplan">Individual Plan</label>
                <div class="fieldset-container-three" style="display: none">
                    <div class="row">
                        <label for="ipcomments" class="complete-required">Comments:</label>
                        <textarea class="comments-textarea required" required="required" id="ipcomments"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Specify attachment(s) which require clarification</legend>
                <div class="row">
                    <input type="checkbox" id="freedomofchoice"/>
                    <label for="freedomofchoice">Freedom of Choice</label>
                </div>
                <div class="row">
                    <input type="checkbox" id="maapplication"/>
                    <label for="maapplication">MA Application</label>
                </div>
        </fieldset>
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Additional Clarification Request Comments</legend>
            <div class="row">
                <label for="" class="complete-required">Comments:</label>
                <textarea class="required comments-textarea" required="required"></textarea>
            </div>
        </fieldset>
    </form>
</div>

<script type="text/javascript">
    function closeDialog() {
        ltss.overlay.close();
    }
    function toggleCommentVisibility(target, bool){
       var target = target,
           show = bool;

        if (show == true) {
            $(target).show();
        } else {
            $(target).hide();
        }
    }
    function triggerToggle(element) {
        $(element).on('click', function(){
            var target = $(this).siblings('.fieldset-container-three');
            if (this.checked) {
                toggleCommentVisibility(target, true);
            } else {
                toggleCommentVisibility(target, false);
            }
        })
    }

    $(document).ready(function(){
        triggerToggle('#ddalevelofcare, #ddaindividualplan');
    });
</script>