ltss.overlay = function () {

    function showWorkflowActionWindow(config) {
        config.contentSelector = '#divWorkflowAction';
        if ($('#divWorkflowAction').length > 0) {
            $('#divWorkflowAction').find('#msg').html(config.msg);
            
            $('#divWorkflowAction').find('#formWorkflowAction').unbind("submit").submit(function () {
                return true;
            });

            $('#divWorkflowAction #btnYes').unbind("click");

            if (config.url) {

                $('#divWorkflowAction').find('#formWorkflowAction').attr('action', config.url);
                $('#divWorkflowAction #btnYes').click(function (e) {
                    e.preventDefault();
                    if ($("#formWorkflowAction").valid()) {
                        //activateBlockUi();
                        $('#formWorkflowAction').submit();
                    } else {
                        return false;
                    }
                    return false;
                });
            }
            
            if (config.onYesFn) {
                $('#divWorkflowAction').find('#formWorkflowAction').unbind("submit").submit(function () {
                    return false;
                });

                $('#divWorkflowAction #btnYes').click(function() {
                    config.onYesFn();
                    close();
                });
            }

            if (config.hideComment) {
                $('#divWorkflowAction').find('#lblComment').hide();
                $('#divWorkflowAction').find('#comment').hide();
            }
            else {
                $('#divWorkflowAction').find('#lblComment').show();
                $('#divWorkflowAction').find('#comment').show();
                $('#divWorkflowAction').find('textarea').removeAttr("readonly").removeAttr("disabled");
            }
            show(config);
        }
        else {
            console.log('Missing WorkflowActionConfirm Partial.  Please contact developer.');
        }
    }

    var show = function (config) {
        config.options = $.extend({}, {
            afterShow: function () {
                overlayActivate($($(this)[0].element));
                if (!config.hideComment) {
                    $('#divWorkflowAction').find('#comment').focus();
                }
            }
        }, config.options);

        $.fancybox.open(config.contentSelector, config.options);
    }

    var confirm = function (cfg) {
        var config = $.extend({}, cfg);
        config.options = {
            modal: true,
            closeEffect: 'none',
            helpers: {
                overlay: {
                    speedOut: 0
                }
            },
            afterShow: function () {
                overlayActivate($($(this)[0].element));
                if (!config.hideComment) {
                    $('#divWorkflowAction').find('#comment').focus();
                }
            },
            height: cfg.height,
            minHeight: cfg.minHeight
        };

        showWorkflowActionWindow(config);
    };

    function showWorkflowActionAlertWindow(config) {
        config.contentSelector = '#divWorkflowActionAlert';
        if ($('#divWorkflowActionAlert').length > 0) {
            $('#divWorkflowActionAlert').find('#msg').html(config.msg);
            $('#divWorkflowActionAlert').find('#formWorkflowAction').attr('action', config.url);
            show(config);
        }
        else {
            console.log('Missing WorkflowActionAlert Partial.  Please contact developer.');
        }
    }

    var alert = function (cfg) {
        var config = $.extend({}, cfg);
        config.options = {
            modal: true,
            closeEffect: 'none',
            helpers: {
                overlay: {
                    speedOut: 0
                }
            },
            afterShow: function () {
                overlayActivate($($(this)[0].element));
                $('#divWorkflowActionAlert').find('#btnOK').focus();
            }
        };
        showWorkflowActionAlertWindow(config);
    };

    var close = function() {
        $.fancybox.close();
    };

    return {
        close: close,
        confirm: confirm,
        alert: alert,
        show: show
    };

} ();

