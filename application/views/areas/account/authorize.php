<div class="login-body">
    <div class="six columns hide-for-print">
        <h1 class="login-logo"><i>LTSS Style Guide</i></h1>
        <a name="Login" id="Login" class="ui-hide"></a>
        <p>
            This site is intended to be a central reference UI guide for UX, Dev, BA's, and QA. It contains the latest
            client side imlementations for eLTSS and any instance using the eLTSS architecture. This site is updated periodically so please
            check back frequently for changes, fixes and/or enhancements.<br><br>
            (This site is currently under development)
        </p>
    </div>
    
     
    
    <div class="six columns">
        <div class="login-panel">
            
            <form id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/login'?>">
                <fieldset id="login-form">
                    <div style="text-align: center">
                        <input type="submit" value="Continue" name="submit" style="max-width: 50%; margin-top: 20px !important" title="Submit" id="btnLogin"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<a href="#Main_Application_Menu" tabindex="0" class="ui-hide js-skip-link">Skip back to Main Application Menu</a>
<script type="text/javascript">
    $(document).ready(function () {
        $('a[href="#Main_Application_Menu"]').remove();
        $('a[href="#mainTabbedNav"]').attr('href', '#Login').text("Skip to Login");
    });
</script>
<script type="text/javascript">
    function resizeDropdowns() {
        var resizeTo = $('.login-panel').outerWidth() - 80;
        $('.login-panel .k-dropdown').css({ 'max-width': resizeTo + 'px' });
    }
    $(document).ready(function () {

        $('#mainHeader-MenuBar').addClass("login-header");
        $('#body-content').css({
            'overflow-y': 'auto',
            'overflow-x': 'hidden'
        });

        resizeDropdowns();
    });


    $(window).resize(function () {
        resizeDropdowns();
    });
</script>
