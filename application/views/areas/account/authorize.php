<div class="login-body">
    <div class="six columns hide-for-print">
        <h1 class="login-logo"><i>LTSS Prototype</i></h1>
        <a name="Login" id="Login" class="ui-hide"></a>
        <p>
            This is a TEFT prototype.
        </p>
    </div>
    
     
    
    <div class="six columns">
        <div class="login-panel">
            
            <form id="loginform" method="post" name="form" action="<?php echo base_url().'index.php/site/login'?>">
                <fieldset id="login-form">
                    <legend>login</legend>
                    <div class="row">
                    	<label>Login Name:</label>
                        <input type="text" name="username"></input>
                    </div>
                    <div class="row">
                    	<label>Password:</label>
                        <input type="text" name="usernamepassword"></input>
                    </div>
                    <div style="text-align: center">
                        <input type="submit" value="Login" name="submit" style="max-width: 50%; margin-top: 20px !important" title="Submit" id="btnLogin"/>
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
    $(document).ready(function () {
        var isUserRoleSetsLoaded = false;

        function onUserRoleSetChange(){
            var dropDownList = $("#UserRoleSet").data("kendoDropDownList");
            if (dropDownList.value() == "" || dropDownList.value().indexOf("/") < 0) {
                $("#UserRoleSetId").val('');
            }
            else {
                $("#UserRoleSetId").val(dropDownList.value());
            }
        }

        var assignedUserRoleSets = @Html.Raw(Json.Encode(Model.AssignedUserRoleSets));
        if (assignedUserRoleSets.length == 0) {
            $("#rowUserRoleSet").hide();
        } else {
            $("#rowUserRoleSet").show();
            $("#UserRoleSet").kendoDropDownList({
                dataTextField: "Text",
                dataValueField: "Value",
                dataSource: assignedUserRoleSets,
                autoBind: true,
                change: onUserRoleSetChange,
                value: assignedUserRoleSets[0].Value
            });
            $("#UserRoleSetId").val(assignedUserRoleSets[0].Value);
        }

        function onChange() {
            var combobox = $("#OnBehalfOfPerson").data("kendoComboBox");
            if (combobox.value() == "" || combobox.value().indexOf("/") < 0) {
                $("#OnBehalfOfPersonId").val('@Model.AuthenticatedPersonId');
                $("#OnBehalfOfPersonId").change();
            }
            else {
                $("#OnBehalfOfPersonId").val(combobox.value());
                $("#OnBehalfOfPersonId").change();
            }
        }



        $("#OnBehalfOfPerson, #UserRoleSet").keydown(function (e) {
            if (e.keyCode == 13) {
                if (isUserRoleSetsLoaded) {
                    $('form#authorization').submit();
                }
            }
        });
    });

    function resizeDropdowns() {
        var resizeTo = $('.login-panel').outerWidth() - 80;
        $('.login-panel .k-dropdown').css({ 'max-width': resizeTo + 'px' });
    }

    $(document).ready(function () {

        //$('#body').addClass("login");

        $('#mainHeader-MenuBar').addClass("login-header");
        $('#body-content').css({
            'overflow-y': 'auto',
            'overflow-x': 'hidden'
        }
        );

        resizeDropdowns();
    });
    $(window).resize(function () {
        resizeDropdowns();
    });
</script>
