<script type="text/javascript">

    // set jQuery validator defaults
    // NOTE: to make unobtrusive validator work, not put this code in $(document).ready()
    if (jQuery.validator) {
        
        $.validator.addMethod('date',
            function (value, element) {
                return true; // since MVC4 data-val-date is put on EVERY vm date property. Default implementation does not allow for multiple cultures...
            });

        //$.validator.addMethod('noFutureDate', function (value) {
            //var today = new Date();
            //return value.trim() == "" || today >= new Date(value);
        //}, "@(string.Format("'{0}' cannot be a future date.", "Date"))");
        
        jQuery.validator.setDefaults({
            errorElement: "span"
        });
        jQuery.validator.addMethod("phoneUS", function (phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return this.optional(element) || phone_number.length > 9 &&
                phone_number.match(/^\(?[\d]{3}\)?[\s-]?[\d]{3}[\s-]?[\d]{4}$/);
        }, "Please specify a valid phone number");

        jQuery.validator.addMethod("phoneUS1", function (phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return phone_number == "" || phone_number.length > 9 &&
                phone_number.match(/^\(?[\d]{3}\)?[\s-]?[\d]{3}[\s-]?[\d]{4}$/);
        }, "Please specify a valid phone number");

        jQuery.validator.addMethod("dateUS", function (value, element) {
            if (!value) {
                return true;
            }
            var check = false;
            var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
            if (re.test(value)) {
                var adata = value.split('/');
                var mm = parseInt(adata[0], 10);
                var dd = parseInt(adata[1], 10);
                var yyyy = parseInt(adata[2], 10);
                var xdata = new Date(yyyy, mm - 1, dd);
                if ((xdata.getFullYear() == yyyy) && (xdata.getMonth() == mm - 1) && (xdata.getDate() == dd))
                    check = true;
                else
                    check = false;
            } else
                check = false;
            return this.optional(element) || check;
        },
                "Please enter a valid date (mm/dd/yyyy)");

        if (jQuery.validator.unobtrusive != undefined) {
            jQuery.validator.unobtrusive.adapters.addBool("phoneUS");
        }

        jQuery.validator.addMethod("providerMA", function(value, element) {
            return this.optional(element) || value.match(/^(\d{9})$/) && value.length === 9;
        }, "Please enter a valid provider Number");
        
        //jQuery.validator.addMethod("clientMA", function (value, element) {
          //      return this.optional(element) || value.match(/^(\d{11})$/) && value.length === 11;
        //}, "Please enter a valid @Html.GetResourceString("CommonMessages","Client_LowCase") MA Number");

        jQuery.validator.addMethod('validTime', function (value, element) {
            return value.match(/^((0?[1-9])|(1[0-2])):[0-5][0-9]\s(a|p)m/i);
        }, "Please enter a valid time.");
        
        jQuery.validator.addMethod('validDateTime', function (value, element) {
            return value.match(/^\d{2}\/\d{2}\/\d{4}\s((0?[1-9])|(1[0-2])):[0-5][0-9]\s(a|p)m/i);
        }, "Please enter a valid date/time.");

        jQuery.validator.addMethod('noFutureDate', function (value, element) {
            var check = false;
            var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
            if (re.test(value)) {
                var adata = value.split('/');
                var mm = parseInt(adata[0], 10);
                var dd = parseInt(adata[1], 10);
                var yyyy = parseInt(adata[2], 10);
                var xdata = new Date(yyyy, mm - 1, dd);
                if ((xdata.getFullYear() == yyyy) && (xdata.getMonth() == mm - 1) && (xdata.getDate() == dd)) {
                    var now = new Date();
                    if (xdata <= new Date(now.getFullYear(), now.getMonth(), now.getDate())) {
                        check = true;
                    }
                    else {
                        check = false;
                    }
                }
                else
                    check = false;
            } else
                check = false;
            return this.optional(element) || check;
        }, "Date cannot be in future.");

        jQuery.validator.addMethod('noFutureTime', function (value, element) {
            var check = false;
            var re = /^(\d{2})\/(\d{2})\/(\d{4})\s((?:0?[1-9])|(?:1[0-2])):([0-5][0-9])\s((?:a|p)m)/i;
            var found = re.exec(value);
            if (found) {
                var hh = parseInt(found[4], 10);
                var mm = parseInt(found[5], 10);
                var tt = found[6];

                if (tt.toLowerCase() == "pm") {
                    if (hh != 12) {
                        hh += 12;
                    }
                }

                if (hh == 12 && tt.toLowerCase() == "am") {
                    hh = 0;
                }

                var now = new Date();

                var month;
                var dd;
                var yyyy;

                month = parseInt(found[1], 10);
                dd = parseInt(found[2], 10);
                yyyy = parseInt(found[3], 10);
                
                var xdata = new Date(yyyy, month - 1, dd, hh, mm);
                if ((xdata.getHours() == hh) && (xdata.getMinutes() == mm)) {
                    if (xdata <= now) {
                        check = true;
                    }
                    else {
                        check = false;
                    }
                }
                else
                    check = false;
            } else
                check = false;
            return this.optional(element) || check;
        }, "Time cannot be in future.");

        jQuery.validator.addMethod('email', function(value, element) {
            var email = value.toLowerCase();
            return this.optional(element) || email.match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/);
        }, "Please enter a valid email.");

        jQuery.validator.addMethod('zipCode', function (value, element) {
            var zipCode = value;
            return !value || zipCode.match(/^\d{5}(?:[-\s]*\d{4})?$/);
        },"Please enter a valid zip code");
    }


    $(document).ready(function () {

        //apply iList scrolling
        //        if ($('.genericform-style').length > 0) {
        //            $('.workspace-content-container').iList({ headerSelector: 'h4' });
        //        }

        // apply style
        //ltss.kendoPanelBar.applyStyle();

        //ltss.kendoPanelBar.collapseAll();
        ltss.kendoPanelBar.expandAll();


        //This will add a collapse/expand all button in the ".workspace-header-bar" and/or the "searchspace-footer-bar" if the workspace has more than 1 panelbar.
        //ltssPanelBar.addExpandCollapseButton();


        // For every row div, we need to determine whether there exists a div ascendent with the read-only class.
        // In this case, we will turn complete-required labels (*) into submit required labels(**), and also turn selection
        // required labels(*) into selection submit required labels(**).  Otherwise, we activate normal complete/submit/selection
        // normally.


        $('.workspace-content-container div.row, .workspace-content-container fieldset, .workspace-content-containerformylist fieldset, .fieldset-container-searcharea').each(function (idx) {
            if ($(this).parents('div .read-only').length == 0) {
                // No read only, business as usual
                $(this).find(".complete-required").completeRequired();
                $(this).find(".selection-required").selectionRequired();
                $(this).find(".submit-required").submitRequired();
                $(this).find(".selection-submit-required").selectionSubmitRequired();
            }
            else {
                // Read only, turn complete required -> submit required, and selection required -> selection submit required.
                // Normal submit requireds are already taken care of.
                $(this).find(".complete-required").completeToSubmitRequired();
                $(this).find(".selection-required").selectionSubmitRequired();
                $(this).find(".selection-submit-required").selectionSubmitRequired();
                $(this).find(".submit-required").submitRequired();

            }
        });

        $('.workspace-content-container').each(function (idx) {
            if ($(this).parents('div .read-only').length == 0) {
                $(this).find(".section-submit-required").sectionSubmitRequired();
            }
            else {
                $(this).find(".section-submit-required").sectionSubmitRequired();
            }
        });

        $(".filter-required").filterRequired();

        //$('.grouped-radiobuttons').radioGroupByLegend();

        $(".leftnav-groupcontainer li a").addClass("ltss-icon-arrow");
        $("a.ltss-icon-arrow").ltssIconContainerArrow();
        $("a.ltss-icon-Right").ltssIconContainerRight();
        $("a.ltss-icon-left").ltssIconContainerLeft();

    });

    function processAjaxError(req) {
        if (req.status == 0) {
            alert('You are offline!!\n Please Check Your Network.');
        } else if (req.status == 404) {
            alert('Requested URL not found.');
        } else if (req.status == 500) {
            alert('Internal Server Error.');
        } else if (req.statusText == 'parsererror') {
            alert('Error.\nParsing JSON Request failed.'); // If you see this error, first check sitemap access
        } else if (req.statusText == 'timeout') {
            alert('Request Time out.');
        } else {
            alert('Unknown Error.\n' + req.responseText);
        }
    }

    $(document).ready(function () {
        //ajax setup
        $.ajaxSetup({
            cache: false,
            dataType: "json"
            
        });

        $(document).ajaxError(function (evt, req, settings) {
            if (settings.supressErrors) {
                return;
            }

            // refer to http://www.maheshchari.com/jquery-ajax-error-handling/
            if (typeof HandleAjaxError == "function") {
                if (!HandleAjaxError(req, settings)) {
                    processAjaxError(req);
                }
            }
            else {
                processAjaxError(req);
            }
        });

        $(document).ajaxStop($.unblockUI);

        //Initial all data tables
        applyDataTables();

        $('.jtextfill').textfill({ maxFontPixels: 36, innerTag: 'h3' });

        $('form').on('submit', function () {

            if ($(this).attr('action') &&
                    ($(this).attr('action').indexOf('/ScreeningWorkflow/') > -1 ||
                    $(this).attr('action').indexOf('/ScreeningRequest/') > -1)) {

                var patt = /\/submit\//i;
                if ($(this).attr('action').match(patt) || $(this).attr('isSubmitForm')) {
                    hasSubmitErrors(false);
                }

                if ($(this).attr('checkErrors')) {
                    if (hasSubmitErrors(true, true)) {
                        return false;
                    }
                }

            }

            if (!$(this).hasClass('noBlockUi')) {
                if (jQuery.validator) { // verify if validator is defined or not
                    if ($(this).valid()) {
                        activateBlockUi();
                    }
                }
                else {
                    activateBlockUi();
                }
            }
        });
    });
    
    function activateBlockUi() {
        $.blockUI({
            message: '<div class="blockUiImg"  id="floatingBarsG"><div class="blockG" id="rotateG_01"></div><div class="blockG" id="rotateG_02"></div><div class="blockG" id="rotateG_03"></div><div class="blockG" id="rotateG_04"></div><div class="blockG" id="rotateG_05"></div><div class="blockG" id="rotateG_06"></div><div class="blockG" id="rotateG_07"></div><div class="blockG" id="rotateG_08"></div></div>',
            css: { width: 'auto', top: '50%', left: '50%', marginTop: '-21px', borderRadius: '7px', padding: '20px', marginLeft: '-21px', border: '0', backgroundColor: 'rgba(0, 0, 0, 0.84)', zIndex: '999999' },
            overlayCSS: { opacity: 0.4, cursor: 'wait', zIndex:'999998' },
            fadeIn: 100
        });
    }
    function setCheckboxSections() {
        $("[checkSectionFor]").each(function () {
            var me = $(this);
            var chkId = me.attr('checkSectionFor');
            var chkEl = $('#' + chkId);
            if (chkEl.is(':checked')) {
                me.show();
            }
            else {
                me.hide();
            }

            if (chkEl.attr('type') == 'checkbox') {
                chkEl.change(function() {
                    if ($(this).is(':checked')) {
                        me.show();
                    } else {
                        me.hide();
                    }
                });
            }
            else if (chkEl.attr('type') == 'radio') {
                $('[name="' + chkEl.attr('name') + '"]').change(function() {
                    if (chkEl.is(':checked')) {
                        me.show();
                    } else {
                        me.hide();
                    }
                });
            }
        });
    }

    function setDynamicInput(input) {
        if($(input).is('input[type="text"]'))
        {
            dynamicTextboxWidth($(input));
        }

        if ($(input).is('select')) {
            dynamicSelectWidth($(input));
        }
    }

    $(document).ready(function () {

        //This function will re-size an input text field depending on the amount of characters in the field.

        $('.workspace-content-container, .searchspace-content-container-one').on('keyup', 'input[type=text]:not(.textbox-small), input[type=text].input-auto-resize', function () {
            dynamicTextboxWidth($(this));
        });
        $('.workspace-content-container input[type=text]:not(.textbox-small), .searchspace-content-container-one input[type=text]:not(.textbox-small), input[type=text].input-auto-resize').keyup();

        //This function will re-size a select input depending on the amount of characters in the field.

        $('.workspace-content-container, .searchspace-content-container-one').on('change', 'select:not(.selector-small), select.input-auto-resize', function () {
            dynamicSelectWidth($(this));
        });
        $('.workspace-content-container select:not(.selector-small), .searchspace-content-container-one select:not(.selector-small), select.input-auto-resize').change();


        //        $('.workspace-content-container').is(":focus");


        /* $(".row").children(":radio").each(function () {
        $(this).parent(".row").css({
        "margin": "0",
        "padding-top": "0",
        "padding-bottom": "0"
        });
        });*/


        $(".row").children(":checkbox").each(function () {
            if ($(this).siblings(":input").not("input[type=hidden]").length == 0) {
                $(this).siblings("label:not(.label)").addClass("auto-width");
            }


        });

        $('.k-input').css('width', 'inherit');

        $('nav.tabbed-nav .selected').attr('onclick', 'return false;');
        $('nav.tabbed-nav  a').css('cursor', 'default');
        $('nav.tabbed-nav a.selected').parent('li').addClass('selected');

        if ($('#sidenav').length > 0) {
            $('.selection-summaryinfo h3, .selection-summaryinfo h2').first().before('<button class="leftNav-dropDownButton hide-for-print"><span class="icon-reorder " id="menuIcon"></span></button>');
        }
        $('button.leftNav-dropDownButton').on('click', function () {
            $('button.leftNav-dropDownButton').toggleClass('dropDownActive');
            if ($('button.leftNav-dropDownButton').hasClass('dropDownActive')) {
                $('#sidenav.sidenav').css('margin', '0px');
                $(".leftNav-dropDownButton").append('<span class="icon-folder-arrow"></span');
            } else {
                $('#sidenav.sidenav').css('margin', '');
                $(".leftNav-dropDownButton .icon-folder-arrow").remove();
            }
        });
        $('button.leftNav-dropDownButton').mouseup(function (e) {
            e.stopPropagation();
        });

        $(document).mouseup(function (e) {
            var $button = $(e.target);
            if ($(".leftNav-dropDownButton").hasClass("dropDownActive") && !$button.is("button.leftNav-dropDownButton, button.leftNav-dropDownButton div")) {
                var $container = $(event.target);
                var container2 = $("#sidenav.sidenav");
                if (!$container.is("#sidenav.sidenav") && container2.has(e.target).length === 0) {
                    $('button.leftNav-dropDownButton').click();
                }
            }
        });

        var clientFullName = $('h2').html();
        var clientId = $('#cliensummaryinfo #cs-id').first().html();
        var clientDob = $('#cliensummaryinfo #cs-dob').first().html();
        var clientMfpEligible = $('#cliensummaryinfo #cs-mfpe').html();
        var clientMfpEligible = $('#cliensummaryinfo #cs-mfpe').html();
        $('nav.tabbed-nav li a.selected.client-details-icon').html('<div class="ltss-icon-container icon-left"></div><span class="toplevelTab">Client Details</span><span class="clientNameIdDob"><span class="p-label">Client Name:</span>' + clientFullName + clientId + clientDob + '</span>');


        // I-Form Intialization

        $('div.iform-fieldset:has(input[type=radio])').not('[isDisabled], [readonly]').each(function (idx, el) {
            setupRadios(el);
        });
        
        //$('div.iform-row').not('[isDisabled], [readonly]').each(function (idx, el) {
        //    $(el).attr('tabindex', '0');

        //    $(el).focus(function () {
        //        $(this).find(':input:first').focus();

        //        $(this).addClass('iform-active-row')
        //        //$(this).attr('tabindex', '1');
        //        $('.genericform-style').find('div.iform-row').not($(el)).removeClass('iform-active-row');
        //        //$('.genericform-style').find('div.iform-fieldset').not($(el)).attr('tabIndex', '-1');
        //    });
        //});
        //$('.genericform-style :input').not('[type=hidden], [readonly]').first().focus().parents('div.iform-fieldset').not('[isDisabled], [readonly]').first().addClass('iform-active-fieldset');

        //$('.iform-fieldset:has(.grouped-radiobuttons)').css('display', 'inline-block');

        $(document).on('keypress', '.onlyNumbers', function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if ((keyCode >= 48 && keyCode <= 57) || String.fromCharCode(keyCode) == "." || keyCode == 9 || keyCode == 8 || keyCode == 46 || keyCode == 37 || keyCode == 39) {
                return true;
            }
            else {
                return false;
            }
        });
    });

    $(window).resize(function () {
        onWindowResizeRedrawTable();
    })
    $('.genericform-style').find(':input').focus(function () {

        $('.anchor-groupcontainer ul li span').remove();
    });
    function activeQuestion(selector) {
        if ($('.anchor-groupcontainer').length >= 1) {
            $('.anchor-groupcontainer ul li span').remove();
            $('.anchor-groupcontainer ul li[name=' + selector + ']').prepend('<span class="icon-caret-right active-question-anchor" title="Currently selected question."></span>');

        }
    }
    
    function scrolliFormFieldsetToView(selector) {
        if ($(selector).position().top < 0) {
            $(selector)[0].scrollIntoView();
        }
        else if (($(selector).position().top + $('.iform-active-fieldset').height()) > $('.workspace-content-container').height()) {
            $(selector)[0].scrollIntoView(false);
        }
    }

    var buffer = '';
    var bufferTimeout;
    function setupRadios(el) {
        if (!$(el).hasClass('iform-nested')) {
            $(el).attr('tabindex', '-1');
        }

        $('.genericform-style').find('*').not($(el)).focus(function () {
            $(el).removeClass('iform-active-fieldset');
        });

        $(el).focus(function () {
            //if ($(this).find(':input:checked').length > 0) {
            //    $(this).find(':input:checked').focus()
            //}
            //else {
            //    $(this).find(':input:first').focus()
            //}

            $(this).addClass('iform-active-fieldset')
            //$(this).attr('tabindex', '1');
            $('.genericform-style').find('div.iform-fieldset').not($(el)).removeClass('iform-active-fieldset');
            $('.genericform-style').find('div.iform-row').removeClass('iform-active-row');
            //$('.genericform-style').find('div.iform-fieldset').not($(el)).attr('tabIndex', '-1');

            var sectionName = $(this).parents('.anchor-section').first().attr('id');
            var activeiFormFieldset = $(this).parents('.iform-active-fieldset').first();
            activeQuestion(sectionName);

            if(activeiFormFieldset.length > 0) {
                scrolliFormFieldsetToView(activeiFormFieldset);
            }
        });

        $(el).find(':input').focus(function () {
            $(this).parents('div.iform-fieldset').first().addClass('iform-active-fieldset');
            $('.genericform-style').find('div.iform-row').removeClass('iform-active-row');
            $('.genericform-style').find('div.iform-fieldset').not($(el)).removeClass('iform-active-fieldset');

            var sectionName = $(this).parents('.anchor-section').first().attr('id');
            var activeiFormFieldset = $(this).parents('.iform-active-fieldset').first();
            activeQuestion(sectionName);
            if (activeiFormFieldset.length > 0) {
                scrolliFormFieldsetToView(activeiFormFieldset);
            }
            expandPanelBarOnInputFocus(this);

        });
        $(el).keydown(function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if(keyCode!=8){
                e.stopPropagation();
            }
            if (keyCode == 9 && !e.shiftKey) {
                buffer = '';
                changeFocus(el, e);
            }
            else if (keyCode == 9)
                buffer = '';
            else {
                var pressedKey = (String.fromCharCode((96 <= keyCode && keyCode <= 105) ? keyCode - 48 : keyCode));
                buffer += pressedKey
                clearTimeout(bufferTimeout);
                bufferTimeout = setTimeout(function () { buffer = '' }, 1000);
                if ($(document.activeElement).is('input[type=radio]')) {
                    $(this).find('input[type=radio]').not($('.iform-fieldset').find('.iform-fieldset').find('input[type=radio]')).each(function (idx, el) {
                        if ($(el).val() == buffer) {
                            if (!$(el).is(':checked')) {
                                $(el).attr('checked', 'checked');
                                $(el).triggerHandler('click');
                                $(el).triggerHandler('change');
                                $(el).focus();
                                isFormDirty = true;
                            }
                        }
                    });
                }
                if( $(document.activeElement).is($('.iform-fieldset').find('.iform-fieldset').find('input[type=radio]'))){
                    $(this).find('input[type=radio]').each(function (idx, el) {
                        if ($(el).val() == buffer) {
                            if (!$(el).is(':checked')) {
                                $(el).attr('checked', 'checked');
                                $(el).triggerHandler('click');
                                $(el).triggerHandler('change');
                                $(el).focus();
                                isFormDirty = true;
                            }
                        }
                    });
                }
            }
        });
    }
    
    $('a#ButtonAddOtherDiseaseDiagnosis, div.iform-row').keydown(function (e) {
        var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
        if (keyCode != 8) {
            e.stopPropagation();
        }
        if (keyCode == 9 && !e.shiftKey) {
            changeFocus($(this), e);
        }
    });

    function changeFocus(el, e) {
        if ($(el).is($('div.iform-fieldset:visible, div.iform-row:visible, a#ButtonAddOtherDiseaseDiagnosis:visible').not('[isdisabled]').not('[style="display: none;"]')[$('div.iform-fieldset:visible, div.iform-row:visible, a#ButtonAddOtherDiseaseDiagnosis:visible').not('[isdisabled]').not('[style="display: none;"]').length - 1])) {
            e.preventDefault();
            $(el).removeClass('iform-active-fieldset');
            $('button#btnNextSection').focus();
        }
    }

    var activeWindow;

    function overlayActivate(overlayEl) {
        activeWindow = overlayEl;
        //$("#agencyWindow").prev().find('span').attr("tabIndex", -1); $("#agencyWindow").prev().find('span').focus();
        //$("#agencyWindow").find('*').attr('tabindex', '-1');
        activeWindow.find(':input:visible, th, a').attr('tabindex', '0');

        var closeBtn = overlayGetCloseButton();
        var firstElem = activeWindow.find(':input:visible, th, a').first();
        var lastElem = activeWindow.find(':input:visible, th, a').last();

        if (closeBtn) {
            activeWindow.data('closeBtn', closeBtn);
        }
        activeWindow.data('lastElem', lastElem);
        activeWindow.data('firstElem', firstElem);
        setTimeout(function () { firstElem.focus(); }, 500);

        overlaySetLastElem();

        activeWindow.attr('tabindex', '-1');
        activeWindow.off('keydown');
        activeWindow.on('keydown', function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if (keyCode == 27) {
                closeBtn.click();
            }
        });

        activeWindow.find('form input').off('keypress');
        activeWindow.find('form input').on('keypress', function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if (keyCode == 13) {
                activeWindow.find('form input[type=button]').click();
                return false;
            }
        });
    }
    $(document).ready(function () {
        $('.k-overlay').click(function () {
            activeWindow.data('firstElem').focus();
        });

        $('#fancybox-overlay').live('click', function () {
            activeWindow.data('firstElem').focus();
        });
    });

    function overlaySetLastElem() {
        var currLastItem = activeWindow.data('lastElem');
        currLastItem.unbind('keydown');

        var newLastItem = activeWindow.find(':input:visible, th, a').last();
        newLastItem.keydown(function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if (keyCode == 9) {
                if (activeWindow.data('closeBtn')) {
                    activeWindow.data('closeBtn').focus();
                }
                else {
                    var closeBtn = overlayGetCloseButton();
                    if (!closeBtn) {
                        activeWindow.data('firstElem').focus();
                    }

                    else {
                        activeWindow.data('closeBtn', closeBtn);
                        closeBtn.focus();
                    }
                }
                return false;
            }
        });

        activeWindow.data('lastElem', newLastItem);
    }

    function overlayGetCloseButton() {
        var kendoClose = activeWindow.prev().find('.k-close')[0];
        var fancyClose = activeWindow.parents('.fancybox-outer').siblings('.fancybox-close')[0];
        if (kendoClose) {
            $(kendoClose).attr('tabindex', '0');
        }
        if (fancyClose) {
            $(fancyClose).attr('tabindex', '0');
        }
        var closeBtn = kendoClose || fancyClose;

        $(closeBtn).keydown(function (e) {
            var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if (keyCode == 9) {
                activeWindow.data('firstElem').focus();
                return false;
            }
        });

        return closeBtn;
    }
//    $(document).ready(function () {
//        $('.js-skip-link').click(
//            function () {
//                var target = $(this).attr('href').split('#')[1];
//                $('[name="' + target + '"]').first().next().attr('tabindex', '0');
//                $('[name="' + target + '"]').first().next().addClass('ui-hide-outline');
//                $('[name="' + target + '"]').first().next().focus();
//            });
//        $('.js-skip-link').keydown(function (e) {
//            console.log(e.keyCode)
//            if (e.keyCode == 39 || e.keyCode == 13) {
//                $(this).click();
//            }
//        });
//    });

    $(document).ready(function () {
        resizeFixedWorkarea();
        resizeTableHeaderBody();
        positionAnchorMenu();
        setFullscreenButton("#fullscreen-button");
        setupAnchorMenu('.workspace-content-container', '.anchor-section');
        resizeKendoWindow();

        var resizeKendoTimeout;
    $(window).resize(function() {
        resizeFixedWorkarea();
        resizeTableHeaderBody();
            positionAnchorMenu();
            resizeKendoWindow();

        });
    });

    
    function popupWindowResize() {
        clearTimeout(window.popupWindowResizeTimeOut);
        window.popupWindowResizeTimeOut = setTimeout(function() {
            resizeFixedWorkarea();
            resizeTableHeaderBody();
        }, 500);
    }

    if (sessionStorage["assessmentSave"]) {
        showSuccessMessage('Assessment has been saved.', 1000);
        sessionStorage.removeItem("assessmentSave");
    }

    ////hover over anchor, remove class 'isHidden' from sub list
    //$(".anchor-groupcontainer li a").each(function () {
    //    $(this).mouseover(function() {
    //        $(this).parent("li").next(".leftnav-sublink").removeClass("isHidden");
    //        var subOffsetLeft = offsetLeft + $(".anchor-groupcontainer").outerWidth();
    //        var subOffsetTop = offsetTop;
    //        $('.leftnav-sublink').css('left', subOffsetLeft);
    //        $('.leftnav-sublink').css('top', subOffsetTop);
    //    });
    //    $(this).mouseout(function () {
    //        $(this).parent("li").next(".leftnav-sublink").addClass("isHidden")
    //    });
    //});

    //function redirectToInterRaiOffline() {
      //  window.location = "@Url.Action("OfflineAssessmentList", "Assessment", new { area = "Assessments" })";
    //}
    
    //function callNurseMonitoringRefreshOffline(redirectUrl) {
      //  nurseMonitoringRefreshOffline(
        //    "@Url.Action("RefreshOffline", "NurseMonitoring", new {area = "NurseMonitoring"})",
        //    "@Url.Action("Download","NurseMonitoring",new { area = "NurseMonitoring"})",
      //      redirectUrl);
    //}
    
    function callUploadAssessment(id) {
        uploadAssessment(id,
            '@Url.Action("Upload","Assessment",new{area = "Assessments"})',
            '@Url.Action("UploadNurseMonitoring", "NurseMonitoring",new{area="NurseMonitoring"})',
            '@Url.Action("UploadProviderEvaluation", "NurseMonitoring",new{area="NurseMonitoring"})',
            '@Url.Action("UploadProviderInstruction", "NurseMonitoring",new{area="NurseMonitoring"})');
    }
    

    function expandPanelBarOnInputFocus(element) {
        if (!$(element).parents('.panelBarItem').first().children('.header').first().hasClass('expanded')) {
            var me = $(element).parents('.panelBarItem').first();
            ltssPanelBar.expand(me);
        }
    }
    $('.genericform-style').find(':input').on('focus', function () {
        expandPanelBarOnInputFocus(this);
    });


    // on window resize run function
    $(window).resize(function () {
        fluidDialog();

        $(".ui-dialog-content").dialog("option","position","center");
    });
    // catch dialog if opened within a viewport smaller than the dialog width
    $(document).on("dialogopen", ".ui-dialog", function (event, ui) {
        fluidDialog();
    });

    function fluidDialog() {
        var $visible = $(".ui-dialog:visible");
        // each open dialog
        $visible.each(function () {
            var $this = $(this);
            var dialog = $this.find(".ui-dialog-content").data("ui-dialog");
            // if fluid option == true
            if (dialog.options.fluid) {
                var wWidth = $(window).width();
                // check window width against dialog width
                if (wWidth < (parseInt(dialog.options.maxWidth) + 50))  {
                    // keep dialog from filling entire screen
                    $this.css("max-width", "90%");
                } else {
                    // fix maxWidth bug
                    $this.css("max-width", dialog.options.maxWidth + "px");
                }
                //reposition dialog
                dialog.option("position", dialog.options.position);
            }
        });

    }

    $(".panelbar-formheader-style, .panelbar-form-style").panelBar();
    ltssPanelBar.setup(".panelbar-formheader-style, .panelbar-form-style");

    function newMessage(){
        $( "#newMessage" ).dialog({
            modal: true,
            height: "auto",
            width: "auto",
            maxHeight: 600,
            maxWidth: 800,
            resizable: false,
            draggable : false,
            fluid: true,
            buttons: {
                'Cancel': function() {
                    $(this).dialog('close');
                },
                'Send': function() {
                    $(this).dialog('close');
                }
            }
        });
    }
    function makeReadOnly(){

        $('.genericform-style').addClass('read-only');
        $('.genericform-style input,.genericform-style textarea').each(function(){
           $(this).addClass('readonly').attr('readonly', 'readonly')
        });
        $('.genericform-style input[type=radio],.genericform-style input[type=checkbox],.genericform-style select').each(function(){
           $(this).addClass('readonly').attr('disabled', 'disabled')
        });
    };
</script>


