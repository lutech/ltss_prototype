<div class="login-body">
    <div class="six columns hide-for-print">
        <h1 class="login-logo"><i>
                <?php
                        if (isset($_COOKIE['CommonLabel_Application'])){
                            echo $_COOKIE['CommonLabel_Application'];
                        } else {
                            echo "LTSS MD DDA Pilot";
                        }
                ?>
        </i></h1>
        <a name="Login" id="Login" class="ui-hide"></a>
        <p>
            The content displayed in this prototype are for proof of concept only and do not represent actual private data or finished product.
        </p>
    </div>
    
     
    
    <div class="six columns">
        <div class="login-panel">
            
            <form id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/login'?>">
                <fieldset id="login-form">
                    <legend>login</legend>
                    <div class="row">
                    	<label>Login Name:</label>
<!--                        <input type="text" name="username"/>-->
                        <select name="username" id="username"
                            <option value="0"></option>
                            <option value="1">DDA Super User</option>
                            <option value="2">DDA Director</option>
                            <option value="3">CCS Coordinator</option>
                            <option value="4">Regional Director</option>
                            <option value="5">Regional Staff</option>
                            <option value="6">Regional Supervisor</option>
                            <option value="7">Waiver Unit Staff</option>
                        </select>
                    </div>
                    <div class="row">
                    	<label>Password:</label>
                        <input type="text" name="usernamepassword"/>
                    </div>
                    <div style="text-align: center">
                        <input type="submit" value="Login" name="submit" title="Submit" id="btnLogin" style="max-width: 50%; margin-top: 20px !important"/>
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
        $("#username").kendoComboBox({
            ignoreCase: false,
            dataTextField: "Text",
            dataValueField: "Value",
            filter: "startswith",
            placeholder: "Type to search...",
            autoBind: true,
            minLength: 3
        });
    });


    $(window).resize(function () {
        resizeDropdowns();
    });
</script>
