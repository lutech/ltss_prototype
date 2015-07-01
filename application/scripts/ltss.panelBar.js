// Ultra-basic jQuery plugin pattern.
(function ($) {
    $.panelBar = function (element, options) {

        if (!element.data('panelBar')) {
            this.options = {};

            this.init = function (element, options) {
                this.options = $.extend({}, $.panelBar.defaultOptions, options);
                setupPanelBar(element, this.options, this);
            };

            this.init(element, options);
        }
    }

    var defaults = {
        animationTime: "300ms"
    };

    // Call this public method like $(elem).myMethod();
    $.fn.panelBar = function (options) {
        return this.each(function () {
            // Your chainable "jQuery object" method code here.
            (new $.panelBar($(this), options));
        });
    };

    function setupPanelBar(element, options, instance) {
        var el = element;
        var me = this;

        var startCollapse = el.hasClass('startCollapsed'),
            startExpanded = el.hasClass('startExpanded');
        el.data('panelBar', instance);
        el.children('div, fieldset').not('.disable-panel').each(function (idx, item) {
            $(item).data('panelBar', instance);
            $(item).data('minimize', function () { minimize(item, options); });
            $(item).data('maximize', function () { maximize(item, options); });
            $(item).addClass('panelBarItem');
            var header = $(item).children(':first-child'),
                body = $(item).children(':nth-child(2)').hasClass('header-link') ? $(item).children(':nth-child(3)') : $(item).children(':nth-child(2)');

            if (startCollapse) {
                if (options && options.slide) {
                    body.hide();
                } else {
                    body.css({
                        'height': '0px',
                        'overflow': 'hidden'
                        //'display': 'none' - THIS BREAKS 508 ACCESSIBILITY...DO NOT ADD!!
                    });
                }
                header.addClass('collapsed');
                header.prepend('<div class="arrow collapse"></div>');

            } else {
                if (options && options.slide) {
                    body.show();
                } else {
                    body.css({
                        'height': 'auto',
                        'overflow': 'visible'
                    });
                }
                header.addClass('expanded');
                header.prepend('<div class="arrow expand"></div>');
            }

            header.click(function () {
                if (header.hasClass('collapsed')) {
                    maximize(item, options);
                }
                else {
                    minimize(item, options);
                }
            })

        })

        /*setTimeout(function() { 
         el.children('div').each(function( idx, item) {
         var body = $(item).children(':nth-child(2)');
         body.css({
         'transition': 'height ' + options.animationTime,
         '-moz-transition': 'height ' + options.animationTime,
         '-webkit-transition': 'height ' + options.animationTime,
         '-o-transition': 'height ' + options.animationTime
         })
         })
         }, 0);*/
    }

    function minimize(el, options) {
        var elem = $(el),
            header = elem.children(':first-child'),
            body = elem.children(':nth-child(2)').hasClass('header-link') ? elem.children(':nth-child(3)') : elem.children(':nth-child(2)');
        if (header.hasClass('expanded')) {
            //body.data('oldHeight', body.innerHeight());
            if (options && options.slide) {
                body.slideToggle();
            }
            else {
                body.css({
                    'overflow': 'hidden',
                    'height': '0px'
                    //'display': 'none' - THIS BREAKS 508 ACCESSIBILITY...DO NOT ADD!!
                });
            }

            header.children('.arrow').removeClass('expand').addClass('collapse');
            header.addClass('collapsed');
            header.removeClass('expanded');
        }
    }

    function maximize(el, options) {
        var elem = $(el),
            header = elem.children(':first-child'),
            body = elem.children(':nth-child(2)').hasClass('header-link') ? elem.children(':nth-child(3)') : elem.children(':nth-child(2)');
        if (header.hasClass('collapsed')) {
            if (options && options.slide) {
                body.slideToggle();
            } else {
                body.css({
                    'overflow': 'visible',
                    'height': 'auto'
                });
            }

            header.children('.arrow').removeClass('collapse').addClass('expand');
            header.removeClass('collapsed');
            header.addClass('expanded');
        }
    }


    $.panelBar.defaultOptions = {
        animationTime: "300ms"
    };

})(jQuery);

var ltssPanelBarClass = function () {

    //Expand All
    this.expandAll = function (selector) {
        $(selector).children().not('.disable-panel').each(function () {
            if ($(this).hasClass("panel")) {
                $(this).data("maximize")(this, $(this).data("panelBar").options);
            }
        });

    };

    //Expand Single Panel
    this.expand = function (selector) {

        var elem = $(selector),
            header = elem.children(':first-child'),
            body = elem.children(':nth-child(2)').hasClass('header-link') ? elem.children(':nth-child(3)') : elem.children(':nth-child(2)');

        body.css({
            'overflow': 'visible',
            'height': 'auto'
        });
        header.children('.arrow').removeClass('collapse').addClass('expand');
        header.removeClass('collapsed');
        header.addClass('expanded');

    };

    //Collapse All
    this.collapseAll = function (selector, keepExpanded) {

        $(selector).children().not('.disable-panel').each(function () {
            var panel = this,
                collapseMe = function (me) {
                    $(me).data("minimize")(me, $(me).data("panelBar").options);
                },
                expandMe = function (me) {
                    $(me).data("maximize")(me, $(me).data("panelBar").options);
                };

            if ($(panel).hasClass("panel")) {
                if (keepExpanded) {
                    if ($(panel).hasClass("startExpanded")) {
                        expandMe(panel)
                    } else {
                        collapseMe(panel)
                    }
                } else {
                    collapseMe(panel)
                }
            }
        });
    };

//Collapse Single Panel
    this.collapse = function (selector) {

        var elem = $(selector),
            header = elem.children(':first-child'),
            body = elem.children(':nth-child(2)').hasClass('header-link') ? elem.children(':nth-child(3)') : elem.children(':nth-child(2)');

        body.css({
            'overflow': 'hidden',
            'height': '0px'
        });
        header.children('.arrow').removeClass('expand').addClass('collapse');
        header.addClass('collapsed');
        header.removeClass('expanded');
    };

// fn: Setup and bind 'click' event to Panel Bars & Toggle Buttons that "Expand All" or "Collapse All"
    this.setup = function (target, button) {

        var //Configuration
            panel = ".panel",
            intializedClass = "initialized",
            initialized = "." + intializedClass,
            collapsedPanelClass = "collapsed",
            expandedPanelClass = "expanded",
            collapsedPanel = "." + collapsedPanelClass,
            expandedPanel = "." + expandedPanelClass,
            collapsedButtonClass = "isCollapsed",
            expandButtonText = "Expand All",
            collapseButtonText = "Collapse All",
            ignorePanelClass = "ignoreExpandCollapseState",
            defaultButtonId = "#expandCollapseAll",
            startCollapsedClass = "startCollapsed", //If Target has this class, automatically 'Collapse All' when initialized
            panelBarCountThreshold = 3; //If Panel Bar count is over this number, then automatically 'Collapse All' when initialized

        // fn: Make Button State = 'All Collapsed'
        function buttonStateAllCollapsed(button) {
            $(button).addClass(collapsedButtonClass);//
            $(button).html(expandButtonText);
        }

        // fn: Maked Button State = 'All Expanded'
        function buttonStateAllExpanded(button) {
            $(button).removeClass(collapsedButtonClass);
            $(button).html(collapseButtonText);
        }

        // fn: Toggle Button Text based on state of All Panel Bars
        function updateButtonText(target, button) {
            setTimeout(function () {
                //If Panel Bars are 'All Collapsed'... Add 'All Collapsed' State to Button
                if ($(target).find(collapsedPanel).length > 0 && $(target).find(expandedPanel).length == 0) {
                    buttonStateAllCollapsed(button);
                }
                //If Panel Bars are 'All Expanded'... Add 'All Expanded' State to Button
                else if ($(target).find(expandedPanel).length > 0 && $(target).find(collapsedPanel).length == 0) {
                    buttonStateAllExpanded(button);
                }
                //If Panel Bars are 'All Expanded', including 'Ignored' Panel Bars... Add 'All Expanded' State to Button
                else if ($(target).find(collapsedPanel + ':not(.' + ignorePanelClass + ')').length == 0 && $(target).find(expandedPanel).length > 0 && $(target).find('.' + ignorePanelClass + collapsedPanel).length > 0) {
                    buttonStateAllExpanded(button);
                }
            }, 250);
        }

        // fn: Toggle All Panel Bars
        function toggleAllPanelBars(target, button) {
            if ($(button).hasClass(collapsedButtonClass)) {
                ltssPanelBar.expandAll(target);
            }
            else {
                ltssPanelBar.collapseAll(target);
            }
        }

        //If no custom button is defined, use default #expandCollapseAll toggle button.
        if (!button) {
            button = defaultButtonId;
        }

        //Set Toggle Button Text based on initial state of All Panel Bars when "ltssPanelBar.Setup" is called
        if ($(target).hasClass(startCollapsedClass)) {
            buttonStateAllCollapsed(button);
        }
        else {
            buttonStateAllExpanded(button);
        }

        //Setup Visibility of All Panel Bars based on count
        if ($(target).children(panel).length > panelBarCountThreshold) {
            var exceptions = true; // Watch for panels that should not be collapsed on initial page load.
            ltssPanelBar.collapseAll(target, exceptions);
            buttonStateAllCollapsed(button);
        } else if (!$(target).hasClass(startCollapsedClass)) {
            ltssPanelBar.expandAll(target);
            buttonStateAllExpanded(button);
        }

        //If not intialized, bind 'click' event to each Panel Bar and update Toggle Button state
        $(target).children(panel).each(function () {
            var panel = this;
            if ($(panel).not(initialized)) {
                $(panel).addClass(intializedClass);
                $(panel).on('click', function () {
                    updateButtonText(target, button);
                });
            }
            else {
                //If Initialized, do nothing (Don't re-bind)
            }
        });

        //If not intialized, bind 'click' event to Toggle Button and toggle visibility of All Panel Bars
        if ($(button).not(initialized)) {
            $(button).addClass(intializedClass);
            $(button).on('click', function () {
                toggleAllPanelBars(target, button);
                updateButtonText(target, button);
            });
        } else {
            //If Initialized, do nothing (Don't re-bind)
        }
    };

};

this.addExpandCollapseButton = function () {

    if ($('.panel').length > 1) {
        if ($('.workspace-header-bar div.float-right').length == 0) {
            $('.workspace-header-bar').append('<div class="float-right"></button>');
        }
        if ($('.workspace-header-bar #expandCollapseAll').length == 0) {
            $('.workspace-header-bar div.float-right').append('<button id="expandCollapseAll" onClick="return false"  runat="server"></button>');
            ltssPanelBar.setup(".panelbar-task-style, .panelbar-formheader-style, .panelbar-form-style");
        }
        $('#expandCollapseAll').show();
    }
    else {
        $('#expandCollapseAll').hide();
    }

    if ($('.panel').length > 1) {
        if ($('.searchspace-footer-bar div.float-right').length == 0) {
            $('.searchspace-footer-bar').append('<div class="float-right"></button>');
        }
        if ($('.searchspace-footer-bar #expandCollapseAll').length == 0) {
            $('.searchspace-footer-bar div.float-right').append('<button id="expandCollapseAll" onClick="return false" runat="server"></button>');
        }
        $('#expandCollapseAll').show();
    }
    else {
        $('#expandCollapseAll').hide();
    }
};

var ltssPanelBar = new ltssPanelBarClass();